<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerControl extends Controller
{
    public function index () {
        return view('auth.registro');
    }

    public function store(Request $request){
        
        $this->validate($request,[
            'name'=>'required|max:30',
            'usuario'=>'required|unique:users|min:3|max:20',
            'email'=>'required|unique:users|email|max:60',
            'password'=>'required|confirmed|min:6',

        ]);

        dd('Creando usuario');

        
    }

   
}
