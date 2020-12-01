<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function tamblinganPage(){
        return view('pages.tamblingan');
    }
}
