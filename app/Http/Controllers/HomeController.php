<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test(Request $request)
    {
    	if ($request->isMethod('post'))
		{
			//Retrieve the name input field
		      $name = $request->input('name');
		      echo 'Name: '.$name;
		      echo '<br>';
		      
		      //Retrieve the username input field
		      $username = $request->username;
		      echo 'Username: '.$username;
		      echo '<br>';
		      
		      //Retrieve the password input field
		      $password = $request->password;
		      echo 'Password: '.$password;
		}
		if ($request->isMethod('get'))
		{
			return view('test');
		}
        
    }

    public function testt(Request $request,$locale) {
      //set’s application’s locale
      app()->setLocale($locale);
      
      //Gets the translated message and displays it
      echo trans('lang.msg');
   }
}
