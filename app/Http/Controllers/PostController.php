<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    public function createPertanyaan(){
        return view('Posts.postPertanyaan');
    }

    public function insertPertanyaan(Request $request){
 
        $query = DB::table('pertanyaan')->insert([
            'judul' => $request['judul'],
            'isi'=> $request['isi'],
        ]);

       
  
    return view('Posts.showPertanyaan');
   
    }
}
