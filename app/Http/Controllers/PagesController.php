<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function  index(){
        $title = 'Welcome to NigerNews';
        return view('pages.index', compact('title'));
    }
    public function about(){
        $title ='About us';
        return view ('pages.about')->with('BIG', $title);
    }
    public function services(){
        $data = array(
          'title'=> 'Services',
          'services'=> ['webdesign', 'programing', 'seo']
        );
        return view ('pages.services')->with($data);
    }
    public function login(){
        return view ('pages.login');
    }
}
 
