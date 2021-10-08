<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

public function index()
    {
      //return "welcome to user page";

     //return users;
     /*
     $users=new User();
     $users->name="mekdi";
     $users->email="ka@gmail.com";
     $users->password="789456";
     $users->save();
*/
$data=[
'name'=>'kaleab',
'email'=>'k@gmail.com',
'password'=>'password',
];
User::create($data);
$user=User::all();
return $user;

    // return view('go');
    }
}
