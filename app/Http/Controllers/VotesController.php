<?php

namespace App\Http\Controllers;

use App\User;


use Illuminate\Http\Request;

class VotesController extends Controller
{

    public function index(){

        return view('elections/election');
        
    }

    public function store(User $user){


        $attributes =  request()->validate(['aspirant' => 'required']);

        $user->addVote($attributes);

        return back();
    }
}