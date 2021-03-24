<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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
        // dd($Home);
        return view('homes.show', ['Home' => $Home]);
    }

    public function create(Home $home){
        // $home = new Home();

        return view('homes.create', compact('home'));
    }

    public function store(HomesRequest $request){
        // error_log(request('location'));
        // error_log(request('no_rooms'));
        // error_log(request('type'));
        // error_log(request('price'));
        // error_log(request('materials'));
        // $validated = $request->validate();
        //     Home::create($request->all());
        // $home= new Home();
        // dd($request('title'));
        // $request->user()->homes()->create($request->all());
        // $home->title = $request(['title']);
        // $home->location= $request('location');
        // $home->description = $request('description');
        // $home->no_rooms= $request('no_rooms');
        // $home->type= $request('type');
        // $home->price= $request('price');
        // $home->materials=( $request('materials'));
        // `title`, `description`, `type`, `no_rooms`, `price`, `materials`
        // Home::create($request->all());
        // // error_log($home);

        dd(auth()->login($user, true));
        // $home = new Home();
        // $home = $home->user()->create($request->all());
        // $home->save();

        return redirect('/')->with('message', 'Thanks for your submission');
    }

    public function edit(Home $home){

        if (\Gate::denies('update-home', $home)){
            abort(403, "Access denied");
            
        }
        
        // $home = Home::findOrFail($id);            
        return view("homes.edit", compact($home));
        // dd($id);
        
    }
    
    public function update(HomesRequest $request, Home $home){
        
        $home->update($request->all());
        return redirect('/homes')->with('Success', "Your home has been updated");
    }
    
    public function destroy(Home $home){
        
        $home->delete();
        
     return redirect('/homes')->with('Success', "Your home has been deleted");
    }
    function fetch_more_homes(Request $request){
        if($request->ajax())
     {
        $homes = Home::with('user')->latest()->paginate(4);
      return view('homes.homes_loop', ['homes' => $homes])->render();
     }
}
}