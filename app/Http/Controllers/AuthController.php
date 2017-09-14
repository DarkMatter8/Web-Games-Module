<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use Validator;
use Hash;
use Session;

class AuthController extends Controller
{
    public function do_login(Request $request) {
        // Validate the input
        $messages = [
            'required' => 'Enter your :attribute',
        ];
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ], $messages);
        // If validator fails
        if($validator->fails()){
            return response()->json([
                'status' => 'fail',
                'message' => 'There are some errors in your form !',
            ]);
        } else {
            // Check if user exists
            $checkUser = Participant::where('email', $request->input('email'))->first();
            if($checkUser) {
                if (Hash::check($request->input('password'), $checkUser->password)) {
                    Session::regenerate();
                    Session::put('session', $checkUser);
                    if($checkUser->role == 'admin') {
                        return response()->json([
                        'status' => 'success',
                        'message' => 'admin',
                    ]);
                    } else if($checkUser->role == 'player') {
                        return response()->json([
                        'status' => 'success',
                        'message' => 'player',
                    ]);
                    }
                } else {
                    return response()->json([
                        'status' => 'fail',
                        'message' => 'Incorrect Password !',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 'fail',
                    'message' => 'There is no such User !',
                ]);
            }
        }
    }

    public function do_register(Request $request) {
        // Validate the input
        $messages = [
            'required' => 'Enter your :attribute',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required | max:64',
            'email' => 'required | email | max:64',
            'password' => 'required ',
        ], $messages);
        // If validator fails
        if($validator->fails()){
            return response()->json([
                    'status' => 'fail',
                    'message' => 'There are some errors in your Form !',
                ]);
        } else {
            // Check if user exists
            $checkUser = Participant::where('email', $request->input('email'))->get();
            if(count($checkUser) == 1) {
                return response()->json([
                    'status' => 'fail',
                    'message' => 'User with that email id already exists!',
                ]);
            } else {
                // Register that user
                $password = Hash::make($request->input('password'));
                $newUser = Participant::firstOrCreate(
                    ['email' => $request->input('email'), 'name' => $request->input('name'), 'password' => $password, 'role' => 'player']
                );
                if($newUser) {
                    return response()->json([
                    'status' => 'success',
                    'message' => 'Registration Successful !',
                ]);
                } else {
                    return response()->json([
                    'status' => 'fail',
                    'message' => 'something went wrong !',
                ]);
                }
            }
        }
    }

    public function do_logout(Request $request) {
        Session::flush();
        return redirect('/');
    }

}
