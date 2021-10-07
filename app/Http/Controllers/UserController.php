<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
 /**
  *   @return void()
  *

  */

public function index()
    {
      //return "welcome to user page";
  return view('go');
    }
}
