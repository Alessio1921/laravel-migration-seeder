<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
// DateTime::createFromFormat("Y-m-d H:i:s",$MySQLDataBaseDateTime)->format("d/m/Y")
// $trains = Train::where (DateTime::createFromFormat("Y-m-d H:i:s",'departure_time')->format("Y/m/d"), date("Y/m/d"))->get();
class TrainTodayController extends Controller
{
    public function index(){
        $trains = Train::where ('departure_time', ">=", date("Y/m/d"))->get();
        return view('today.index',compact("trains"));
    }
}
