<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){

        return view('compte.agent.index');
  
    }


    public function list(){

        $users= User::all();
        return view('compte.admin.user.list',compact('users'));
    }



    public function detail($id){
        $user=User::findOrFail($id);
        return view('compte.admin.user.detail',compact('user'));
    }


    public function edit($id){
        $user=User::findOrFail($id);
        $svs = Service::all();
        $roles = Role::all();
        return view('compte.admin.user.edit',compact('user','svs','roles'));
    }




}
