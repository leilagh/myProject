<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>تست</title>

    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <link href="/{{ Config::get('siteconstants.THEME_NAME') }}/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/{{ Config::get('siteconstants.THEME_NAME') }}/css/materialize_rtl.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/{{ Config::get('siteconstants.THEME_NAME') }}/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="/{{ Config::get('siteconstants.THEME_NAME') }}/css/flaticon/flaticon.css"> 


<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">



    <script src="/js/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>

</head>
<body id="app-layout">
<nav class="margin-bottom-20 white nav-head-menu" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{{ url('/') }}" class="left brand-logo navbar-brand">&nbsp;</a>


      <a href="#" data-activates="nav-mobile" class="right button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>



    @yield('content')


<footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            <div class="row">
            <div class="col s4" id="ftr-copyright">ساخته شده با <i class="flaticon-like-1"></i> برای همه شما
            </div>
            <div class="col s3 footer-logo-a">&nbsp;</div>
            <div class="col s5">
            <a class="grey-text text-lighten-4 left" href="#!">ارتباط با ما</a><i class="left">|</i>
            <a class="grey-text text-lighten-4 left" href="#!">وبلاگ</a><i class="left">|</i>
            </div>
            </div>
            </div>
          </div>
        </footer>


    <!-- JavaScripts -->
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}} -->





<script>
     $(document).ready(function() {
        $('select').material_select();
    });
  </script>


  
    
</body>
</html>
