<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable =[
        'contenu',
        'courrier_id'
    ];


    public function courrier(){
        return $this->belongsTo(Courrier::class);
    }

    


}
