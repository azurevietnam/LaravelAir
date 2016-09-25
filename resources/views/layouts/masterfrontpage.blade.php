<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trang chủ</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    
</head>
<body id="app-layout">
    <div class="container-fluid">
        <!--Navigation-->
        <nav class="navbar navbar-inverse">          
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Logo công ty" src="{{ asset('/images/logos/minhvan_logo.png') }}">  
                    </a>
                    <div class="call_center">
                        <span class="glyphicon glyphicon-earphone" aria-hidden="false"></span>
                        <span> Liên hệ: </span>
                        <span class="phone_number">0468472289</span>
                    </div>
                    
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-3">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Hướng dẫn đặt vé</a></li>
                        <li><a href="#">Hướng dẫn thanh toán</a></li>
                        <li><a href="#">Khuyến mãi</a></li>
                        <li><a href="#">Công ty Minh Vân</a></li>
                        <li><a href="#">Câu hỏi thường gặp</a></li>
                        <li><a href="#">Liên hệ</a></li>                        
                    </ul>                  
                </div><!-- /.navbar-collapse -->
        </nav><!-- /.navbar -->


        @yield('content')
        
        
        
    </div>
    <!--Footer-->
    <div class="footer container-fluid">
        <div class="row footer1">
            <div class="col-xs-12 col-md-4">
                <h4>Fanpage</h4>
                <div class="fb-page"
                     data-href="https://www.facebook.com/C%C3%B4ng-Ty-TNHH-Minh-V%C3%A2n-1656102788010227/?fref=ts" 
                     data-width="340"
                     data-hide-cover="false"
                     data-show-facepile="true">

                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <h4>Cơ sở 1</h4>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> phi2902@yahoo.com</p>
                <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Kajaanintie 34 , 90130, Finland</p>
                <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0468472289 </p>
            </div>
            <div class="col-xs-12 col-md-4">
                <h4>Cơ sở 2</h4>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> phi2902@yahoo.com</p>
                <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Kajaanintie 34 , 90130, Finland</p>
                <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 0468472289 </p>
            </div>
        </div>
        <div class="row footer2">
            <div class="col-xs-12 text-center">Copyright © 2015 Cty TNHH Vé máy bay Minh Vân | All right reserved</div>
        </div>
    </div>
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    @yield('script')
</body>
</html>


