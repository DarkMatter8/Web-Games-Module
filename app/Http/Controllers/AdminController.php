<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Participant;

class AdminController extends Controller
{
    public function show_home(){
    	if(Session::get('session')->role == 'admin'){

    		$users = Participant::where('role', 'player')->get();

    		return view('admin.home')->with('users', $users);
    	}else{
    		return redirect('/');
    	}
    }

    public function refill(Request $request){
    	if(Session::get('session')->role == 'admin'){

    		$id = $request->input('id');

    		$refill = Participant::where('id', $id)->first();

    		$refill->flappy_c = 3;
    		$refill->space_c = 3;
    		$refill->goblin_c = 3;
    		$refill->trex_c = 3;
    		$refill->ping_c = 3;
    		$refill->save();

    		$users = Participant::where('role', 'player')->get();
    		return redirect('/admin/home');
    	}else{
    		return redirect('/');
    	}
    }
}
