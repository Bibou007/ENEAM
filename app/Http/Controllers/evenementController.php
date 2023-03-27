<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class evenementController extends Controller
{
    function index(){
        $allEvenements=Evenement::all();

        return view('admin.all-evenement',['allEvenements'=>$allEvenements]);
    }
    function add(){
        return view('admin.add-evenement');
    }
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'titre' => ['required'],
            'categorie' => ['required'],
            'description' => ['required'],
            // 'pv_pdf'=>['required'],

        ]);
        // dd($request);
        $pv = new Evenement();
        $pv->titre = $request->titre;
        $pv->categorie = $request->categorie;
        $pv->description = $request->description;
        
        $path = public_path() . '/uploads/Couverture/';
        $image = $request->image;
        // dd($pv_pdf);
        $imagename = $image->getClientOriginalName();
        // dd($pvname);
        $image->move($path, $imagename);

        //for update in table
        $pv->image_path = $imagename;
        // dd($pv);
        $pv->save();
        if (!$pv->save()) {

            return back()->with('message', 'Certaines informations manquent. Veuillez recommencer');
        } else {
            return back()->with('message', 'PV enregistré avec succès');
        }
    }
    public function show($id)
    {

        $evenement = Evenement::find($id);
        // dd($pv);
        return view('admin.single-evenement', ['evenement'=>$evenement]);
    }
    public function destroy($id)
    {
        $evenement = Evenement::find($id);
        // dd($pv->pv_path);
        // dd($post);
        $evenement->delete();
        return back()->with('message', 'Evènement supprimer avec succès');
    }
}
