<?php

namespace App\Http\Controllers;

use App\Models\Sousdirection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SousdirectionController extends Controller
{
    //
    public function index()
    {
        //
        $sds= Sousdirection::with('services')
        ->orderBy('id')
        ->get();
        return  view('compte.admin.sousdirections.list',['sds'=>$sds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        return view('compte.admin.sousdirections.register');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          //
          $input = $request->input();

          Validator::make($input,[
             'nom'=>['required','string','max:255',Rule::unique(Sousdirection::class)]
         ])->validate();
 
        
 
          $r=Sousdirection::create([
                 'nom'=>strtoupper($input['nom'])
             ]);
          
          if($r){
            return redirect()->route('sd.list')->with('add','Ajouter avec succès !');
          }
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $input = $request->input();

        Validator::make($input,[
           'nom'=>['required','string','max:255']
       ])->validate();

      

       $sd=DB::table('Sousdirections')
       ->where('id', '=', $input['id'])
       ->update(['nom'=>$input['nom']]);

     
      

   

       return redirect()->route('sd.list')->with('update','Modifer avec success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sv=DB::table('services')
        ->where('Sousdirection_id',$id)
        ->update(['Sousdirection_id'=>NULL]);

      
        
        $sd= DB::table('Sousdirections')->delete($id);

       /* if($sd){
            Alert::warning('Suppression', 'Supprimer avec succès');
           }else{
            Alert::error('Erreur ', 'Suppression  échouée');
           }
        */
           if($sd){
            return redirect()->route('sd.list')->with('delete','Supprimer avec succès');
           }
          


    }
}
