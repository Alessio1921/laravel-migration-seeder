<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('trains.index',compact("trains"));
    }

    public function show($id){
        $trains = Train::findOrFail($id);
        return view('trains.show',compact("trains"));
    }

    public function today(){
        $trains = Train::where ('departure_time', ">=", date("Y/m/d"))->get();
        return view('today.index',compact("trains"));
    }

}
