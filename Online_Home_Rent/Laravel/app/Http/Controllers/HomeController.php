<?php namespace App\Http\Controllers;
use App\Model\User_Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

use Input;
use Validator;
use Redirect;
use Request;
use Session;
class HomeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */

    public function index(){

        return view('Home');
    }

    public function LogIn()
    {
        return view('LogIn');
    }

    public function submit_LogIn(){

        $email = \Input::get("usermail");
        $pass = \Input::get("password");

        if(empty($email) or empty($pass)){

            return view('LogIn')->with('message', 'Fill all the parameter!');
         }else{

            $user_pass = DB::select('select * from users where email ='."'".$email."' and password = '".$pass."'");

            if(!empty($user_pass)){

                $userid = $user_pass[0]->userid;
                $useremail = $user_pass[0]->email;
                $userpassword = $user_pass[0]->password;
                $username = $user_pass[0]->username;

                \Session::put('userlogin','true');
                \Session::put('userid',$userid);
                \Session::put('userpassword',$userpassword);
                \Session::put('useremail',$useremail);
                \Session::put('username',$username);

              //return view('LogIn')->with('message', 'Log In Success!!');

            return new RedirectResponse(url('/'));


            }else {
                return view('LogIn')->with('message', 'Error!');
            }
        }
    }

    public function createAleart()
    {
        return view('CreateAlert');
    }

    public function Register()
    {
        return view('Register');
    }

    public function submit_Register(){

        $username = \Input::get("username");
        $email = \Input::get("email");
        $pass = \Input::get("password");
        $cpass = \Input::get("password_confirm");

        if(empty($email) or empty($pass) or empty($cpass) or empty($username) ){

            return view('Register')->with('message', 'Fill all the parameter!');
         }else{

            if($pass == $cpass){

                $user_pass = DB::select('select * from users where email ='."'".$email."' and password = '".$pass."'");
                if(!empty($user_pass)){

                  return view('Register')->with('message', 'email or password already exists try different one');
                }
                else{

                    $create_user = new \App\Model\User_Model();

                    $create_user->username = $username;
                    $create_user->email = $email;
                    $create_user->password = $pass;

                    $create_user->save();

                    return view('Register')->with('message', 'User successfully registered');
                }

            }else{

                return view('Register')->with('message', 'Password Miss match');
            }
          
        }
    }


}