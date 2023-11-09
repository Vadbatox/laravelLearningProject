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


public function store(Request $request){
    $user = new User();

    $user->name = request("name");
    $user->email = request("email");
    $user->password = bcrypt( request("pwd"));

    $user->save();

    return view("pages.addUser");
}
}