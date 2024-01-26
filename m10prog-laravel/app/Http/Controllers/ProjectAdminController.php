<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(2);
        return view('dashboard.projects.index', ['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'titel' => 'required|unique:projects|max:255',
            'description' => 'required',
        ]);

        $product = new Project();
        $product->titel = $valid['titel'];
        $product->description = $valid['description'];

        $product->save();

        return redirect(route('url.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', ['projects'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $valid = $request->validate([
            'titel' => 'required|min:3',
            'description' => 'required|min:10',
        ]);

        $project->update($valid);
        $project->save();

        return redirect()->route('projects.index');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');   
    }
}
