<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = auth()->user()->teacher;

        $students = Student::where('teacher_id',$teacher->id)->paginate(10);
        return view('students.index', compact('students'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create'); // Example view name
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'roll'=> 'required',
            'class' => ['required', 'regex:/^[0-9]+$/'],
            'section' => ['required', 'regex:/^[A-Z]$/'],
            'subject' => 'required',
        ]);
        $teacher = auth()->user()->teacher;
        if(!$teacher){
            return redirect()->back()->with('error','Teacher not found');
        }
        $student = new Student();
        $student->std_name = $request->name;
        $student->std_subject = $request->subject;
        $student->std_class = $request->class;
        $student->std_section = $request->section;
        $student->std_roll = $request->roll;
        $student->teacher_id=$teacher->id;
        
        $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.view', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::where('id', $id)->where('teacher_id',auth()->user()->teacher->id)->firstOrFail();
        return view('students.edit', compact('student'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        if ($student->teacher_id !== auth()->user()->teacher->id) {
        abort(403);
    }
        $request->validate([
            'name' => 'required',
            'roll'=> 'required',
            'class' => ['required', 'regex:/^[0-9]+$/'],
            'section' => ['required', 'regex:/^[A-Z]$/'],
            'subject' => 'required',
        ]);
        $student->std_name = $request->name;
        $student->std_subject = $request->subject;
        $student->std_class = $request->class;
        $student->std_section = $request->section;
        $student->std_roll = $request->roll;
        
        $student->update();
        return redirect()->route('students.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        if ($student->teacher_id !== auth()->user()->teacher->id) {
        abort(403);
    }
        $student->delete();

        return redirect()->route('students.index');    }

       
}
