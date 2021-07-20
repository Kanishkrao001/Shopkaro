<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
// use Illuminate\Contracts\Auth\Authenticatable;

class ValidController extends Controller
{
    //
    public function logincheck(Request $req)
    {
      $this->validate($req,  [
         'email' => 'required | max:250 | email',
         'pass' => 'required',
      ]);

       $user = User::where('email', $req->email)->where('password', $req->pass )->first();

      // $user = Auth::attempt(['email'=> $req->email, 'password'=> $req->pass]);

      //  print_r($user);
      //  print_r(Auth::user());
      //  die;
       if($user)
       {
           (Auth::login($user));
           return view('shopkaro.index');
        //    return "logged in successfully ". $user["name"];;
       }
       else{
        //    return "username or password not matched";
        return redirect('shopkaro/login');
       }
    }
}
