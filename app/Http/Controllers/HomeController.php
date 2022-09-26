<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index($locale){
        if (!in_array($locale, ['es', 'en'])){
            abort(400);
        }

        App::setLocale($locale);

        return view("home.index");
    }
}
