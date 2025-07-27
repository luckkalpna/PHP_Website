<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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

      $req->validate([
        'username'=>'required | min:3 | max:20',
        'email'=>'required | email',
        'city'=>'required | max:20',
        'skill'=>'required | max:2'
      ]);

      // echo "Add user function called";
    }

    function users(){
      // return "User funtion called.";
      return DB::select("SELECT * FROM users");
    }
}
