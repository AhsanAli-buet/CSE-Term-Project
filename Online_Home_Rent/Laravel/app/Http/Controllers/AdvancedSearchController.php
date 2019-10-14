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



class AdvancedSearchController extends Controller {


	public function __construct()
    {

    }


    public function Advanced_Search(){

    	$query = "select * from advertisement , property where advertisement.adid = property.adid ";

    	$adv_data = DB::select($query);
    	
    	return view('AdvancedSearch')->with('adv_data',$adv_data)->with('query',$query);
    }



     public function Submit_Advanced_Search(){

     	$query = "select * from advertisement , property where advertisement.adid = property.adid ";
     	
     	if(\Input::has("city")){

            $city = \Input::get("city");

            if($city != "Select City"){

            	$query = $query." and advertisement.city = '".$city."' ";	
            }
        }

        if(\Input::has("area")){

            $area = \Input::get("area");

             if($area != "Select Area"){

             	 $query = $query." and advertisement.area = '".$area."' ";
             }  
        }

		if(\Input::has("ltype")){

			$ltype = \Input::get("ltype");

			$query = $query." and advertisement.adtype = '".$ltype."' ";
		}

		$count =0;
		$ptype = "";
		if(\Input::has("flat")){

			$ptype = "'Flat'";

			$count++;
		}
		if(\Input::has("house")){
			 if($count>0){
				$ptype = $ptype." ,'House'"; 	
			 }else{
			 	$ptype = $ptype." 'House'";
			 } 
			$count++;
		}
		if(\Input::has("single_room")){
			 if($count>0){
				$ptype = $ptype." ,'Single Room' ";
			}else{
				$ptype = $ptype." 'Single Room' ";
			}
			$count++;
		}
		if(\Input::has("floor_space")){
			if($count>0){
				$ptype = $ptype." ,'Floor Space' ";
			}else{
				$ptype = $ptype." 'Floor Space' ";
			}
			$count++;
		}
		if(\Input::has("duplex")){
			if($count>0){
				$ptype = $ptype." ,'Duplex'";
			}else{
				$ptype = $ptype." 'Duplex'";
			}	
			$count++;
		}
		if(\Input::has("sublet")){
			if($count>0){
				$ptype = $ptype." ,'Sublet' ";
			}else{
				$ptype = $ptype." 'Sublet' ";
			}
		}

		if($ptype != ""){
			$query = $query." and property.ptype in ($ptype)";
		}

		if(\Input::has("prange1") and \Input::has("prange2")){

			$prange1 = \Input::get("prange1");
			$prange2 = \Input::get("prange2");

			$query = $query." and advertisement.price between '".$prange1."' and '".$prange2."'";
			
		}

		if(\Input::has("Bed")){

			 $bed = \Input::get("Bed");

			 if($bed != "Bed"){
			 	if($bed !="5+"){

			 		$query = $query." and property.bed = '".$bed."'";
			 	}else{
			 		$query = $query." and property.bed > '5'";
			 	}
			 }
		}
		
		if(\Input::has("Bath")){

			 $bath = \Input::get("Bath");

			 if($bath != "Bath"){
			 	if($bath !="3+"){

			 		$query = $query." and property.bath = '".$bath."'";
			 	}else{
			 		$query = $query." and property.bath > '3'";
			 	}
			 }
		}

		if(\Input::has("lift")){
			$query = $query." and property.lift='YES'";
		}
		if(\Input::has("garage")){
			$query = $query." and property.garage='YES'";
		}

		if(\Input::has("psize")){

			$psize = \Input::get("psize");
			$psize1 = $psize - 250;
			$psize2 = $psize + 250;

			$query = $query." and property.psize between '".$psize1."' and '".$psize2."'";
		}

        $adv_data = DB::select($query);

       

       
        return view('AdvancedSearch')->with('adv_data',$adv_data)->with('query',$query);

    }

}