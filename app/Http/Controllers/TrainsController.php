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

}
