<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Admin</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href=" {{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"> 
        <link href=" {{ asset('/css/style.css') }}" rel="stylesheet">
	</head>
	<body id="adminbody">


<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                 
                 @if(Session::get('adminlogin'))

                    <li><a href="#"><i class="glyphicon glyphicon-user"></i> {{ Session::get('adminname')}}</a></li>
                    <li><a href="{{URL::to('/Logout')}}"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>

                @endif
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->
    
    @if(!Session::get('adminlogin'))
        <div class="container">   
          <form class="form-horizontal" action="" method="POST">
            <fieldset>
              <div id="legend">
                  <legend class="">Admin Log In</legend>
                  @if(!empty($message))
                    <p>{{ $message }}</p>
                  @endif
              </div>
              <div class="control-group form-group">
              <!-- Username -->
                <label class="control-label"  for="username">Email</label>
                <div class="controls">
                    <input type="text" id="username" name="usermail" placeholder="" class="input-xlarge">
                </div>
              </div>
     
              <div class="control-group form-group">
                <!-- Password-->
              <label class="control-label" for="password">Password</label>
                <div class="controls">
                  <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                </div>
              </div>
              <br>
              <div class="control-group form-group">
                <!-- Button -->
                <div class="controls">
                  <button class="btn btn-success">Log In</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
  

    @endif


     @if(Session::get('adminlogin'))
<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header">
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li><a href="{{URL::to('/AdminPanel')}}"><i class="glyphicon glyphicon-comment"></i> Disscussions</a></li>
                        <li><a href="{{URL::to('/ReportedAd')}}"><i class="glyphicon glyphicon-alert"></i> Reported Advertisements</a></li>
                        <li><a href="{{URL::to('/UserList')}}"><i class="glyphicon glyphicon-user"></i> User List</a></li>   
                        <li><a href="{{URL::to('/OtherAdmin')}}"><i class="glyphicon glyphicon-bookmark"></i> Other Admins</a></li>
                        <li><a href="{{URL::to('/OtherMsz')}}"><i class="glyphicon glyphicon-envelope"></i> Other Messages</a></li>
                        <li><a href="{{URL::to('/Logout')}}"<i class="glyphicon glyphicon-off"></i> Logout</a></li>
                    </ul>
                </li>

                
            </ul>

        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">

            <!-- column 2 -->
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> Disscussion Board</strong></a>
                    
            <!--/row-->

            <hr>
            <div class="col-md-6">
                @for($i=0;$i<count($msg_data);$i++)
                
                    <div class="row" style="padding:2%;border: 2px solid rgb(153, 153, 153)">
                        <div class="col-md-6" style="text-left"><i class="glyphicon glyphicon-user"></i><label>{{"  ".$msg_data[$i]->admin_name}}</label></div>
                        <div class="col-md-6" style="text-right"><label>{{$msg_data[$i]->date}}</label></div>
                        <div class="row">
                            <p style="padding-left:4%;padding-right:4%">{{$msg_data[$i]->msz}}</p>
                        </div>
                    </div>
                    <hr>
                
                @endfor
            </div>


            <div class="col-md-6">

                <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="glyphicon glyphicon-wrench pull-right"></i>
                                <h4>Add a Disscussion</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form form-vertical" action="AdminPanel/Discussion" method="POST">
                            
                                <div class="control-group">
                                    <div class="controls">
                                        <input type="text" id="discussion" name="discussion" placeholder="" class="input-xlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">
                                            Post
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--/panel content-->
                    </div>
                    
            </div>

                <!--/col-span-6-->

            </div>
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->

<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>

    @endif
<!-- /.modal -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>