<?php

namespace App\Http\Controllers;

use App\User;


use Illuminate\Http\Request;

class VotesController extends Controller
{

    public function __construct()
    {
        /**
         * 
         * Redirect to login page
         * 
         * if not logged in
         */

        
        $this->middleware('auth');

    }


    public function index(){

        /**
         * Get a specific user
         */



      //  $user = User::where('id', auth()->id())->get();


        return view('elections/election');
        
    }



    public function store(User $user){


        $aspirant =  request()->validate(['aspirant' => 'required']);


        $attributes = [
            'user_id' => auth()->id(),
             $aspirant

        ];
    

        $user->addVote($attributes); 


        return back();
    }
}
