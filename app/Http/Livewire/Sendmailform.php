<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\Sousdirection;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sendmailform extends Component
{
    
    public $selectedSousdirection = null ;
    public $selectedService = null;
    public $services = null;

    public $agents=null;
    public $checkAgent= null;

    public $operation;

    public $courriers_list;

    public function mount($operation,$courriers_list){
      $this->operation = $operation ;
      $this->courriers_list = $courriers_list ;
    }
   
    public function render()
    {
        $sousdirections = Sousdirection::all();
        return view('livewire.sendmailform',compact('sousdirections'));
    }


  public function updatedSelectedSousdirection($sousdirection_id){

        $this->services=Service::where('sousdirection_id',$sousdirection_id)->get();

  }


  public function updatedSelectedService($service_id){
    $this->agents = User::where('service_id',$service_id)->get();
  }
   
  


  
}
