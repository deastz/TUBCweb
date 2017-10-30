<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plant as Plant;

class PlantController extends Controller
{
  public function lists(){
    $plants = Plant::get();
    return view('layouts.plantlist')->with('plants',$plants);
  }
  public function show($id){
    $rec = Plant::where('id',$id)->first();
    return view('layouts.plantdata')->with('rec',$rec);
  }
  public function search(Request $request){
    $key = $request->input('inputSearch');
    $plants = Plant::where('c_name',$key)->get();
    return view('layouts.searchresult')->with('plants',$plants)->with('key',$key);
  }
}
