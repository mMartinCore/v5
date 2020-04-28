 

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <meta name="csrf-token" content="{{ csrf_token() }}"> 


  <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
 </script>
       @if(!auth()->guest())
            <script>
                window.Laravel.userId = {!!auth()->user()->id!!}
            </script>
        @endif


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">

  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css  ')}}">


<script type="text/javascript" src="{{asset('moment/moment.js')}}"></script> 
<script src="{{ asset('bower_components/jquery/dist/jquery-1.11.1.min.js')}}"></script>
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">
{{-- <link rel="stylesheet" href="{{asset('dist/css/skins/skin-green.min')}}"> --}}


  <!-- Google Font -->
 
  <link rel="stylesheet" href="{{ asset('Pace/pace.css')}}">
  {{-- <link rel="stylesheet" href="{{ asset('Pace/pace.css')}}"> --}}
  <style>
 
</style>
<style>

#dasboard :hover{

  background-color: red;
  color: aliceblue;
  font-size: large;
}

h3.box-title {
  font-size:1m;
  font-weight: 300;

  display: block;
  line-height:1em;

  color:  #3c8dbc;
}

</style>
 
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DBDS') }}</title>

    <!-- Fonts -->
  
      </head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->


<body class="hold-transition skin-blue sidebar-mini">
  <script language="javascript">

    if ( $(window).width() >= 1280 && $(window).width() <= 1536) {

        document.write("<style>body{zoom:88%;}</style>");
    }
   else if ( $(window).width()>= 1180   && $(window).width() < 1280) {
       document.write("<style>body{zoom:75%;}</style>");
   }
   else if ( $(window).width()>=750  && $(window).width() < 1080 ) {
       document.write("<style>body{zoom:68%;}</style>");
   }
   else if ( $(window).width() <= 750 ) {
       document.write("<style>body{zoom:50%;}</style>");
   }else{
     
      }
</script>














    <div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>BDS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><small> DBD</small></b>System</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>






      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->









           <div id="app" class="form-inline"><br>
           {{-- <a class="form-group  " href="#"> <updatecorpsenotify v-bind:updatecorpsenotification="updatecorpsenotification"></updatecorpsenotify></a>
             <span  class="form-group"><span style="color:#3C8DBC">..............</span> </span> --}}

            <a   class="form-group  " href="#"><newcorpse v-bind:corpsenotification="corpsenotification"></newcorpse> </a>

            <span href="#"  class="form-group"> <span style="color:#3C8DBC">........................................................................................................</span> </span>

            </div>
           <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

          </li>
 

 
          </li>

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <!-- The user image in the navbar-->
              <img src="{{asset('/dist/img/jcflogo.png')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">         {{ isset(auth()->user()->firstName  )?auth()->user()->firstName  :''}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{asset('/dist/img/jcflogo.png')}}" class="img-circle" alt="User Image">

                <p>
                    {{ isset(auth()->user()->firstName  )?auth()->user()->firstName  :'' }} - Current login user
                  <small>Please be responsible...</small>

                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">.</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">.</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">.</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a   href="{{ route('logout') }}" class="btn btn-default btn-flat"   onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  > {{ __('Logout') }}</a>
                  <form id="logout-form"  action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>





                </div>
              </li>
            </ul>
          </li>
     
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        @include('layouts/sidebar')
  </aside>

{{---------------------------------------------------}}
  <!-- Content Wrapper. Contains page content -->

 
  <div class="content-wrapper ">
           <div>
              @include('flash-message')
          </div>

   @yield('content')
   @include('layouts/quickSearchModal')
  </div>
 


 


  <!-- Main Footer -->
  <footer class="main-footer" >  
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="#">DBD System</a>.</strong> All rights reserved.
  </footer>
 

  
</div>
 
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->



      
</body>




<!-- AdminLTE App -->
<script src="{{ asset('Pace/pace.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script> 

@include('layouts.recentActivities')




</html>
 

 


  <script>





function getViewId(id) {
  var url =window.location.protocol+"//"+window.location.hostname+"/corpses/"+id;
$("#load_show_view").load(url, function(responseTxt, statusTxt, xhr){
if(statusTxt == "success")
{
    document.getElementById('demo02').click(); // Works!
    return false;
}
if(statusTxt == "error"){
Command: toastr["error"]("Inconceivable!","Error: " + xhr.status + ": " + xhr.statusText)

toastr.options = {
"closeButton": true,
"debug": false,
"newestOnTop": false,
"progressBar": true,
"positionClass": "toast-top-center",
"preventDuplicates": false,
"onclick": null,
"showDuration": "900",
"hideDuration": "1000",
"timeOut": "5000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
}

}
return false;

});
}



function getViewId_view_Notify(id) {
  var url =window.location.protocol+"//"+window.location.hostname+"/corpses/"+id;
$("#load_show_view").load(url, function(responseTxt, statusTxt, xhr){
if(statusTxt == "success")
{
    document.getElementById('demo02').click(); // Works!
    return false;
}
if(statusTxt == "error"){

Command: toastr["error"]("Inconceivable!","Error: " + xhr.status + ": " + xhr.statusText)

toastr.options = {
"closeButton": true,
"debug": false,
"newestOnTop": false,
"progressBar": true,
"positionClass": "toast-top-center",
"preventDuplicates": false,
"onclick": null,
"showDuration": "900",
"hideDuration": "1000",
"timeOut": "5000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
}

}
return false;

});
}






</script>
