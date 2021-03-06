
@if(Auth::guard('admin')->check())
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laughter Community | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="{{asset('public/auth_pages/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
<link rel="stylesheet" href="{{asset('public/auth_pages/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{asset('public/auth_pages/dist/css/skins/_all-skins.min.css')}}">
  <!-- iCheck -->
<link rel="stylesheet" href="{{asset('public/auth_pages/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
<link rel="stylesheet" href="{{asset('public/auth_pages/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
<link rel="stylesheet" href="{{asset('public/auth_pages/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
<link rel="stylesheet" href="{{asset('public/auth_pages/plugins/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('public/auth_pages/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{asset('public/auth_pages/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- DataTables -->
<link rel="stylesheet" href="{{asset('public/auth_pages/plugins/datatables/dataTables.bootstrap.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style type="text/css">
    
    .color-palette {
      color: #fff;
      margin-left: 5px;
    }
  </style>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>LC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>LC Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('public/auth_pages/dist/img/avatar.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::guard('admin')->user()->username}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('public/auth_pages/dist/img/avatar.png')}}" class="img-circle" alt="User Image">

                <p>
                  {{Auth::guard('admin')->user()->username}}
                </p>
                <p>Role: 
                @if(Auth::guard('admin')->user()->role == 1)
                {{'Ordinary Admin'}}
                @else(Auth::guard('admin')->user()->role == 2)
                {{'Super Admin'}}
                @endif

                </p>
              </li>
              <!-- Menu Body -->
              
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">

                </div>
                @if(Auth::guard('admin')->user()->role == 2)
                <div class="pull-left">
                  <a href="{{URL::to('/admin/register')}}" class="btn btn-default btn-xs">Add admin</a>
                </div>

                <div class="pull-left">
                  <a href="{{URL::to('/admin/automatch/pause')}}" class="btn btn-default btn-xs">PA</a>
                </div>

                <div class="pull-left">
                  <a href="{{URL::to('/admin/automatch/start')}}" class="btn btn-default btn-xs">LA</a>
                </div>

                @endif

                <div class="pull-left">
                  <a href="{{URL::to('/admin/logout')}}" class="btn btn-default btn-xs">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- ############## changes made ################### -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('public/auth_pages/dist/img/avatar.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left bg-light-white color-palette">
          <p>{{Auth::guard('admin')->user()->username}}</p>
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class=" treeview">
          <a href="{{URL::to('/admin/dashboard')}}">
            <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class=" treeview">
          <a href="{{URL::to('/admin/user/list')}}">
            <i class="fa fa-dashboard"></i>
              <span>Manage Users</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class=" treeview">
          <a href="{{URL::to('/admin/message/list')}}">
            <i class="fa fa-dashboard"></i>
              <span>Manage Inbox</span>
          </a>
        </li>
        <li class=" treeview">
          <a href="{{URL::to('/admin/gsmile/list')}}">
            <i class="fa fa-dashboard"></i>
              <span>SL Requests</span>
          </a>
        </li>
        <li class=" treeview">
          <a href="{{URL::to('/admin/rsmile/list')}}">
            <i class="fa fa-dashboard"></i>
              <span>RL Requests</span>
          </a>
        </li>

        <li class=" treeview">
          <a href="{{URL::to('/admin/fasttrack/view')}}">
            <i class="fa fa-dashboard"></i>
              <span>Fast track Laughter</span>
          </a>
        </li>
        
        <li class=" treeview">
          <a href="{{URL::to('/admin/matches/list')}}">
            <i class="fa fa-dashboard"></i>
              <span>Match list</span>
          </a>
        </li>

          <li class=" treeview">
          <a href="{{URL::to('/admin/testimony/list')}}">
            <i class="fa fa-dashboard"></i>
              <span>Manage Testimony</span>
          </a>
        </li>

        
        <li class=" treeview">
          <a href="{{URL::to('/admin/news/list')}}">
            <i class="fa fa-dashboard"></i>
              <span>Manage News</span>
          </a>
        </li>

        <li class=" treeview">
          <a href="{{URL::to('/admin/stats/view')}}">
            <i class="fa fa-line-chart"></i>
              <span>Statistics</span>
          </a>
        </li>

        <li class=" treeview">
          <a href="{{URL::to('/admin/logout')}}">
            <i class="fa fa-dashboard"></i>
              <span>Log Out</span>
          </a>
        </li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    

 






@yield('content')








    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://laughtercommunity.com">Laughter Community</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('public/auth_pages/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('public/auth_pages/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/auth_pages/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('public/auth_pages/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('public/auth_pages/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/auth_pages/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('public/auth_pages/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('public/auth_pages/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSI5 -->
<script src="{{asset('public/auth_pages/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- DataTables -->
<!-- <script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script> -->
<!-- Slimscroll -->
<!-- <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
 --><!-- FastClick -->
<!-- <script src="plugins/fastclick/fastclick.js"></script>
 --><!-- AdminLTE App -->
<!-- <script src="dist/js/app.min.js"></script>
 --><!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script>
 --><!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script>
 -->
<script src="{{asset('public/auth_pages/dist/js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('public/auth_pages/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('public/auth_pages/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/auth_pages/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('public/auth_pages/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('public/auth_pages/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/auth_pages/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/auth_pages/dist/js/demo.js')}}"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
    });
    
  });
</script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>


<!--McAfee security-->
<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
<!--McAfee security-->


</body>
</html>

@endif
