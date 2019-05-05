<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return "this is an Index page";
    }

    public function getIndexView(){
        $title = "this is a title from controller";
        return view('pages.index')->with('title', $title);
    }

    public function getAboutView(){
        $title = "About us";
        return view('pages.about')->with('title', $title);
    }

    public function getServicesView(){
        $data = array(
            'title' => "Our services",
            'services' => array('Web', "Mobile", "Desktop")
        );
        return view('pages.services')->with($data);
    }
}
