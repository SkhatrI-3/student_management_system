<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Assignment as F;
use Auth;



class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = Assignment::paginate(10);
        return view('assignments.index', compact('assignments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assignments.create');
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
            'file' => 'required|file|mimes:jpeg,jpg,pdf|max:2048',
            // Only allow jpeg and jpg formats, with a max size of 2MB.
            'deadline' => ['required', 'date'],
            'description' => 'required',
        ]);

        // // Handle file upload
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imagePath = $image->store('teacher_images', 'public');
        // }

        // Create a new teacher record
        $assignment = new Assignment();
        $assignment->name = $request->name;
        $assignment->deadline = $request->deadline;
        $assignment->description = $request->description;

        $project = strtolower(str_replace(' ', '', $request->name) . '.' . $request->file->extension());
        $request->file->move(public_path('uploads'), $project);
        $assignment->file = $project;
        $assignment->user_id = Auth::user()->id;
        $assignment->save();
        $assignment->save();

        return redirect()->route('assignments.index')->with('success', 'Assignment created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        return view('assignments.view', compact('assignment'));

        return redirect()->route('assignments.index');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {



        return view('assignments.edit', compact('assignment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        if ($request->file != NULL) {
            $request->validate([
                'file' => 'file|mimes:png,jpg,jpeg|max:3000'
            ]);
            $project = strtolower(str_replace(' ', '', $request->name) . '.' . $request->file->extension());
            $request->file->move(public_path('uploads'), $project);
            F::delete(public_path('uploads/' . $assignment->file));
            $assignment->file = $project;
        }
        $assignment->name = $request->name;
        $assignment->deadline = $request->deadline;
        $assignment->description = $request->description;
        $assignment->update();
        notify()->success('Assignment Updated Successfully');

        return redirect()->route('assignments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect()->route('assignments.index');
    }
    public function givenAssignments()
    {
        // Retrieve student assignments from the database
        $user = auth()->user();

        // Get submissions assigned to this teacher
        $assignments = Assignment::all();

        return view('assignments.given', compact('assignments'));
    }

    public function download(Request $request, $file)
    {
        return response()->download(public_path('uploads/' . $file));
    }

}


