<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Team;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;

class AgentController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data['title'] = 'Agent List';
        $data['agents'] = Agent::with('team')->paginate(10);
        return view('agents.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $data['title'] = 'Add Agent';
        $data['teams'] = Team::all();
        return view('agents.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgentRequest $request) {
        $agent = Agent::create($request->validated());
        return redirect()->route('agents.index')->with('success', 'Agent created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $data['title'] = 'Agent Details';
        $data['agentInfo'] = Agent::findOrFail($id);
        return view('agents.details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $data['title'] = 'Edit Agent';
        $data['agentInfo'] = Agent::findOrFail($id);
        $data['teams'] = Team::all();
        return view('agents.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgentRequest $request, string $id) {
        $agent = Agent::findOrFail($id);
        $agent->update($request->validated());
        return redirect()->route('agents.index')->with('success', 'Agent updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $agent = Agent::findOrFail($id);
        $agent->delete();
        return redirect()->route('agents.index')->with('success', 'Agent deleted successfully');
    }
}
