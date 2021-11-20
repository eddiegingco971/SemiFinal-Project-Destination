<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(){
        $d = Destination::orderBy('id')->get();

        return view('destinations.index', ['destinations'=>$d]);
    }

    public function create(){
        return view('destinations.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'     => 'required',
            'address'  => 'required',
            'type'     => 'required',
            'rating'   => 'required'
        ]);

        Destination::create([
            'name'     => $request['name'],
            'address'  => $request['address'],
            'type'     => $request['type'],
            'rating'   => $request['rating']
        ]);

        return redirect('/destinations')->with('info', 'New person has been added.');   

    }
}