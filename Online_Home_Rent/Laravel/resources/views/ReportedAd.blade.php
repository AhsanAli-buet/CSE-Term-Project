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
            <a href="#"><strong>Reprted Advertisements</strong></a>
            <hr>

            <!---Here should be the codes of reported Ads--> 
            
            <div class="container-fluid" style="padding-top:0">

                 @for($i=0;$i<count($report_data);$i++)
                    <div class="row">
                          <div class="col-md-5">
                               @if(!empty($report_data[$i]->adid))
                                   <?php $link = "/images/".$report_data[$i]->adid."/Image0.jpg"; ?>
                                   <?php $link2 = "/AdDetails/".$report_data[$i]->adid; ?>
                                   <?php $link3 = "/AdDelete/".$report_data[$i]->adid; ?>
                                @endif
                                <img class="img-responsive" src="{{asset($link)}}" alt="">
                            </div>
                            <div class="col-md-7">
                                <h3>Address: {{ $report_data[$i]->address}}</h3>
                                <h4>Price: {{ $report_data[$i]->price}} Tk</h4>
                                <h4 style="color:red">Reports: {{ $report_data[$i]->report}}</h4>
                                <a class="btn btn-info" href="{{URL::to($link3)}}"><span class="glyphicon glyphicon-trash"> </span> Delete</a>
                                <a class="btn btn-success" href="{{ URL::to($link2)}}">Show Details<span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                    </div>
        <!-- /.row -->

                    <hr>

                @endfor
        

             </div>

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
<!-- /.modal -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>