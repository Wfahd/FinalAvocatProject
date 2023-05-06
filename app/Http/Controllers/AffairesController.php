<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affaire;
use App\Models\Client;
use App\Models\Etape;


class AffairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Affaires.cases')->with('affaires', Affaire::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Affaires.createCase')->with('client', Client::get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $client = Client::where('user_id', Auth()->user()->id)->first();

        $affaire =  Affaire::create([
            'Name' => $request->input('name'),
            'Description' => $request->input('Description'),
            'status' => $request->input('status'),
            'client_id' => $request->input('client_id'),
            'priorité' => $request->input('priorité')
        ]);
        $id =  $affaire->id ; 

        return redirect()->route('etapes.create', ['id' => $id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        $cases = $client->Affaire;
        return view('Affaires.cases', compact('client', 'cases'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $affaire = Affaire::findOrFail($id);
        return view('Affaires.editCase', compact('affaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $affaire = Affaire::findOrFail($id);
        
        $affaire->update([
            'Name' => $request->input('name'),
            'Description' => $request->input('Description'),
            'status' => $request->input('status'),
            'client_id' => $request->input('client_id'),
            'priorité' => $request->input('priorité')
        ]);

        return redirect('/MyClients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $affaire = Affaire::findOrFail($id);
        $affaire->delete();
        return redirect()->route('Affaires.cases', ['id' => $id]);
    }
}
