<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Fetch submissions with the selected teacher's information
        $submissions = Submission::with('teacher')->where('user_id', Auth::id())->get();

        return view('submissions.index', compact('submissions'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */public function create()
    {
        // $teacherId = request("id");
        // $teacher = Teacher::find($teacherId);
        $teachers = Teacher::all();
        $submission = new Submission(); // Assuming this is where you create a new Submission instance

        return view('submissions.create', compact('submission', 'teachers'));
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
            'teacher' => 'required',
            'subject' => 'required',
            'description' => 'required', // Add validation rules for 'description'
            'file' => 'required|file',  // Add validation rules for 'file'
            'date' => 'required',  // Add validation rules for 'file'
        ]);

        $submission = new Submission();

        if ($request->hasFile('file')) {
            if ($request->hasFile('file')) {
                $file = $request->file;
                $user = auth()->user(); // Get the authenticated user
                $filename = $user->name . '.' . $file->getClientOriginalExtension();
                $file->move('assets', $filename);
                $submission->file = $filename;
            }

        }
        $teacherId = $request->teacher;
        $teacher = Teacher::findOrFail($teacherId);
        $submission->teacher_id = $teacherId;


        $submission->description = $request->description;
        $submission->date = $request->date;
        $submission->user_id = auth()->user()->id;
        $submission->save();
        return redirect()->route('submissions.index', [
            'teacherName' => $teacher->teacher_name,
            'teacherId' => $teacher->id,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        //
    }
    public function download(Request $request, $file)
    {
        return response()->download(public_path('uploads/' . $file));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {

        return view('submissions.edit', compact('submission'));
        return redirect()->route('submissions.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submission $submission)
    {
        $request->validate([
            'description' => 'required', // Add validation rules for 'description'
            'file' => 'file',  // Add validation rules for 'file'
            'date' => 'required',  // Add validation rules for 'file'
        ]);
        if ($request->file != NULL) {
            $request->validate([
                'file' => 'file|mimes:png,jpg,jpeg,pdf|max:3000'
            ]);
            $person = strtolower(str_replace(' ', '', $request->description) . '.' . $request->file->extension());
            $request->file->move(public_path('uploads'), $person);
            File::delete(public_path('uploads/' . $submission->file));
            $submission->file = $person;
        }



        $submission->description = $request->description;
        $submission->date = $request->date;
        $submission->user_id = auth()->user()->id;
        $submission->update();
        return redirect()->route('submissions.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        $submission->delete();
        return redirect()->route('submissions.index');
    }


}
