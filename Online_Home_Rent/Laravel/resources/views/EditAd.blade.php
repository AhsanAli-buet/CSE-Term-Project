<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="Creative One Page Parallax Template">
  <meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
  <meta name="author" content=""> 
  <title>BashaBhara.com</title>
  <link href=" {{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"> 
  <link href=" {{ asset('/home/css/prettyPhoto.css') }}" rel="stylesheet">
  <link href=" {{ asset('/home/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('/home/css/animate.css') }}" rel="stylesheet">
  <link href=" {{ asset('/home/css/main.css') }}" rel="stylesheet">
 <link href=" {{ asset('/home/css/responsive.css') }}" rel="stylesheet">
  <link href=" {{ asset('/css/bashavara.css') }}" rel="stylesheet">
  
  <!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
  <script src="js/respond.min.js"></script> <![endif]--> 
  <link rel="shortcut icon" href="images/ico/favicon.png"> 
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/home/images/ico/apple-touch-icon-144-precomposed.png') }}"> 
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/home/images/ico/apple-touch-icon-114-precomposed.png') }}"> 
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/home/images/ico/apple-touch-icon-72-precomposed.png') }}"> 
  <link rel="apple-touch-icon-precomposed" href="{{ asset('/home/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head>

<body>

    <!-- Navigation -->
    <div class="preloader">
    <div class="preloder-wrap">
      <div class="preloder-inner"> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div> 
        <div class="ball"></div>
      </div>
    </div>
  </div><!--/.preloader-->

    <!-- Navigation -->
<header id="navigation"> 
    <div class="navbar navbar-inverse navbar-fixed-top" role="banner" style="background: #F6F6F6"> 
      <div class="container"> 
        <div class="navbar-header"> 
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
          </button> 
          <a class="navbar-brand" id="home-brand" href="{{URL::to('/')}}"><h1><img src="{{asset('/home/images/logop.png')}}" alt="logo"></h1></a>
          
        </div> 
        <div class="collapse navbar-collapse"> 
          <div class="row">
          <ul class="nav navbar-nav navbar-right" id="head-nav1"> 
            
            @if(Session::get('userlogin'))
                        
                <li class="scroll"><a href="{{ URL::to('/MyProfile')}}"><i class="fa fa-user"></i> {{ Session::get('username')}}</a></li>
                <li class="scroll"><a href="{{ URL::to('/Logout')}}"><i class="fa fa-sign-out"></i>Log Out</a></li>
                       
           @endif

           @if(!Session::get('userlogin'))
                        
                <li class="scroll"><a href="{{ URL::to('/LogIn')}}"><i class="fa fa-sign-in"></i>Log In</a></li>
                <li class="scroll"><a href="{{ URL::to('/Register')}}"><i class="fa fa-user-plus"></i>Register</a></li>

           @endif 
          </ul> 
          </div>
          <div class="row">
          <ul class="nav navbar-nav navbar-right" id="head-nav2"> 
          
          <li class="scroll"><a href="{{ URL::to('/Rent')}}"><i class="fa fa-money"></i>Rent</a></li>
          <!--<li class="scroll"><a href="#clients"><i class="fa fa-suitcase"></i>Buy</a></li> --> 
          <li class="scroll"><a href="{{ URL::to('/PostAd')}}"><i class="fa fa-pencil"></i>Advertise</a></li>  
          <li class="scroll"><a href="{{ URL::to('/MyProfile')}}"><i class="fa fa-list-alt"></i>My Advertisement</a></li> 
            <li class="scroll"><a href="#clients"><i class="fa fa-bookmark"></i>My WishList</a></li> 
            <li class="scroll"><a href="#blog"><i class="fa fa-thumb-tack"></i>Create Alert</a></li> 
            <li class="scroll"><a href="#contact"><i class="fa fa-bell"></i>Notifications</a></li>
                
          </ul> 
          </div>
        </div>

        
        
      </div> 
    </div><!--/navbar--> 
</header>

    <br><br>


    <div class="container">   
      <!--<form class="form-horizontal" action="PostAd" method="POST" files="true">-->
      {!! Form::open(array('url'=>'/PostAd','method'=>'POST', 'files'=>true)) !!}
        <fieldset>
          <div id="legend">
              <legend class=""><h2>Edit Your Advertisement Here</h2></legend>
                @if(!empty($message))
                    <p>{{ $message }}</p>
                @endif
          </div>

          <div class="control-group">
          <!-- Username -->
            <label class="control-label" >Location:</label>
            <hr id="foken">
            <div class="row">
              <div class="col-md-4">
                  <div class="col-md-4">
                    <label class="control-label">Division:</label>
                  </div>
                  <div class="col-md-8">
                     <div class="form-group">
                        <select class="form-control" id="sel1" name="division">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barisal">Barishal</option>
                            <option value="Rangpur">Rongpur</option>
                            <option value="Mymensingh">Mymensingh</option>
                        </select>
                      </div>
                  </div>
              </div>
            <div>
          </div>

          <div class="col-md-4">
              <div class="col-md-4">
                  <label class="control-label">City: </label>
              </div>
              <div class="col-md-8">
                  <div class="form-group">
                        <select class="form-control" id="sel1" name="city">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barisal">Barishal</option>
                            <option value="Rangpur">Rongpur</option>
                            <option value="Mymensingh">Mymensingh</option>
                        </select>
                  </div>
              </div>
          </div>

          <div class="col-md-4">
                  <div class="col-md-4">
                    <label class="control-label" >Area: </label>
                  </div>
                  <div class="col-md-8">
                     <div class="form-group controls">
                        <select class="form-control" id="sel1" name="area">
                            <option value="Uttara">Uttara</option>
                            <option value="Mirpur">Mirpur</option>
                            <option value="Mohamadpur">Mohamadpur</option>
                            <option value="Gulsan">Gulsan</option>
                            <option value="Banani">Banani</option>
                            <option value="Lalbag">Lalbag</option>
                            <option value="Jatrabari">Jatrabari</option>
                            <option value="Dhanmondi">Dhanmondi</option>
                            <option value="Mohakhali">Mohakhali</option>
                            <option value="Motijheel">Motijheel</option>
                            <option value="Shantinogor">Shantinogor</option>
                            <option value="Arambag">Arambag</option>
                        </select>
                      </div>
                  </div>
          </div>

          <div class="container form-group radio-group">
              <label class="control-label"  for="username">Rent Type </label>
              <hr id="foken">
              
              @if($adv_data[0]->adtype == "Residential")
                <label class="radio-inline"><input type="radio" checked ="checked" value="Residential" name="ltype">Residential</label>
                <label class="radio-inline"><input type="radio" value="Commercial" name="ltype">Commercial</label>    
              @endif

              @if($adv_data[0]->adtype == "Commercial")
                <label class="radio-inline"><input type="radio" value="Residential" name="ltype">Residential</label>
                <label class="radio-inline"><input type="radio" checked ="checked" value="Commercial" name="ltype">Commercial</label> 
              @endif
               
               
		      </div>
            <br>

            <div class="control-group container">
              <label class="control-label">Property Specification</label>
              <hr id="foken">
            </div>
            

            <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label">Property Type: </label>
                  </div>
                  <div class="col-md-8">
                     <div class=" input-xlarge form-group">
                        <select class="form-control" id="sel1" name="ptype">
                            <option value="Duplex">Duplex</option>
                            <option value="House">House</option>
                            <option value="Flat">Flat</option>
                            <option value="Sublet">Sublet</option>
                            <option value="Floor Space">Floor Space</option>
                            <option value="Single Room">Single Room</option>
                        </select>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label" >Property Name: </label>
                  </div>
                  <div class="col-md-8 form-group">
                     <input type="text" id="textBox" placeholder="" class="form control" value="{{$adv_data[0]->pname}}" name="pname">
                  </div>
                </div>
              </div>
          </div>
          <br>
          <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label" >Property Address: </label>
                  </div>
                  <div class="col-md-8 form-group">
                     <input type="text" id="textBox2"placeholder="" class="input-xlarge" value="{{$adv_data[0]->address}}" name="address">
                  </div>
                </div>
              </div>
          </div>
          <br>

          <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label" >Property Size: </label>
                  </div>
                  <div class="col-md-6 form-group" style="padding-right:0">
                     <input type="text" id="textBox"  placeholder="" class="input-xlarge" value="{{$adv_data[0]->psize}}" name="size"><label>(Square ft)</label> 
                  </div> 
                </div>
              </div>
          </div>
          <br>

          <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label"  for="username">Bed: </label>
                  </div>
                  <div class="col-md-8 form-group">
                     <input type="text" id="textBox"  placeholder="" value="{{$adv_data[0]->bed}}" class="input-xlarge" name="bed">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label">Bath: </label>
                  </div>
                  <div class="col-md-8 form-group form-group">
                     <input type="text" id="textBox" placeholder="" class="input-xlarge" value="{{$adv_data[0]->bath}}" name="bath">
                  </div>
                </div>
              </div>
          </div>
          <br>

          <div class="control-group container">
            <div class="row container">
              <div class="col-md-2">
                 <label class="control-label"  for="username">Listing Type </label>
              </div>
              <div class="col-md-10 form-group">

                  @if($adv_data[0]->lift == "YES")
                    <label class="checkbox-inline"><input type="checkbox" checked ="checked" value="1" name="lift">Lift</label>
                  @else
                    <label class="checkbox-inline"><input type="checkbox" value="1" name="lift">Lift</label>
                  @endif

                  @if($adv_data[0]->garage == "YES")
                    <label class="checkbox-inline"><input type="checkbox" checked ="checked" value="1" name="garage">Garage</label>
                  @else
                    <label class="checkbox-inline"><input type="checkbox" value="1" name="garage">Garage</label>
                  @endif

              </div>
            </div>
          </div>
 
             
          <br>
          <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label"  for="username">Short Description: </label>
                  </div>
                  <div class="col-md-8 form-group">
                     <input type="text" id="largerTextBox"  placeholder="" class="input-xlarge" value="{{$adv_data[0]->description}}" name="description">
                  </div>
                </div>
              </div>
          </div>
          <br>
          <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label"  for="username">Upload picture: </label>
                  </div>
                  <div class="col-md-8 form-group">
                      
                      
                      {!! Form::file('images[]', array('multiple'=>true)) !!}
                     
                    
                  </div>
                </div>
              </div>
          </div>
          <br>
          <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label" >Price: </label>
                  </div>
                  <div class="col-md-4 form-group">
                     <input type="text" id="textBox"  placeholder="" class="input-xlarge" value="{{$adv_data[0]->price}}" name="price"><label>(TK)</label>
                  </div>
                  <div class="col-md-4 form-group">
                    <label class="checkbox-inline"><input type="checkbox" value="1" name="nego">Negotiable</label> 
                 </div>
                </div>
              </div>
          </div>
          <br>

          <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label" >What's nearby: </label>
                  </div>
                  <div class="col-md-8 form-group">
                     <input type="text" id="largerTextBox" placeholder="" class="input-xlarge" name="nearby">
                  </div>
                </div>
              </div>
          </div>

          </br>
		  
		  <div class="control-group container">
              <label class="control-label">Contact Information</label>
              <hr id="foken">
          </div>
		  
		  
		  <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label"  for="username">Name: </label>
                  </div>
                  <div class="col-md-8 form-group">
                     <input type="text" id="textBox" placeholder="" class="input-xlarge" name="username">
                  </div>
                </div>
              </div>
          </div>
          <br>
          <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label" >Contact Number: </label>
                  </div>
                  <div class="col-md-8 form-group">
                     <input type="text" id="textBox" placeholder="" class="input-xlarge" name="contact">
                  </div>
                </div>
              </div>
          </div>
          <br>
		  
		  <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label"  for="username">Email: </label>
                  </div>
                  <div class="col-md-8 form-group">
                     <input type="text" id="textBox" placeholder="" class="input-xlarge" name="email">
                  </div>
                </div>
              </div>
          </div>
          <br>
          <div class="control-group container">
          <!-- Username -->
              <div class="row">
                <div class="col-md-6">
                  <div class="col-md-4">
                    <label class="control-label" >Appoinment time: </label>
                  </div>
                  <div class="col-md-8 form-group">
                     <input type="text" id="textBox" placeholder="" class="input-xlarge" name="appoint">
                  </div>
                </div>
              </div>
          </div>
          <br>
		  
          <div class="ccontrol-group col-md-7">
            <!-- Button -->
            <div class="controls form-group">
                <!--<button class="btn btn-success pull-right">Submit</button>-->
              
               {!! Form::submit('Update', array('class'=>'send-btn btn-success pull-right')) !!}
               {!! Form::close() !!}
            </div>
          </div>

        </fieldset>
      </form>
    </div>

    
    <!-- /.container -->

    <br><br><br><br><br><br>

    <footer id="footer"> 
    <div class="container"> 
      <div class="text-center"> 
        <p>Copyright &copy; 2015 - <a href="">BashaBhara.com</a> | All Rights Reserved</p> 
      </div> 
    </div> 
  </footer> <!--/#footer--> 

  <script src="{{ asset('/home/js/jquery.js') }}"></script> 
  <script src="{{ asset('/home/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/home/js/smoothscroll.js') }}"></script> 
  <script src="{{ asset('/home/js/jquery.isotope.min.js') }}"></script>
  <script src="{{ asset('/home/js/jquery.prettyPhoto.js') }}"></script> 
  <script src="{{ asset('/home/js/jquery.parallax.js') }}"></script> 
  <script src="{{ asset('/home/js/main.js') }}"></script>  

</body>

</html>
