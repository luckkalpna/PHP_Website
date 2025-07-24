<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        // return "My Name is Renu Sharma";
        // For create a view
        return view("user");
    }

    function getUserName($name){
        return "My Name is  ".$name;
    }

    function adminLogin(){
      return view("admin.login");
    }
}
