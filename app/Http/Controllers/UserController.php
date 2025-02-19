<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
 function adduser(Request $request){
 
 $request->validate([
   'username'=>'required',
   'email'=>'required  | email',
   'skill'=>'required',
   'city'=>'required',
 ]);

    return $request;
 }
}
