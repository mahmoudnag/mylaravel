<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\models\User;

class usercontroller extends Controller
{
    //
    public function login(Request $req)
    {
    	# code...
    	$user= User::where(['email'=>$req->email])->first();
    	if(!$user ||!Hash::check($req->password,$user->password))
    	{
    		return "pass or username is wrong";
    	}
    	else
    	{
    		$req->session()->put('user',$user);
    		return redirect('/');
    	}
    }
	function register(Request $req)
	{
	  # code...
	  $user=new User;
	  $user->name=$req->name;
	  $user->email=$req->email;
	  $user->password=Hash::make($req->password);
	  $user->save();

	  return redirect('/login');
	}
	 
}
