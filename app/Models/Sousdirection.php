<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sousdirection extends Model
{
    use HasFactory;
    
    protected $fillable=['nom'];

    public function services(){
        return $this->hasMany(Service::class);
    }


    public function courriers(){
        return $this->belongsToMany(Courrier::class,'courrier_sousdirection','sousdirection_id', 'courrier_id')
        ->withPivot('expediteur', 'operation','libelle','service','destinataire','statut')
        ->withTimestamps();
    }




}
