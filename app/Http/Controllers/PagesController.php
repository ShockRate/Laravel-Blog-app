<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        # code...
        $title = 'Welcome to Laravel!1';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);

    }
    
    public function about()
    {
        # code...
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }


    public function services()
    {
        # code...
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
