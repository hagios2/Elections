<?php

namespace App\Http\Controllers;

use App\Votes;

use App\User;


use Illuminate\Http\Request;

class VotesController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('auth');

    }


    public function index(){

        if(auth()->user()->vote)
        {
            $userElected = auth()->user()->vote->candidate;

            return view('elections/election', compact('userElected'));

        }else{

             return view('elections/election');
        }
        
    }


    public function store(){

       
        $attributes = request()->validate([

            'candidate' => 'required',
        ]);

        $attributes['user_id'] = auth()->id();

        //return $attributes; 

        Votes::create($attributes); 

        return view('elections/election');
    }
}
