<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Homes;
use App\Models\Home;

use App\Http\Requests\HomesRequest;
class HomesController extends Controller
{
    //
    public function index(){
        // $homes = Homes::all();
        // $homes = Homes::orderBy('no_rooms')->get();

        // \DB::enableQueryLog();
        $homes = Home::with('user')->latest()->paginate(4);
    
        // for debugging purpose
        // view('homes.index', ['homes' => $homes])->render();
        return view('homes.index', ['homes' => $homes]);

        // dd(\DB::getQueryLog());
    }

    public function show($id){
        $Home = Home::find($id);
        return view('homes.show', ['Home' => $Home]);
    }

    public function create(){
        $create="create";
        return view('homes.create');
    }

    public function store(HomesRequest $request){
        // error_log(request('location'));
        // error_log(request('no_rooms'));
        // error_log(request('type'));
        // error_log(request('price'));
        // error_log(request('materials'));
        // $validated = $request->validate();

        $home= new Home();
        $home->title = $request('title');
        $home->location= $request('location');
        $home->description = $request('description');
        $home->no_rooms= $request('no_rooms');
        $home->type= $request('type');
        $home->price= $request('price');
        $home->materials=( $request('materials'));

        // error_log($home);
        $home->save();

        return redirect('/')->with('message', 'Thanks for your submission');
    }
    
    function fetch_more_homes(Request $request){
        if($request->ajax())
     {
        $homes = Home::with('user')->latest()->paginate(4);
      return view('homes.homes_loop', ['homes' => $homes])->render();
     }
}
}