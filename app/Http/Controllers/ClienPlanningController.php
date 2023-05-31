<?php

namespace App\Http\Controllers;

use App\Models\Client_planning;
use Illuminate\Http\Request;

class ClienPlanningController extends Controller
{
    public function index()
    {
        $plannings = Client_planning::all();

        return view('Clien_planning.index', compact('plannings'));
    }

    public function create()
    {
        return view('Clien_planning.create');
    }

    public function store(Request $request)
    {
        
        Client_planning::create([
           'date' => $request->input('date'),
           'message' => $request->input('message'),
           'etat' => $request->input('status'),
            
        ]);
    


        return redirect()->route('clien_planning.index')->with('success', 'Client planning created successfully.');
    }

    public function edit(Clien_planning $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Clien_planning $client)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'message' => 'required',
            'etat' => 'required',
        ]);

        $client->update($validatedData);

        return redirect()->route('clients.index')->with('success', 'Client planning updated successfully.');
    }

    public function destroy(Clien_planning $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client planning deleted successfully.');
    }
}
