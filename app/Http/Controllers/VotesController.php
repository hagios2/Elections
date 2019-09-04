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
         //   $userElected = auth()->user()->vote->candidate;
/*
         $votes = Votes::query();

         return $votes->where('candidate', 'Enoch Ofori Larbi')->count();
 */

           $attributes = [$this->jay(), $this->africa(), $this->best()];

            return view('elections/election', compact('attributes'));

        }else{


             return view('elections/election');
        }

    }


    public function store(){

        if(auth()->user()->vote)
        {
            return back()->withSuccess('Access Denied! You have already voted');
        }

        $attributes = request()->validate([

            'candidate' => 'required',
        ]);

        $attributes['user_id'] = auth()->id();

        //return $attributes;

        Votes::create($attributes);

        return redirect('/elections')->withSuccess("Your vote has been added successfully");
    }


    public function VoteCounter($candidate)
    {
       $votes = Votes::where('candidate', $candidate)->count();

       //$votes = Votes::where('candidate', $candidate);

       return [$candidate => $votes];


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
