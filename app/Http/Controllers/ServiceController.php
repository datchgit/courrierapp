<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Sousdirection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    //
    public function index()
    {
        //

        $svs = Service::paginate(10);
        $sds = Sousdirection::all();
        return view('compte.admin.services.list',[ 
            'svs'=>$svs,
            'sds'=>$sds
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
      


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
        $input = $request->input();

       
        Validator::make($input,[
           'nom'=>['required','string','max:255',Rule::unique(Service::class)],
           'sous_direction'=>['required']
       ])->validate();

      
    

       $r=Service::create([
               'nom'=>strtoupper($input['nom']),
               'sousdirection_id'=>$input['sous_direction']
       ]);


     

   
       return redirect()->route('sv.list')->with('add','Ajouter avec succèss');
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
           'nom'=>['required','string','max:255'],
           'sous_direction'=>['required']
           
       ])->validate();

      

       $sv=DB::table('services')
       ->where('id', '=', $input['id'])
       ->update(['nom'=>$input['nom'],
                 'sousdirection_id'=>$input['sous_direction']
                ]);

     
      

   

       return redirect()->route('sv.list')->with('update','Modifier avec succèss');
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
        /*DB::table('users')
        ->where('service_id',$id)
        ->update(['service_id'=>NULL]);
        */
      
        
        $sd= DB::table('services')->delete($id);

        
          
           return redirect()->route('sv.list')->with('delete','Supprimer avec succès');

    }
}
