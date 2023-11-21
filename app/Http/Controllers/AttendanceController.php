<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentId = request("id"); // Make sure to change "student_id" to the actual request parameter name
        $student = Student::find($studentId);
        
        // Pass the student's name to the view
        
        return view('attendances.create',compact('student'))  ;
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
            'status' => 'required',
            'date'=> 'required',
            'student_id' => 'required'
           
        ]);
        $attendance = new Attendance();
        $attendance->status = $request->status;
        $attendance->date = $request->date;
        $attendance->student_id = $request->student_id;
       
        
        $attendance->save();

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        $attendance = Attendance::with('student')->where('id',$attendance->id)->first();
        // ask
        return view('attendances.edit', compact('attendance'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        
        $request->validate([
            'status' => 'required',
            'date'=> 'required',
            'student_id' => 'required'
           
        ]);
        $attendance->status = $request->status;
        $attendance->date = $request->date;
        $attendance->student_id = $request->student_id;
       
        
        $attendance->update();

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
