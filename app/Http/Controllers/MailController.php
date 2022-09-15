<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Sousdirection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    //






    public function selectCourrier(Request $request){

       $courriers_list = $request->input('courrier');
      /* $courriers_list =[];
       foreach($courriers_posters as $c){
        array_push($courriers_list,DB::select('select * from courriers where id = ?' ,$courriers_posters));
       }
       */
       $sousdirections = Sousdirection::all();
       $services = Service::all();
       return view('compte.agent.courrier.selectdestinaireform.selectdestinaire',compact('courriers_list','sousdirections','services')) ;
       //return redirect()->route('courrier.envoi.selectdestination',['courrier'=>$courriers_list]);      
    }



    public function selectdestination($courriers_list){
  

        
      


    }



}
