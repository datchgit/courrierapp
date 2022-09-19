<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dossier;
use App\Models\Courrier;
use App\Models\Sousdirection;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CourrierController extends Controller
{
    //

    public function registre(){
        return view('compte.agent.courrier.registre.registre');
    }


    public function create(){
        return view('compte.agent.courrier.enregistrement.register');
    }



    public function store(Request $request)
    {
    
        $inputs = $request->input();
        $files = $request->file();

        Validator::make($inputs,[
            'nom'=>['required','max:255'],
            'prenom'=>['required','string','max:255'],
            'objet'=>['required'],
            'matricule'=>['required','string','max:255'],
            'numero'=>['required',Rule::unique(Courrier::class)],
            'agent'=>['required']
        ])->validate();
        
      


       $courrier = Courrier::create([
            'nom'=>$inputs['nom'],
            'prenom'=>$inputs['prenom'],
            'objet'=>$inputs['objet'],
            'matricule'=>$inputs['matricule'],
            'numero'=>$inputs['numero'],
            'agentdrh_id'=>$inputs['agent'],
            'statut'=>'enregistrer'
        ]);
      
    
      
        
      
        for($i=0; $i < count($files['dossier']); $i++){
         
                $file = $files['dossier'][$i];
                $image_name = time(). '_'. $file->getClientOriginalName();
                $file->move(\public_path("courrier/dossiers"), $image_name);

                Dossier::create([
                    'contenu'=>$image_name,
                    'courrier_id'=>$courrier->id 
                    ]);
        }
     
        
     

        
        Alert::success('Operation Réussie ', 'Courrier n° '.  $inputs['numero']  .' enregistré avec succèss');
         
        return redirect()->route('courrier.create');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //

        $user= User::find(Auth::user()->id);
        $courriers= $user->courriers()->paginate(15);
       
        return  view('dashboard.courrier.list', compact('courriers'));
    }


    public function registre_courrier_enregister_menu(){

        return view('compte.agent.courrier.registre.enregistrer.menu');
    }

    public function registre_courrier_enregister_liste(){

        $courriers = Courrier::where('statut','enregistrer')->paginate(10);
        return view('compte.agent.courrier.registre.enregistrer.liste' , compact('courriers'));
    }

    /**/


    public function detail($id){

        $courrier = Courrier::where('id',$id)->get()->first();
        $dossiers = Dossier::where('courrier_id',$id)->paginate(5);
        
        return view('compte.agent.courrier.detail',compact('courrier','dossiers'));
    }


    public function courrier_recu_du_jour(){

        
        $sousdirections = Sousdirection::all();
        $courriers = [];
        foreach($sousdirections as $s){
            foreach($s->courriers as $c){
              
                 if($c->pivot->destinataire==Auth::user()->id){ 
                    array_push($courriers,$c);
                 };
            }
        }

        dd($courriers);
       
        return view('compte.agent.courrier.boite.recu.courrier_du_jour');
    }

}
