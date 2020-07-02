<?php

namespace App\Http\Controllers\User;

use App\User;
use App\City;
use App\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\SendEmailNotification;
use App\Http\Controllers\Concern\GlobalTrait;

class UserController extends Controller
{
	use GlobalTrait;

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
		$data['cities'] = City::get();
		$data['states'] = State::get();
		return view('signup', compact('data'));
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
		$request->validate(
            [
                'name'          => 'required|max:150',
                'email'         => 'required|email|max:225|unique:users',
                'contact_number' => 'required|digits:10|unique:users',
                'state'         => 'nullable',
                'city'          => 'nullable',
                'image'         => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'password'      => 'required'
            ]
        );
        $image_link = $this->imageUpload($request);
        $user = User::create(
        	[
        		'name'           => $request->name,
        		'email'          => $request->email,
        		'contact_number' => $request->contact_number,
        		'image'          => $image_link,
        		'password'       => \Hash::make($request->password)
        	]
        );
        // $user->notify(New SendEmailNotification($user));
        return redirect('/')->with('success', 'Your Account Created Successfully.');
       
	}

	/**
	* User Login
	*
	* @category Login
	* @package  user management
	* @author   Sachin Kumar <sachin679710@gmail.com>
	* @license  PHP License 7.3.5
	* @link
	*/
    public function login(Request $request) {
        $request->validate(
            [
                'email'    => 'required|email',
                'password' => 'required'
            ]
        );
        $credentials = [
            'email'    => $request['email'],
            'password' => $request['password'],
        ];
        if(\Auth::attempt($credentials)) {
            return redirect('user/dashboard');       
        }
        return redirect('/')->with('error', 'Invalid login credentials.'); 
    }

    /**
	* After Login Go to dashboard
	*
	* @category Dashboard
	* @package  user management
	* @author   Sachin Kumar <sachin679710@gmail.com>
	* @license  PHP License 7.3.5
	* @link
	*/
    public function dashboard() {
    	return view('user.dashboard');
    }
}
