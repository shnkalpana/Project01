<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SubProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubProjectController extends Controller
{
    public function index()
    {
        $subprojects = SubProject::with('projects')->get();

        return view('subprojects.index',[
            'subprojects'=>$subprojects,
        ]);
    }

    public function create()
    {
        return view('subprojects.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'sub_project_name' => 'required|string|max:255',
                'project_id' => 'required'
            ]
        );

        SubProject::create($validate);
        return Redirect('project_manager')->with('success', 'subproject created successfully');
    }

    public function edit($id)
    {
        $subprojects = SubProject::findOrFail($id);
        return view('subprojects.edit', compact('subprojects'));
    }

    public function update(Request $request, $id)
    {
        $subproject = SubProject::findOrFail($id);
        $subproject->update($request->all());
        return redirect('subprojects.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $subproject = SubProject::findOrFail($id);
        $subproject->delete();
        return redirect('subprojects')->with('success', 'Product deleted successfully.');
    }

    public function show($id){
        $subproject = Subproject::findOrFail($id);
        return view('subprojects.show', ['subproject'=>$subproject]);
    }
}
