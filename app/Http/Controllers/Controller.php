<?php



namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Directeur;
use App\Models\Evenement;
use App\Models\Pv;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    
    function index(){
        return view('admin.index');
    } 

    function index2(){
        
        $allEvenements=Evenement::all();
        $allDirecteurs=Directeur::all();


   
        return view('client.index',['allEvenements'=>$allEvenements,'allDirecteurs'=>$allDirecteurs]);
    }

    function get_aboutus(){
        return view('client.aboutus');
    }
    function get_actualites(){
        $first_evenement=DB::table('evenements')->first();
        // dd($first_evenement);
        // dd($first_evenement->created_at->format('D M Y'));
        $allEvenements=Evenement::all();
        return view('client.actualites',['allEvenements'=>$allEvenements, 'first_evenement'=>$first_evenement]);
    }
    function get_administration(){
        return view('client.administration');
    }
    function get_bcs(){
        return view('client.bcs');
    }
    function get_bue(){
        return view('client.bue');
    }
    function get_clubs(){
        return view('client.clubs');
    }
    function get_contact(){
        return view('client.contact');
    }
    function get_formations(){
        return view('client.formations');
    }
    function get_consultations(){
        $allpvs=Pv::all();
        return view('client.consultation',['allpvs'=>$allpvs]);
    }
    function show($id)
    {

        $evenement = Evenement::find($id);
        // dd($pv);
        return view('client.article_unique', ['evenement'=>$evenement]);
    }
    function show_consultation($id)
    {

        $pv = Pv::find($id);
        // dd($pv);
        return view('client.consultation_unique', ['pv'=>$pv]);
    }
}
