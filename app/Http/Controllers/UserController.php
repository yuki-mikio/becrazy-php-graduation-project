<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller{
	public function userlist(){
		$users = User::all();
		return view('userlist' , ['users' => $users]);
	}
   
}
