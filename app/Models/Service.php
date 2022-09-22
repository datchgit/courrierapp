<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable= ['nom','sousdirection_id'];

    public function sousdirection(){

        return $this->belongsTo(Sousdirection::class);
    }

    
    public function users(){
        return $this->hasMany(User::class);
     }

     
  
    
}
