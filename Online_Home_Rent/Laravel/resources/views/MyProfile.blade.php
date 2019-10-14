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
  <link href=" {{ asset('/css/extra.css') }}" rel="stylesheet">
  
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

    <div class="row">
        <div class="col-md-3" style="padding-left:6%">
        <label class="control-label"><h3>My Advertisements</h3></label>
        <hr id="advanceHr">
    </div>
    </div>


    
      <div class="container-fluid" style="padding-top:0;padding-left:5%">
        <!-- Project One -->

        @for($i=0;$i<count($adv_data);$i++)
        <div class="row">
            <div class="col-md-3">
                <a href="#">

                    @if(!empty($adv_data[$i]->adid))
                       <?php $link = "/images/".$adv_data[$i]->adid."/Image0.jpg"; ?>
                       <?php $link2 = "/AdDetails/".$adv_data[$i]->adid; ?>
                       <?php $link3 = "/EditAd/".$adv_data[$i]->adid; ?>
                    @endif
                    <img class="img-responsive" src="{{asset($link)}}" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <h3>Address: {{ $adv_data[$i]->address}}</h3>
                <h4>Price: {{ $adv_data[$i]->price}} Tk</h4>
                <h4>Bed: {{ $adv_data[$i]->bed}}</h4>
                <h4>Bath: {{ $adv_data[$i]->bath}}</h4>
                <a class="btn btn-success" href="{{ URL::to($link2)}}">Show Details<span class="glyphicon glyphicon-chevron-right"></span></a>
                <a class="btn btn-primary" href="{{ URL::to($link3)}}"><span class="glyphicon glyphicon-edit"></span>  Edit</a>
                <a class="btn btn-danger" href="{{ URL::to('/')}}"><span class="glyphicon glyphicon-trash"></span>  Delete</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        @endfor

    </div>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
