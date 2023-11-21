<?php
namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Assignment;
use Illuminate\Support\Facades\File;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $teachers = Teacher::paginate(10);
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = User::where('role', 'teacher')->get(); // Fetch all users with the role 'teacher'
        return view('teachers.create', compact('teachers'));
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
            'teacher' => 'required|numeric|exists:users,id',
            'image' => 'required|file|mimes:jpeg,jpg|max:2048',
            // Only allow jpeg and jpg formats, with a max size of 2MB.
            'class' => ['required', 'regex:/^[0-9]+$/'],
            'section' => ['required', 'regex:/^[A-Z]$/'],
            'subject' => 'required',
        ]);

        // // Handle file upload
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imagePath = $image->store('teacher_images', 'public');
        // }

        // Create a new teacher record
        $user = User::find($request->teacher);
        $teacher = new Teacher();
        $teacher->teacher_name = $user->name;
        $teacher->user_id = $request->teacher;
        $teacher->teacher_sub = $request->subject;
        $teacher->class = $request->class;
        $teacher->section = $request->section;

        $person = strtolower(str_replace(' ', '', $request->teacher) . '.' . $request->image->extension());
        $request->image->move(public_path('uploads'), $person); 
        $teacher->teacher_image = $person;
        $teacher->save();

        return redirect()->route('teachers.index');
        notify()->success('Teacher Updated Successfully');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.view', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $teacherId = $teacher->id;
        $teachers = Teacher::pluck('teacher_name', 'id');

        return view('teachers.edit', compact('teacher', 'teachers', 'teacherId'));
        return redirect()->route('teachers.index');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'teacher' => 'required',
            'image' => 'file|mimes:jpeg,jpg|max:2048',
            // Only allow jpeg and jpg formats, with a max size of 2MB.
            'class' => ['required', 'regex:/^[0-9]+$/'],
            'section' => ['required', 'regex:/^[A-Z]+$/'],
            'subject' => 'required',
        ]);

        if ($request->image != NULL) {
            $request->validate([
                'image' => 'image|mimes:png,jpg,jpeg|max:3000'
            ]);
            $person = strtolower(str_replace(' ', '', $request->teacher) . '.' . $request->image->extension());
            $request->image->move(public_path('uploads'), $person);
            File::delete(public_path('uploads/' . $teacher->image));
            $teacher->teacher_image = $person;
        }
        $teacher->class = $request->class;
        $teacher->teacher_name = $request->teacher;
        $teacher->teacher_sub = $request->subject;
        $teacher->section = $request->section;
        $teacher->update();
        notify()->success('Teacher Updated Successfully');

        return redirect()->route('teachers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
    public function viewAssignments()
    {
        // Retrieve student assignments from the database
        $user = auth()->user(); // Assuming you have a 'Teacher' model.
        $teacher=Teacher::where('user_id',$user->id)->first();
        // Get submissions assigned to this teacher
        $submissions = Submission::where('teacher_id',$teacher->id)->get();

        return view('teachers.assignments', compact('submissions'));
    }

}