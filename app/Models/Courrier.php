<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courrier extends Model
{
    use HasFactory;

    protected $fillable= [
        'nom',
        'prenom',
        'objet',
        'matricule',
        'numero',
        'agentdrh_id',
        'statut'
    ];

    public function agentdrh(){
        return $this->belongsTo(User::class);
    }

    
    public function dossiers(){
        return $this->hasMany(Dossier::class);
    }


    public function sousdirections(){
        return $this->belongsToMany(Sousdirection::class,'courrier_sousdirection','courrier_id','sousdirection_id')
        ->withPivot('expediteur', 'operation','libelle','service','destinataire','statut')
        ->withTimestamps();
    }

}
