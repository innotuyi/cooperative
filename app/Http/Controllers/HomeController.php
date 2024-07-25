<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   

    public function home()
    {

         $a = 'test';
       
        return view('Frontend.partials.homeDashboard', ['test'=>$a]);
    }

    public function dashboard(){

        $a = '1';

        return view('admin.master', ['test'=>$a]);
    }

    
}
