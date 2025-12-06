<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use Illuminate\Support\Facades\Session; 

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $professors = Professor::all();
        return view('professors.index', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('professors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfessorRequest $request)
    {
        Professor::create($request->validated());

        Session::flash('success', 'Professor added successfully');
        return redirect()->route('professors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professor $professor)
    {
         return view('professors.edit', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $professor)
    {
           return view('professors.edit', compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfessorRequest $request, Professor $professor)
    {
        $professor->update($request->validated());

        Session::flash('success', 'Professor updated successfully');
        return redirect()->route('professors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor)
    {
        $professor->delete();

        Session::flash('success', 'Professor deleted successfully');
        return redirect()->route('professors.index');
    }
}
