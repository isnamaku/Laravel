<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthController 
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function registration (){
        $page = 'form';
        return view('form');
    }

    
    public function data(){
        return view('data-tables');
    }

    public function process(Request $request){
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');

    
      
        return view('welcome2',['first_name' => $first_name, 'last_name'=>$last_name]);
       

    }

    public function master(){
        return view('master');
    }
}
