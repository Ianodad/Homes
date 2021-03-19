<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Homes;
use App\Models\Home;


class HomesController extends Controller
{
    //
    public function index(){
        // $homes = Homes::all();
        // $homes = Homes::orderBy('no_rooms')->get();
        $homes = Home::paginate(4);
    
        return view('homes.index', ['homes' => $homes]);
    }

    public function show($id){
        $Home = Home::find($id);
        return view('homes.show', ['Home' => $Home]);
    }

    public function create(){
        $create="create";
        return view('homes.create');
    }

    public function store(){
        // error_log(request('location'));
        // error_log(request('no_rooms'));
        // error_log(request('type'));
        // error_log(request('price'));
        // error_log(request('materials'));

        $home= new Home();
        $home->location=request('location');
        $home->no_rooms=request('no_rooms');
        $home->type=request('type');
        $home->price=request('price');
        $home->materials=(request('materials'));

        // error_log($home);
        $home->save();

        return redirect('/')->with('message', 'Thanks for your submission');
    }
}
