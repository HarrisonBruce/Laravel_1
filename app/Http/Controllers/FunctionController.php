<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionController extends Controller
{
     public function welcome(Request $request)
     {
         return view('welcomepage');
     }
     public function firstpage(Request $request)
     {
         return view('pages.first_page');
     }

}
