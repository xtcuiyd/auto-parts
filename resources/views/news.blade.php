@extends('layouts.app')

@section('content')
<!---->
<div class="feature_sec" style="padding-top: 0">
   <div class="container">
      <div class="contact-top">
        <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Contact</li>             
       </ol>
      </div>
     <div class="feature_head">
       <h3>Featured News</h3>
       <span></span>
     </div>
     <ul id="flexiselDemo3">
          @foreach($news as $v)
         <li>
          <div class="biseller-column">
              <a href="#"><img src="{{asset($v->img)}}" alt=""/></a>
              <h4>{{$v->title}}</h4>
              <p>{{$v->content}}</p>
              <a class="more hvr-bounce-to-bottom" href="/news/{{$v->id}}">Read More..</a>
          </div>
         </li>
          @endforeach
        </ul>
        <div class="clearfix"></div>
      <script type="text/javascript">
         $(window).load(function() {
          $("#flexiselDemo3").flexisel({
            visibleItems:4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,        
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
              responsiveBreakpoints: { 
                portrait: { 
                  changePoint:480,
                  visibleItems:2
                }, 
                landscape: { 
                  changePoint:640,
                  visibleItems:2
                },
                tablet: { 
                  changePoint:768,
                  visibleItems:3
                }
              }
            });
            
        });
         </script>
         <script type="text/javascript" src="{{asset('assets/js/jquery.flexisel.js')}}"></script>      
   </div>
</div>
<!---->
@endsection
