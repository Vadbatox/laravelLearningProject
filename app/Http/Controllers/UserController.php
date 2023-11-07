<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function allUsers(){
        $users = User::all();
        return view("pages.user", compact("users"));
    }
}