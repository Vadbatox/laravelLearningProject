<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //class PagesController extends Controller
    public function index(){
       return view("pages.index");
    }

    public function apropos(){
       return view("pages.apropos");
    }

    public function contact(){
       return view("pages.contact");
    }

    public function service(){
       return view("pages.service");
    }

    public function staff(){
       return view("pages.staff");
    }

    public function vision(){
       return view("pages.vision");
    }


    public function addUser(){
        return view("pages.addUser");
     }

}