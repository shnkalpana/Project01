<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasksRequest;
use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::with('subprojects')->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTasksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate(
            [
                'name' => 'required|string|max:255',
                'sub_project_id' => 'required',
                'assigned_user_id' => 'required',
                'description' => 'required',
                'deadline' => 'required'
            ]
        );

        Tasks::create($validate);

        return Redirect()->back()->with('success', 'subproject created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $task = Tasks::findOrFail($id);
        return view('tasks.show',['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasks $id)
    {
        //
        $task = Tasks::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTasksRequest  $request
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    //
    $task = Tasks::findOrFail($id);

    $validate = $request->validate(
        [
            'done' => 'required'
        ]
    );

    $task->update($validate);

    // Redirect back or to a success page
    return Redirect()->back()->with('success', 'User updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasks $tasks)
    {
        //
    }

    public function designer()
    {
        $userId = auth()->user()['id']; // Get the authenticated user's ID
        $tasks = Tasks::where('assigned_user_id', $userId)->get(); // Retrieve tasks assigned to the user

        return view('/designer', compact('tasks'));
    }
}
