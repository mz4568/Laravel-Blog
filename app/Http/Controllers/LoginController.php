<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Input;
use Validator;
use Auth;
class LoginController extends Controller
{
	public function __construct()
	{
      // $this->middleware("auth");
	}
    public function create()
    {
    	  return view('login.mzlogin');
    }

   public function store()
   {
     
   /* $data =  Input::except(array('_token'));

    //var_dump($data);

    $rule  =  array(
            'email'       => 'required',
            'password'   => 'required',
    );
    $message = array(
       'password.required'   => 'The Password field is required.',
       'email.required'      => 'The email  is required.',
    );


    $v = Validator::make($data,$rule);

    //var_dump($v);

    
 if ($v->fails()){

            // username or password missing

            // validation fails

            // used to retain input values

        echo "inside";

            Input::flash ();

            // return to login page with errors
            //echo "part1";

            //return Redirect::to('')->withInput()->withErrors($v->messages ());

    } else { */

            $userdata = array (

                'email' => Input::get('email'),

                'password' => Input::get('password')

            );

          // var_dump($userdata);
            if(Auth::attempt ($userdata)) {

        // authentication success, enters home page

              return Redirect::to('home');

        } else {

         // authentication fail, back to login page with errors

            return Redirect::to('login')
                ->withErrors('Login Fail');


         } //end if 

    //}//end of v else 


   	/* 
     $this->validate($request, array(
                'email'       => 'required|email',
                'password'    => 'required'
                
                 ));
   	 if(! auth()->attempt(['email' => $request->email,'password' => $request->password],$request->remember))
   	 {
   	 	 return Redirect::to('')
                ->withErrors('login fails');

   	 }
   	
   	   return redirect()->home();
   } 


*/
    }
/*
    public function destroy()
    {
        Auth::logOut();
        return Redirect::to('login');
    } */
  
}
