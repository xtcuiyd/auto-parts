<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="_token" content="{{ csrf_token() }}"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Auto cars Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<title>Laravel</title>

<link href="{{asset('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
<script src="{{asset('assets/js/responsiveslides.min.js')}}"></script>

<script>
// You can also use "$(window).load(function() {"
$(function () {
  // Slideshow 4
  $("#slider3,#slider2").responsiveSlides({
    auto: true,
    pager: true,
    nav: false,
    speed: 500,
    namespace: "callbacks",
    before: function () {
      $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
      $('.events').append("<li>after event fired.</li>");
    }
  });

});
</script>
<body id="app-layout">
<!-- banner -->
<div class="banner">
     <div class="container">
         <div class="header">
             <div class="logo">
                 <h1><a href="index.html"><img src="{{asset('assets/images/car.png')}}" alt=""/>AUTO <span>PARTS</span></a></h1>
             </div>
             <!-- <div class="top_details">
                 <p><span></span> (880)123 2500</p>
                 <div class="search">
                 <form>
                    <input type="text" value="" placeholder="Search...">
                    <input type="submit" value="">
                    </form>
                 </div>
             </div> -->
             <div class="clearfix"></div>
         </div>
         <nav class="navbar navbar-default">
             <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li @if(Request::path()=='home') class="active"  @endif><a href="{{ url('/home') }}">首页 <span class="sr-only">(current)</span></a></li>
                    <li @if(Request::path()=='search_parts') class="active"  @endif><a href="{{ url('/search_parts') }}">搜索配件</a></li>
                    <li @if(Request::path()=='news') class="active"  @endif><a href="{{ url('/news') }}">新闻</a></li>
                    <li @if(Request::path()=='about') class="active"  @endif><a href="{{ url('/about') }}">关于我们</a></li>
                    <li @if(Request::path()=='contact') class="active"  @endif><a href="{{ url('/contact') }}">联系我们</a></li>
                  </ul>
             </div>
          </nav>
        <!-- <div  id="top" class="callbacks_container">
                         <ul class="rslides" id="slider3">               
                             <li>
                              <div class="banner-info">
                                  <h3>Aliquam ut mauris vestibulum, condimentum neque vitae nulla.</h3>
                                  <p>Pellentesque congue libero accumsan porta.</p>
                              </div>
                             </li>
                             <li>
                              <div class="banner-info">
                                  <h3>Nam et urna interdum blandit condimentum vivamus neque vitae.</h3>                             
                                  <p>Sed eu quam ut orci ullamcorper tincidunt quam.</p>
                              </div>
                             </li>
                             <li>
                              <div class="banner-info">
                                  <h3>Cras pretium metus sed justo condimentum, sed commodo nulla.</h3>
                                  <p>Nulla eu sapien et eros finibus congue.</p>
                              </div>
                             </li>                   
                         </ul>
                 </div>  -->         
     </div>
</div>
<!---->

    @yield('content')
    <!-- JavaScripts -->
    
 <div class="col-md-8 ftr2-bottom">     
            <p>Copyright &copy; 2017.Company name All rights reserved.More Templates <a href="#" target="_blank" title="">Machine</a> - Collect from <a href="#" title="" target="_blank">Machine</a></p>
     </div>
</div>
<!---->
</body>
</html>
