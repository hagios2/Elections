<?php

namespace App\Http\Controllers;

use App\Votes;
use App\User;
use ElectionResultController;


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

            $attributes = [$this->jay(), $this->africa(), $this->best()];

            return view('elections/election', compact('userElected', 'attributes'));

        }else{

            $userElected = null;

             return view('elections/election', compact('userElected'));
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


    public function VoteCounter($candidate)
    {
       $votes = Votes::where('candidate', $candidate)->get();

       //$votes = Votes::where('candidate', $candidate);

       return [$candidate => count($votes)];


    }

    public function jay()
    {
        return $this->VoteCounter("Joseph Adomako");


    }

    public function africa()
    {
        return $this->VoteCounter("Enoch Ofori Larbi");
    }

    public function best()
    {
        return $this->VoteCounter("George Gbest");
    }
}
