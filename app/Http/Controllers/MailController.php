<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Courrier;
use Illuminate\Http\Request;
use App\Models\Sousdirection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    //




    public function selectCourrier(Request $request){
       

        if($request->input('courrier')==null){

           
            return redirect()->back();
        }else{

            $operation = $request->input('operation');
            $courriers_list = $request->input('courrier');
            $sousdirections=Sousdirection::all();
            //$services=Service::all();
            //$agents=User::all();
        
            return view('compte.agent.courrier.selectdestinaireform.selectdestinaire',compact('courriers_list','operation','sousdirections')) ;
            //return redirect()->route('courrier.envoi.selectdestination',['courrier'=>$courriers_list]);      
        }
      

    }



    public function selectdestination($courriers_list){

    }


    public function sendToSecretariat(Request $request){

        $inputs = $request->input();

      
      
        $service=Service::where('nom',"SECRETARIAT")->first() ; 
        $operation="enregistrement";
        $statut="envoyer au secretariat";
        $sousdirection=$service->sousdirection->id;

        $destinataire= User::where('service_id',$service->id)->first();

        foreach($inputs['courrier'] as $c){

           
               $sousdirection = Sousdirection::where('id',$sousdirection)->first(); 
               
               $sousdirection->courriers()->attach($c,[
                     'expediteur'=>Auth::user()->id,
                     'operation'=>$operation,

                     'service'=>$service->id,
                     'destinataire'=>$destinataire->id,
                     'statut'=>$statut,
                ]); 

                Courrier::where('id',$c)->update([
                   'statut'=>$statut
                ]);    
            

          
        };
        
        event(new \App\Events\SendMailsEvent());

        Alert::toast("Envoyer avec succès",'success');
        return redirect()->route('courrier.registre_enregistrer');
       
       
        
    }


    public function imputer(){

    }


    public function send(Request $request){

      
        $inputs = $request->input();

        $envoies = null;


      
        //sousdirection_id	courrier_id	expediteur	operation	libelle	service	destinataire	statut
        
        Validator::make($inputs,[
            'sousdirection'=>['required'],
            'service'=>['required'],       
        ])->validate();
 
       
        foreach($inputs['courriers'] as $c){

            foreach($inputs['destinataire'] as $d){
                $sousdirection = Sousdirection::where('id',$inputs['sousdirection'])->first(); 
               $envoies = $sousdirection->courriers()->attach($c,[
                    'expediteur'=>Auth::user()->id,
                     'operation'=>$inputs['operation'],
                     'libelle'=>$inputs['consigne'],
                     'service'=>$inputs['service'],
                     'destinataire'=>$d,
                     'statut'=>$inputs['operation'],
                ]); 

              
                Courrier::where('id',$c)->update([
                   'statut'=>$inputs['operation']
                ]);    
            };

          
        };
        
        event(new \App\Events\SendMailsEvent());

        if($inputs['operation']==strtolower('Envoyer au secretariat')){
            Alert::toast(" Envoyer avec succès",'success');
            return redirect()->route('courrier.registre');
        }else{
            Alert::toast(" Envoyer avec succès",'success');
            return redirect()->route('courrier_recu_menu');
        };
       
    }



    
    public function getServices($id){

        $services = Service::where('sousdirection_id',$id)->get();
     
        return $services ;
    }

    public function getAgents($id){

        $agents = User::where('service_id',$id)->get();

        return $agents ;
    }


}
