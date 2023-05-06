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
       $etapes =  $affaire->etape ;  
       return view('etapes.index', compact('affaire', 'etapes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $case = Affaire::findOrFail($id);

        return view('etapes.create')
        -> with('affaire',$case);
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
            'affaire_id' => $request->input('case-id')
        ]);
        $case = $etape->Affaire ; 

        return redirect('/MyClients');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $affaire = Affaire::findOrFail($id);
        $etapes =  $affaire->etape ;  
        return view('etapes.index', compact('affaire', 'etapes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
