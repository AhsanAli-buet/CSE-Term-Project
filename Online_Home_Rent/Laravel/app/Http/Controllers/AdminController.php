<?php namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Model\Admin_Message_Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;



use Input;
use Validator;
use Redirect;
use Request;
use Session;
use Storage;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}


    public function admin()
    {
    	if(\Session::has('adminlogin')){

    		$s_query = "select * from admin_message";

        	$msg_data = DB::select($s_query);

        	return view('AdminPanel')->with('msg_data',$msg_data);

    	}else{

    		return view('AdminPanel');	
    	}
        	
    }

    public function adminlogin(){

    	$email = \Input::get("usermail");
        $pass = \Input::get("password");

        if(empty($email) or empty($pass)){

            return view('AdminPanel')->with('message', 'Fill all the parameter!');
         }else{

            $admin_pass = DB::select('select * from admin where email ='."'".$email."' and password = '".$pass."'");

            if(!empty($admin_pass)){

                $admin_id = $admin_pass[0]->adminid;
                $admin_email = $admin_pass[0]->email;
                $admin_password = $admin_pass[0]->password;
                $admin_name = $admin_pass[0]->name;
                $admin_division = $admin_pass[0]->division;

                \Session::put('adminlogin','true');
                \Session::put('adminid',$admin_id);
                \Session::put('adminpassword',$admin_password);
                \Session::put('adminemail',$admin_email);
                \Session::put('adminname',$admin_name);

              

            return new RedirectResponse(url('/AdminPanel'));


            }else {
                return view('AdminPanel')->with('message', 'Error!');
            }
        }
    }

	
	public function admindiscussion()
	{
		$mytime = Carbon::now();
		$discussion = \Input::get("discussion");
		if(empty($discussion)){
			return new RedirectResponse(url('/AdminPanel'));
		}else{

			  $admin_message = new \App\Model\Admin_Message_Model();
			  $admin_message->msz = $discussion;
			  $admin_message->date = $mytime;
			  $admin_message->admin_name = \Session::get('adminname');
			  $admin_message->save();

			  return new RedirectResponse(url('/AdminPanel'));
		}
	}

	public function report()
	{
		$report_data = DB::select('select * from advertisement where report > 0');
		return view('ReportedAd')->with('report_data',$report_data);
	}

	public function AdDelete($adid){

      DB::table('advertisement')->where('adid', '=', $adid)->delete();
      DB::table('property')->where('adid', '=', $adid)->delete();

      return new RedirectResponse(url('/ReportedAd'));
    }

	public function users()
	{
		$user_data = DB::select('select * from users');

		return view('UserList')->with('user_data',$user_data);
	}

	public function deleteusers($userid){

		DB::table('users')->where('userid', '=', $userid)->delete();

		return new RedirectResponse(url('/UserList'));
	}

	public function otherAdmins()
	{	
		$adminid = \Session::get('adminid');
		$s_query = "select * from admin where adminid <> '".$adminid."'";
		$admin_data = DB::select($s_query);

		return view('OtherAdmin')->with('admin_data',$admin_data);

	}
	public function messages()
	{
		$msz_data = DB::select('select * from other_message');		
		return view('OtherMsz')->with('msz_data',$msz_data);
	}

}
