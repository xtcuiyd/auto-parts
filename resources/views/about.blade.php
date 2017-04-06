@extends('layouts.app')

@section('content')
<!---->
<div class="about" style="padding-top: 0">
   <div class="container">
       <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">About</li>             
          </ol>
     <div class="about-grids">
       <div class="col-md-4 about-pic">
          <img src="{{asset('assets/images/pic3.jpg')}}" class="img-responsive" alt=""/>
       </div>
       <div class="col-md-8 about-info">
         <h3>Proin laoreet magna vel sapien iaculis pretium.</h3>
         <p>Nam nisl massa, aliquet id venenatis aliquam, facilisis nec lacus. Aenean non est neque. Nam a rutrum elit. Maecenas eu ultricies tortor,
         a suscipit magna. Donec sit amet risus ornare, venenatis enim sed, ultrices lectus. Maecenas consectetur, libero id porttitor mattis, enim purus scelerisque ante, tempus dapibus 
         quam lacus id dui. Curabitur lorem ex, dignissim sit amet tincidunt id, hendrerit vel ante. In ut felis at ante feugiat accumsan non id enim. Morbi
         magna dui, fringilla eget mollis quis, tincidunt quis nulla. Praesent lobortis lacus nisl, sit amet euismod ipsum ornare eu. Cras a consequat tortor, efficitur ultrices odio. </p>
       </div>
       <div class="clearfix"></div>
     </div>
     <div class="abt-btm-grids">
       <div class="col-md-3 abt-sec span_1_of_4">
         <div class="num-heading">
             <div class="number">
              <figure><span>1</span></figure>
             </div>
            <div class="heading">               
              <h4>Car Repair</h4>
            </div>
            <div class="clearfix"></div>
         </div> 
         <div class="heading-desc"> 
           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
         </div> 
       </div>
       <div class="col-md-3 abt-sec span_1_of_4">
         <div class="num-heading">
             <div class="number">
              <figure><span>2</span></figure>
             </div>
            <div class="heading">               
              <h4>Wheel Alignment</h4>
            </div>
            <div class="clearfix"></div>
         </div> 
         <div class="heading-desc"> 
           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
         </div> 
       </div>
       <div class="col-md-3 abt-sec span_1_of_4">
         <div class="num-heading">
             <div class="number">
              <figure><span>3</span></figure>
             </div>
            <div class="heading">               
              <h4>Car Wash</h4>
            </div>
            <div class="clearfix"></div>
         </div> 
         <div class="heading-desc"> 
           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
         </div> 
       </div>
       <div class="col-md-3 abt-sec span_1_of_4">
         <div class="num-heading">
             <div class="number">
              <figure><span>4</span></figure>
             </div>
            <div class="heading">               
              <h4>Auto Touning</h4>
            </div>
            <div class="clearfix"></div>
         </div> 
         <div class="heading-desc"> 
           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
         </div> 
       </div>
       <div class="clearfix"></div>
     </div> 
     <div class="works">
        <h3>Our Team</h3>   
        <div class="grid_4">
        <div class="text1">
               <img src="{{asset('assets/images/t1.jpg')}}" alt="">
               <h4>Phasellus scipitilifen lus.</h4>
              <p>Kuspendisse laoreet augue iderti wer  interdum merti oremolo lectusto odio, sedorolu fringilla estero libero. </p>
            </div>
        </div>
        <div class="grid_4">
         <div class="text1">
               <img src="{{asset('assets/images/t2.jpg')}}" alt="">
               <h4>Phasellus scipitilifen lus.</h4>
              <p>Kuspendisse laoreet augue iderti wer  interdum merti oremolo lectusto odio, sedorolu fringilla estero libero. </p>
            </div>
        </div>
        <div class="grid_4 span66">
        <div class="text1">
               <img src="{{asset('assets/images/t3.jpg')}}" alt="">
               <h4>Phasellus scipitilifen lus.</h4>
              <p>Kuspendisse laoreet augue iderti wer  interdum merti oremolo lectusto odio, sedorolu fringilla estero libero. </p>
            </div>
        </div>      
        <div class="grid_4">         
            <div class="text1">
               <img src="{{asset('assets/images/t4.jpg')}}" alt="">
               <h4>Phasellus scipitilifen lus.</h4>
              <p>Kuspendisse laoreet augue iderti wer  interdum merti oremolo lectusto odio, sedorolu fringilla estero libero. </p>
            </div>            
         </div>
        </div>
        <div class="clearfix"></div>
          </div>
     
   </div>
</div>
<!---->
@endsection
