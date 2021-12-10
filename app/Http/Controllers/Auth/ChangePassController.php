<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangePassController extends Controller
{
    //
    public function __construct() {

    $this->middleware('auth');
    }

    public function edit(){
    	return view('auth/passwords/edit');
    }

    public function update(Request $request){
    	$request->validate([
    		'current_password' => 'required|string|min:8|password',
    		'password' => 'required|string|min:8|confirmed'
    	]);
    	$user = Auth::user();
    	$user->password = bcrypt($request->password);
    	$user->save();
    	return redirect('home')->with('status' , 'パスワードを変更しました');
    }

}
