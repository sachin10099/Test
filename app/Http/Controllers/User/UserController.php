<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	/**
	* Sign Up View Page
	*
	* @category Render sign up view
	* @package  user management
	* @author   Sachin Kumar <sachin679710@gmail.com>
	* @license  PHP License 7.3.5
	* @link
	*/

	public function signupView() {
		return view('signup');
	}


	/**
	* User Registration Process
	*
	* @category User Registration
	* @package  user management
	* @author   Sachin Kumar <sachin679710@gmail.com>
	* @license  PHP License 7.3.5
	* @link
	*/
	public function createAccount(Request $request) {
		dd($request->all());
	}
}
