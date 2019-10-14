<?php namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Model\Advertise_Model;
use App\Model\Property_Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;


use Input;
use Validator;
use Redirect;
use Request;
use Session;
use Storage;



class ProfileController extends Controller {


	public function __construct()
    {

    }

    public function Profile(){

    	if(!\Session::get('userlogin')){
          return new RedirectResponse(url('/LogIn'));
        }else{

        $user_id = \Session::get('userid');

        $s_query = "select * from advertisement , property where advertisement.userid = '".$user_id."' and advertisement.adid = property.adid";
        $adv_data = DB::select($s_query);
          return view("MyProfile")->with('adv_data',$adv_data);
        }

    }



}