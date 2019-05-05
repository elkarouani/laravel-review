<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return "this is an Index page";
    }

    public function getIndexView(){
        return view('pages.index');
    }

    public function getAboutView(){
        return view('pages.about');
    }

    public function getServicesView(){
        return view('pages.services');
    }
}
