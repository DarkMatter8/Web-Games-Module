<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Participant;

class PlayerController extends Controller
{
    public function show_home(){
    	if(Session::has('session')){

            $participant = Participant::where('email', Session::get('session')->email)->first();
    		return view('player.home')->with('user', $participant);
    	}else{
    		return redirect('/');
    	}
    }

    public function show_pingpong(){
    	if(Session::has('session')){

            $participant = Participant::where('email', Session::get('session')->email)->first();

            $count = $participant->ping_c;

            if($count == 0){
                return redirect('/player/home');
            }else{
                $count--;

                 $participant->ping_c = $count;
                 $participant->save();

        		return view('player.pingpong');
            }
    	}else{
    		return redirect('/');
    	}
    }

     public function show_goblin(){
    	if(Session::has('session')){

            $participant = Participant::where('email', Session::get('session')->email)->first();

            $count = $participant->goblin_c;

            if($count == 0){
                return redirect('/player/home');
            }else{
            $count--;

            $participant->goblin_c = $count;
            $participant->save();

    		return view('player.goblin');
            }
    	}else{
    		return redirect('/');
    	}
    }

    public function show_flappy(){
        if(Session::has('session')){

            $participant = Participant::where('email', Session::get('session')->email)->first();

            $count = $participant->flappy_c;
            
            if($count == 0){
                return redirect('/player/home');
            }else{
            $count--;

            $participant->flappy_c = $count;
            $participant->save();

            return view('player.flappy');
            }
        }else{
            return redirect('/');
        }
    }

    public function show_trex(){
        if(Session::has('session')){

            $participant = Participant::where('email', Session::get('session')->email)->first();

            $count = $participant->trex_c;
            
            if($count == 0){
                return redirect('/player/home');
            }else{
                $count--;

                 $participant->trex_c = $count;
                 $participant->save();

                return view('player.trex');
            }
        }else{
            return redirect('/');
        }
    }

    public function show_space(){
        if(Session::has('session')){

            $participant = Participant::where('email', Session::get('session')->email)->first();

            $count = $participant->space_c;
            
            if($count == 0){
                return redirect('/player/home');
            }else{
                $count--;

                 $participant->space_c = $count;
                 $participant->save();

                return view('player.space');
            }
        }else{
            return redirect('/');
        }
    }

    public function show_scoreboard(){
        
        $users = Participant::where('role', 'player')->orderBy('total', 'DESC')->get();

        return view('scoreboard')->with('users', $users);
    }


	public function score_submit(Request $request){
    	if(Session::has('session')){

    		$game = $request->input('type');
    		$score = $request->input('score');

    		$participant = Participant::where('email', Session::get('session')->email)->first();
    		

            if(($participant->$game) < ($request->input('score'))){
    		
            $participant->$game = $score;
            $participant->save();

            }

            $f_participant = Participant::where('email', Session::get('session')->email)->first();

            $f_participant->total = $f_participant->ping + $f_participant->flappy + $f_participant->trex + $f_participant->space + $f_participant->goblin;
            $f_participant->save(); 

            return view('player.show_score')->with('score', $score)->with('game', $game);


    	}else{
    		return redirect('/');
    	}
    }    
}
