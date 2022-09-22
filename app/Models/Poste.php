<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'role_id'
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    
    public function users(){
        return $this->hasMany(User::class);
    }
}
