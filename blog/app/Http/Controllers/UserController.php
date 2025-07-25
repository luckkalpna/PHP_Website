<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
      if(View::exists('admin.login')){
        return view("admin.login");
      }else{
        echo "no View Found";
      }
    }

    function addUser(Request $req){
      // return $req;
      echo  $req->username;
      echo "<br/>";
      echo $req->email;
      echo "<br/>";
      echo $req->city;
      echo "<br/>";
      print_r( $req->skill );
      echo "<br/>";
      echo $req->gender;
      echo "<br/>";
      echo $req->city;
      echo "<br/>";
      echo $req->range;
      // echo "Add user function called";
    }
}
