<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Auth;

class personController extends Controller
{
    public function index(){
    	if(Auth::user() == null){
    		echo "login";
    	}else{
    		echo "Home";
    	}
    }

      public function userLogin(Request $request){

        $password = $request->input('password');
        $email = $request->input('email');

        if (Auth::attempt([ 'email'=> $email, 'password'  => $password ])) {

            echo json_encode(array(
                'loggedIn' => true
            ));
        }else{
            echo json_encode(array(
                'loggedIn' => false,
                'error' => "Wrong Email password Combinatoin."
            ));
        }
    }
}
