<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News as News;

class NewsController extends Controller
{
  public function lists(){
    $recs = News::get();
    return view('layouts.newslist')->with('recs',$recs);
  }
  public function show($id){
    $rec = News::where('id',$id)->first();
    return view('layouts.newsdata')->with('rec',$rec);
  }
  public function index_lists(){
    $recs = News::latest()->take(5)->get();
    return view('layouts.index')->with('newsrecs',$recs);
  }
}
