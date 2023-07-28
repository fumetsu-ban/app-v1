<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Entrepot;
use Illuminate\Http\Request;

class EntrepotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $titre='List des Entrepots';
    //     $entrepot=Entrepot::all();
    //     return view('entrepot.index',compact('entrepot','titre'));
    // }

    public function index(Request $request)
    {
        $search = $request->search;
        $titre='List des Entrepots';
        
        if ($search) {
            $entrepot = Entrepot::where('libelle', 'LIKE',  $search . '%')
                                ->orWhere('adresse', 'LIKE',  $search . '%')
                                ->get();
        } else {
            $entrepot = Entrepot::all();
        }

        return view('entrepot.index', compact('entrepot', 'search','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titre='Ajouter un Entrepots';
        return view('entrepot.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|max:30',
            'adresse' => 'required|max:200',
            'capacite_max' => 'required|integer',
            'type' => 'required|in:dipo,magazin',
        ]);

        Entrepot::create($request->all());
        return   redirect()->route('entrepot');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

       $entrepot= Entrepot::find($id);
       $titre= "consultation du  ".$entrepot->libelle;
    return view("entrepot.show",compact('entrepot','titre'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $entrepot=Entrepot::find($id);
        $titre='Editer un Entrepots';
        return view('entrepot.edit',compact('titre','entrepot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $entrepot = Entrepot::find($id);
        $request->validate([
            'libelle' => 'required|max:30',
            'adresse' => 'required|max:200',
            'capacite_max' => 'required|integer',
            'type' => 'required|in:dipo,magazin',
        ]);
        $entrepot->update($request->all());
        return redirect()->route('entrepot');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entrepot = Entrepot::find($id);
        $entrepot->delete();
        return redirect()->route('entrepot');
    }



        
}
