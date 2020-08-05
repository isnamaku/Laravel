<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function registration (){
    //     return view('form');
    // }

    

    // public function process(Request $request){
    //     $first_name = $request->input('first_name');
    //     $last_name = $request->input('last_name');


      
    //     return view('welcome2',['first_name' => $first_name, 'last_name'=>$last_name]);
       

    // }
}
