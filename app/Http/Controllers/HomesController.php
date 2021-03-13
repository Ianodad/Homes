<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homes;

class HomesController extends Controller
{
    //
    public function index(){
        $homes = Homes::all();
    
        return view('homes', ['homes' => $homes]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
