<form action="{{route('courrier.send')}}" class="gy-3" method="POST">
                                                  
    {{ csrf_field()}}

      
    <div class="row g-3 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="site-name">Sous-direction
                     
                    @error("sousdirection")
                    <small class="text-danger">{{$message}}</small>     
                    @enderror
                </label>
                <span class="form-note">Sélectionner la sous-direction </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="sousdirection" class="form-select"  wire:model="selectedSousdirection" required>
                    <option></option>
                    @foreach ($sousdirections as $sd)
                        <option value="{{$sd->id}}">{{$sd->nom}}</option>
                    @endforeach
                   
                </select>
            </div>
        
             

           
          
        </div>
    </div>

    @if (!is_null($services)) 
    <div class="row g-3 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label">Service
                   
                    @error("service")
                    <small class="text-danger">{{$message}}</small>     
                    @enderror
                </label>
                <span class="form-note">Sélectionner le service </span>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="form-group">
              
                <div class="form-control-wrap">
                    <select name="service" class="form-select" wire:model="selectedService" required>
                        <option></option>
                        @foreach ($services as $sv)
                        <option   value="{{$sv->id}}">{{$sv->nom}}</option>

                       @endforeach
            
                    </select>
                </div>
              
            </div>
         
        </div>
    </div>
    @endif
     
    @if (!is_null($agents))
    <div class="row g-3 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label">Agent(s) destinataire(s)
                 
                 
                </label>
                <span class="form-note">indiquer le ou les agent(s) qui  doit(vent) recevoir le courrier </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-group">
               
                <ul class="custom-control-group g-3 align-center">
                    
                    @foreach ($agents as $ag)
                       
                    <li>
                        <div class="custom-control custom-control-sm custom-checkbox">
                          
                            <input type="checkbox" name="destinataire[]" class="custom-control-input" id="com-email-1" value="{{$ag->id}}" wire:model="checkAgent">
                            <label class="custom-control-label" for="com-email-1"> {{$ag->nom}} {{$ag->prenom}}</label>
                        </div>
                    </li>
                    @endforeach
                 
                   
              
       
                  
                </ul>
            </div>
        </div>
    </div>
    @endif

    <div class="row g-3 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label">Consigne  :</label>
                <span class="form-note">Entrer une consigne ( Facultatif)</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <textarea name="consigne" class="form-control form-control-sm" id="cf-default-textarea" placeholder="Ecrire ici ..."></textarea>
            </div>
        </div>
    </div>
    
    <div class="row g-3">
        <div class="col-lg-7 offset-lg-5">
            <div class="nk-block-between-md g-3">
              
                <div class="g">
                    <input type="hidden" name="operation" value="{{$operation}}">   
                    @foreach ($courriers_list as $c)
                    <input type="hidden" name="courriers[]" value="{{$c}}">        
                    @endforeach
                 
                     <a href="javascript:history.back()" class="btn btn-light"> retour</a>
                     <input class="btn btn-primary" type="submit" value="Envoyer">
                   
                </div><!-- .pagination-goto -->
            </div>
           
        </div>
    </div>


 
</form>