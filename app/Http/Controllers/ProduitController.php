<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Entrepot;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $titre='List des Produits';
    //     $produit=Produit::all();
    //     return view('produit.index',compact('produit','titre'));
    // }

    public function index(Request $request)
    {
        $search = $request->search;
        $titre='List des Produits';
        
        if ($search) {
            $produit = Produit::where('libelle', 'LIKE', $search . '%')
                                // ->orWhere('adresse', 'LIKE', '%' . $search . '%')
                                ->get();
        } else {
            $produit = Produit::all();
        }

        return view('produit.index', compact('produit', 'search','titre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titre='Ajouter un Produits';
        return view('produit.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|max:30',
            'prix' => 'required|numeric|max:70000',
            'photo' => 'required|image'
        ]);
        

        $data=$request->all();
        $data['photo']=$request->photo->store('produit/images');
        Produit::create($data);
        return   redirect()->route('produit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit=Produit::find($id);
        $titre='Editer un Entrepots';
        return view('produit.edit',compact('titre','produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = Produit::find($id);
        $request->validate([
            'libelle' => 'required|max:30',
            'prix' => 'required|numeric|max:70000',
            // 'photo' => 'required|image'
        ]);


        $data=$request->all();
        if($request->has('photo')){
            $request->validate([
                'photo' => 'required|image'
            ]);
            unlink(public_path('storage/'.$produit->photo));
            $data['photo']=$request->photo->store('produit/images');
        }else {
            unset($data['photo']);
        }

        $produit->update($data);
        return redirect()->route('produit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit = Produit::find($id);
        unlink(public_path('storage/'.$produit->photo));
        $produit->delete();
        return redirect()->route('produit');
    }

    
}
