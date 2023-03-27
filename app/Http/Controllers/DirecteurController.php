<?php

namespace App\Http\Controllers;

use App\Models\Directeur;
use Illuminate\Http\Request;
class DirecteurController extends Controller
{
    function index(){
        $allDirecteurs=Directeur::all();

        return view('admin.all-Directeur',['allDirecteurs'=>$allDirecteurs]);
    }
    function add(){
        return view('admin.add-directeur');
    }

    function store(Request $request)
    {
        
        $request->validate([
            'nom' => ['required'],
            'numero' => ['required'],
            'genre' => ['required'],
            'mot'=>['required'],
            // 'pv_pdf'=>['required'],

        ]);
        // dd($request->nom);
        $directeur = new Directeur();
        
        $directeur->nom = $request->nom;
        $directeur->numero = $request->numero;
        $directeur->genre = $request->genre;
        $directeur->mot = $request->mot;
        // dd($request);
        $path = public_path() . '/uploads/Directeurs/';
        $photo = $request->photo;
        // dd($pv_pdf);
        $photoname = 'Photo_De_' . $request->nom . '.' . $photo->extension();
        // dd($pvname);
        $photo->move($path, $photoname);

        //for update in table
        $directeur->photo_path = $photoname;
        // dd($pv);
        $directeur->save();
        if (!$directeur->save()) {

            return back()->with('message', 'Certaines informations manquent. Veuillez recommencer');
        } else {
            return back()->with('message', 'PV enregistré avec succès');
        }
    }
    public function show($id)
    {

        $directeur = Directeur::find($id);
        // dd($pv);
        return view('admin.single-directeur', ['directeur'=>$directeur]);
    }
    public function destroy($id)
    {
        $directeur = Directeur::find($id);
        // dd($pv->pv_path);
        // dd($post);
        $directeur->delete();
        return back()->with('message', 'Directeur supprimer avec succès');
    }
}
