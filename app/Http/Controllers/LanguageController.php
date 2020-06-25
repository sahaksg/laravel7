<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;
// use Symfony\Component\Console\Input\Input;
use Input;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){
        if(!\Session::has('locate'))
        {
            \Session::put('locate', Input::get('locate'));
        }else{
            \Session::set('locate', Input::get('locate'));
        }
        // return redirect()->back();
        return Redirect::back();
    }
}
