<?php

namespace App\Http\Controllers;

use App\Models\Pv;
use Illuminate\Http\Request;

class PVController extends Controller
{
    function index()

    {
        $allPvs=PV::all();
        // dd($allPvs);
        return view('admin.all-pv',['allPvs'=>$allPvs]);
    }

    function add()
    {
        return view('admin.add-pv');
    }
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'annee' => ['required'],
            'mode_cours' => ['required'],
            'filiere' => ['required'],
            // 'pv_pdf'=>['required'],

        ]);
        // dd($request);
        $pv = new Pv();
        $pv->annee = $request->annee;
        $pv->mode_cours = $request->mode_cours;
        $pv->filiere = $request->filiere;
        
        $path = public_path() . '/uploads/PV/';
        $pv_pdf = $request->pv_pdf;
        // dd($pv_pdf);
        $pvname = $request->annee.'_'. $request->filiere.'_'.$request->mode_cours. '.' . $pv_pdf->extension();
        // dd($pvname);
        $pv_pdf->move($path, $pvname);

        //for update in table
        $pv->pv_path = $pvname;
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

        $pv = Pv::find($id);
        // dd($pv);
        return view('admin.single-pv', ['pv'=>$pv]);
    }
    public function destroy($id)
    {
        $pv = Pv::find($id);
        // dd($pv->pv_path);
        // dd($post);
        $pv->delete();
        return back()->with('message', 'PV supprimer avec succès');
    }
}
