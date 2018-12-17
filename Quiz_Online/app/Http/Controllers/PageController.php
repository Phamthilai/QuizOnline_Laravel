<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use App\Areas;
use App\Partners;
class PageController extends Controller
{
    public function getNews(){
    	$news = News::all();
    	return view('layouts.front-end.news',compact('news'));
    }

    public function getPartners($id){
    	$partner = Partners::find($id);
    	$partner = Partners::where('id_areas',$id)->paginate(10);
    	$p = Partners::all();
    	return view('layouts.front-end.partner', compact('partner','p'));  	
    }

}
