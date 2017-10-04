<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{

    // model function to store form data to database
   
    public static function saveFormData()
    {

        //var_dump($data);
        $name = Input::get('name');
        $email = Input::get('email');
        $password = Hash::make(Input::get('password'));
   

        $user = new Register;

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
      
     
       
        

        $user->save();
    }

   


}
