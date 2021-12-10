<?php
namespace App\Http\Controllers\Auth;
use App\Models\User;


class PostRegisterController extends RegisterController
{
    public function __construct() {
	    $users = User::count();
	    if($users > 0 ){
        $this->middleware('auth');
        }
    }
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/list';
}