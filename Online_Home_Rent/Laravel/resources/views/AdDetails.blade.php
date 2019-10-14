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
        <h1> Advertisement Details</h1>
    </div>

    <div class="container-fluid" style="padding-left:10%">
        <div class="col-md-6 col-lg-6">
            
            <div class="row">
                <div class="col-md-7 col-lg-7">
                    <h3>{{ $adv_data[0]->pname}}</h3>
                    </div>
                <div class="col-md-5 col-lg-5">
                    <h3>{{ $adv_data[0]->price}}TK</h3>
                </div>
            </div>

            <div class="row"style="padding:4%">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     @for($i=1; $i<$adv_data[0]->image;$i++)

                        <li data-target="#carousel-example-generic" data-slide-to=" <?php $i ?> "></li>

                     @endfor
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src= "{{ asset($file_names[0])}}" alt="...">
                      <div class="carousel-caption">
                        <h4>Caption Text</h4>
                      </div>
                    </div>

                    @for($i=1; $i<$adv_data[0]->image;$i++)
                          <div class="item">
                              <img src= "{{ asset($file_names[$i])}}" alt="...">
                              <div class="carousel-caption">
                                <h4>Caption Text</h4>
                              </div>
                          </div>
                    @endfor
                    
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div> <!-- Carousel -->
            </div>
        </div>
        <div class="col-md-6 col-lg-6" style="padding-left:3%">
            <h3 style="padding-left:25%"> Date: {{ $adv_data[0]->addate}}</h3>
            <div class="row" style="padding:8%">

                <h2>Property Details</h2>

                <div class="col-md-12 col-lg-12"><h4>Address: {{ $adv_data[0]->address}}</h4></div>
                <div class="col-md-6 col-lg-6">
                    <h4>City: {{ $adv_data[0]->city}}</h4>
                    <h4>Area: {{ $adv_data[0]->area}}</h4>
                    <h4> Property Type: {{ $adv_data[0]->ptype}}</h4>
                    <h4> Size: {{ $adv_data[0]->psize}} square ft</h4>
                    <h4> Listing Type: {{ $adv_data[0]->adtype}}</h4>
                    
                </div>
                <div class="col-md-6 col-lg-6" style="padding-left:10%">
                    
                    <h4> Bed: {{ $adv_data[0]->bed}}</h4>
                    <h4> Bath: {{ $adv_data[0]->bath}}</h4>
                    <h4> Garaze: {{ $adv_data[0]->garage}}</h4>
                    <h4> Lift: {{ $adv_data[0]->lift}}</h4>
                    <h4> Negotiable: {{ $adv_data[0]->nego}}</h4>
                    
                </div>
            </div>
            <div class="row" style="padding-left:20%">
                <button class="btn btn-success">Add to Wishlist</button>
                <button class="btn btn-success">Print</button>
                <button class="btn btn-success">Email</button>
            </div>
        </div>
    </div>

    <div class="container" style="padding-left:5%">

            <div class="col-md-7 col-lg-7">
                <h2>Short Description</h2>
                   <div style="padding-left:3%">
                      <p>{{ $adv_data[0]->description}}</p>
                   </div>
                <h2>Nearby</h2>
                   <div style="padding-left:3%">
                      <p>{{ $adv_data[0]->nearby}}</p>
                   </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <h2>Contact</h2>
               <div class="container">
                 <h4>Advertiser: {{ $adv_data[0]->advertiser}}</h4>
                 <h4>Mobile: {{ $adv_data[0]->contact}}</h4>
                 <h4>Email: {{ $adv_data[0]->email}}</h4>
                 <h4> Appoinmnet Time: {{ $adv_data[0]->appoinment}}</h4>
             </div>
            </div>
            
        </div>
    </div>

    
    <hr>

        <!-- Footer -->

    </div>
    <!-- /.container -->
<br><br><br><br><br><br><br><br><br><br>

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
   
  
    <!-- jQuery -->

    <script>
        $('.carousel').carousel({
            interval: 3000
        })
    </script>

</body>

</html>
