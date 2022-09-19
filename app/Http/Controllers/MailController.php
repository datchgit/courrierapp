<?php

namespace App\Http\Controllers;

use App\Events\SendMailsEvent;
use App\Models\Courrier;
use App\Models\Service;
use App\Models\Sousdirection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MailController extends Controller
{
    //


    public function selectCourrier(Request $request){
       
       $operation = $request->input('operation');
       $courriers_list = $request->input('courrier');
   
       return view('compte.agent.courrier.selectdestinaireform.selectdestinaire',compact('courriers_list','operation')) ;
       //return redirect()->route('courrier.envoi.selectdestination',['courrier'=>$courriers_list]);      
    }



    public function selectdestination($courriers_list){
  

        
      


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
        
        
        
       new SendMailsEvent();

   


        if($inputs['operation']==strtolower('Envoyer au secretariat')){
            Alert::toast(" Envoyer avec succès",'success');
            return redirect()->route('courrier.registre');
        }else{
            Alert::toast(" Envoyer avec succès",'success');
            return redirect()->route('courrier_recu_menu');
        };
       
    }





}
