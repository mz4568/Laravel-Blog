<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
use Input;
use Validator;
use App\Register;
class RegisterController extends Controller
{
    public function create()

    {

    return view('register.mzRegister');
    }

    public function store() 
    {

       $data=Input::except(array('_token'));

        //var_dump($data);

        $rule  =  array(
                    'name'              => 'required|unique:registers',
                    'email'             => 'required|email|unique:registers',
                    'password'          => 'required|min:6|same:confirm_password',
                    'confirm_password'  => 'required|min:6'
        );

        $message = array(
                'confirm_password'      => 'The confirm password field is required.',
                'confirm_password'      => 'The confirm password must be at least 6 characters',
                'password.same'         => 'The :attribute and confirm password field must match.',
        );

          $validator = Validator::make($data,$rule,$message);

          if($validator->fails())
          {
                    return Redirect::to('register')
                          ->withErrors($validator->messages());
          }
          else
          {
                    Register::saveFormData(Input::except(array('_token','confirm_password')));

                    return Redirect::to('home')->withSuccess("Successfully registered");
                         // ->with('success', 'Successfully registered');
            }   

      


      /*
       $this->validate(request(), [
         
         'name' => 'required',
         'email' => 'required', 
         'password' => 'required', 
         'confirm_password' => 'required' 


       	]);
         
         $user=User::create(request(['name','email','password','confirm_password']));
         auth()->login($user);
         return Redirect::to('home'); */

  }
}
