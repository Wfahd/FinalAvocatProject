<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affaire;
use App\Models\Etape;

class Etapescontroller extends Controller
{
    /**
 
     */
    public function index($id)
    {
        $affaire = Affaire::findOrFail($id);
        $etapes = $affaire->etape;
        
        return response()->json($etapes);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $case = Affaire::findOrFail($id);
        return view('etapes.create')->with('affaire', $case);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etape = Etape::create([
            'deadline' => $request->input('deadline'),
            'next_steps' => $request->input('next_step'),
            'notes' => $request->input('notes'),
            'document' => $request->input('document'),
            'affaire_id' => $request->input('case_id')
        ]);

        $case = $etape->Affaire;
        $id =  $case->id ; 


        return redirect()->route('etapes.create', ['id' => $id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $affaire = Affaire::findOrFail($id);
        $etapes = $affaire->etape;
        return view('etapes.index', compact('affaire', 'etapes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $etape = Etape::findOrFail($id);
        return view('etapes.edit')->with('etape', $etape);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $etape = Etape::findOrFail($id);
        $etape->deadline = $request->input('deadline');
        $etape->next_steps = $request->input('next_step');
        $etape->notes = $request->input('notes');
        $etape->document = $request->input('document');
        $etape->save();

        return redirect('/MyClients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
