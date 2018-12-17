<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function getIndex(){
        return view('layouts.front-end.index');
    }
    public function getPartner(){
        return view('layouts.front-end.partner');
    }

}
