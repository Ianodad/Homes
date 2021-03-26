<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
// use App\Homes;
use App\Models\Home;

use App\Http\Requests\HomesRequest;
class HomesController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
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


        // dd(auth());
        // $home = Home::create([
        //     "title" => request('title'),
        //     "location" => request('location'),
        //     "description" => request('description'),
        //     "no_rooms" => request('no_rooms'),
        //     "type" => request('type'),
        //     "price" => request('price'),
        //     "materials" => request('materials'),
        //     "user_id" => auth()->user()->id
        // ]);

        $request->user()
        ->home()
        ->create($request->only('title', 'location', 'description', 'no_rooms', 'type', 'price', 'materials'));
        

        return redirect('/')->with('message', 'Thanks for your submission');
    }

    public function edit(Home $home){

        // authorization using gate
        if (\Gate::denies('update-home', $home)){
            abort(403, "Access denied");
            
        }
        
        // $this->authorize('update', $home);
        // $home = Home::findOrFail($id);            
        return view("homes.edit", compact('home'));
        // dd($id);
        
    }
    
    public function update(HomesRequest $request, Home $home){
        
        // authorization using update
        if (\Gate::denies('update-home', $home)){
            abort(403, "Access denied");
            
        }
        // $this->authorize('update', $home);
        $home->update($request->all());
        return redirect('/homes')->with('Success', "Your home has been updated");
    }
    
    public function destroy(Home $home){
        // authorization using gate
        if (\Gate::denies('delete-home', $home)){
            abort(403, "Access denied");
            
        }
        // $this->authorize('delete', $home);
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