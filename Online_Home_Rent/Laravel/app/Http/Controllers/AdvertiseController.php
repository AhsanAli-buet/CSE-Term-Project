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

class AdvertiseController extends Controller {

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
    public function Post_Ad()
    {
        if(!\Session::get('userlogin')){
          return new RedirectResponse(url('/LogIn'));
        }else{
          return view('PostAd');  
        }
        
    }

    public function submit_Post_Ad(){

        $mytime = Carbon::now();
        $division = \Input::get("division");
        $city = \Input::get("city");
        $area = \Input::get("area");
        $ptype = \Input::get("ptype");
        $pname = \Input::get("pname");
        $address = \Input::get("address");
        $bed = \Input::get("bed");
        $bath = \Input::get("bath");

        $files =  Input::file('images');
    
        $file_count = count($files);

        $image = $file_count;

        $uploadcount = 0;

        if(\Input::has("lift")){
            $lift = "YES";  
        }else{
          $lift = "NO";
        }
        
        if(\Input::has("garage")){
            $garage = "YES";  
        }else{
          $garage = "NO";
        }
        
        if(\Input::has("nego")){
          $nego = "YES";  
        }else{
          $nego = "NO";
        }

        $desc = \Input::get("description");
        $price = \Input::get("price");
        $psize = \Input::get("size");
        $nearby = \Input::get("nearby");
        $username = \Input::get("username");
        $contact = \Input::get("contact");
        $email = \Input::get("email");
        $appoint = \Input::get("appoint");
        $listing = \Input::get("ltype");

        $userid = \Session::get('userid');
        $adid = md5($email.$userid.$mytime);

        if(empty($pname) or empty($address) or empty($bed) or empty($bath) or empty($file_count) or empty($desc) or empty($price) or empty($nearby) or empty($username) or empty($contact) or empty($email) or empty($appoint)){

            return view('PostAd')->with('message', 'Please Fill all the parameter!');
        }else{

          $advertise = new \App\Model\Advertise_Model();
        
          $advertise->adid = $adid;
          $advertise->userid = $userid;
          $advertise->advertiser = $username;
          $advertise->division = $division;
          $advertise->city = $city;
          $advertise->area = $area;
          $advertise->adtype = $listing;
          $advertise->price = $price;
          $advertise->addate = $mytime;
          $advertise->contact = $contact;
          $advertise->email = $email;
          $advertise->image = $image;
          $advertise->address = $address;

       

          $property = new \App\Model\Property_Model();

          $property->adid = $adid;
          $property->ptype = $ptype;
          $property->bed = $bed;
          $property->bath = $bath;
          $property->lift = $lift;
          $property->garage = $garage;
          $property->description = $desc;
          $property->nego = $nego;
          $property->appoinment = $appoint;
          $property->nearby = $nearby;
          $property->psize = $psize;
          $property->pname = $pname;


          foreach($files as $file) {
      
            $rules = array('file' => 'required');

            $validator = Validator::make(array('file'=> $file), $rules);

            if($validator->passes()){
              
              $destinationPath = 'images/'.$adid;

              $extension = $file->getClientOriginalExtension();

              $filename = 'Image'.$uploadcount.'.'.$extension;

              $upload_success = $file->move($destinationPath, $filename);
              
              $uploadcount ++;
            }
          }

          if($uploadcount == $file_count){
            
            $advertise->save();
            $property->save();

            return view('PostAd')->with('message', 'Post Successfully Added!!!!');          
          }
          else {

            return view('PostAd')->with('message', 'Select only image files');
          }

        }


        /*if(empty($email) or empty($pass)){

            return view('LogIn')->with('message', 'Fill all the parameter!');
         }else{

            $user_pass = DB::select('select * from users where email ='."'".$email."' and password = '".$pass."'");

            if(!empty($user_pass)){

                $_SESSION['uid'] = $user_pass[0]->userid;
                $_SESSION['uname'] = $user_pass[0]->email;
                $_SESSION['upass'] = $user_pass[0]->password;

              return view('LogIn')->with('message', 'Log In Success!!');
            }else {
                return view('LogIn')->with('message', 'Error!');
            }
        }*/
    }



    public function AdDetails($adid)
    {

        $s_query = "select * from advertisement , property where advertisement.adid = '".$adid."' and property.adid = '".$adid."' and advertisement.adid = property.adid";
        $adv_data = DB::select($s_query);

        $file_count = $adv_data[0]->image;
        
        $adid = $adv_data[0]->adid;

        $directory = "/images/".$adid."/";

        $file_names;

        for($i=0;$i<$file_count;$i++){

          $file_names[$i] = $directory."Image".$i.".jpg";
       }
        
        return view('AdDetails')->with('adv_data',$adv_data)->with('file_names',$file_names);
    }

    public function Edit_Ad($adid){

      $s_query = "select * from advertisement , property where advertisement.adid = '".$adid."' and property.adid = '".$adid."' and advertisement.adid = property.adid";
      $adv_data = DB::select($s_query);

      return view("EditAd")->with("adv_data",$adv_data);

    }

    
}