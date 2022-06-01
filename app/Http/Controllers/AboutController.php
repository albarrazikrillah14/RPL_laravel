<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about',[
            "title"=> "about",
            'active' => 'about',
            "name"=>"Albarra Zikrillah",
            "email"=>"albarrazikrillah1405@gmail.com",
            "image"=>"albarra.jpg"
        ]);
    }
}
