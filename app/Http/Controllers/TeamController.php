<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Models\Team;

class TeamController extends Controller {
    /**
     * Display a listing of the resource.
     */

    public function index() {
        $data['title'] = 'Team List';
        $data['teams'] = Team::paginate(10);
        return view('teams.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $data['title'] = 'Add Team';
        return view('teams.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request) {
        if ($request->validated()) {
            Team::create(
                [
                    'name' => $request->name,
                    'description' => $request->description,
                    'status' => $request->status,
                ]
            );
        }
        return redirect()->route('teams.index')->with('success', 'Team created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $data['title'] = 'Team Details';
        $data['teamInfo'] = Team::findOrFail($id);
        return view('teams.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $data['title'] = 'Edit Team';
        $data['teamInfo'] = Team::findOrFail($id);
        return view('teams.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, string $id) {
        $team = Team::findOrFail($id);
        if ($request->validated()) {
            $team->update(
                [
                    'name' => $request->name,
                    'description' => $request->description,
                    'status' => $request->status,
                ]
            );
        }
        return redirect()->route('teams.index')->with('success', 'Team updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {


        $team = Team::findOrFail($id);

        if ($team->agents()->count() > 0) {
            return redirect()->back()->with('error', 'Cannot delete team with agents.');
        }

        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Team deleted successfully');
    }
}
