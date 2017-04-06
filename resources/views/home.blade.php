@extends('layouts.app')

@section('content')
<!---->
<div class="welcome">
    <div class="container">
          <div class="welcome_sec">
             <div class="col-md-6 welcome_info">
                  <h3>Welcome</h3>
                  <span></span>
                  <h4>Ut eget neque ac ipsum venenatis lobortis at et diam.</h4>
                  <p>Curabitur porta nisl non dui lobortis, vel aliquet ex pretium. Vivamus ullamcorper odio at commodo egestas.
                  Mauris lacinia nibh a enim dictum, sit amet scelerisque enim molestie. Morbi ac laoreet ante, quis fermentum urna. 
                  Etiam sit amet massa non nunc tincidunt mattis. Nunc non ex ultricies, tristique leo sed, vehicula mauris. Sed mollis tristique ligula, nec euismod dolor pharetra non.</p>
                 <p>Etiam ante diam, congue sit amet elit placerat, faucibus faucibus ipsum. Vivamus vel laoreet nulla. Aenean id bibendum diam. Donec rutrum mi diam, sed tempus metus luctus a.
                 Nullam vitae quam sed felis mattis facilisis. Nunc magna. Donec eleifend odio non neque semper eleifend. Mauris pharetra venenatis augue.</p>
                 <a href="/about" class="hvr-bounce-to-bottom">Read More</a>
             </div>
             <div class="col-md-6 welcome_pic">
                 <h2>Suspendisse massa pellentesque</h2>
                 <img src="{{asset('assets/images/wc.jpg')}}" class="img-responsive" alt=""/>
                 <h3>Vestibulum efficitur lacus nulla porttitor lorem luctus.</h3>
                 <p>Duis vitae auctor purus. Aenean feugiat nunc mauris, id porttitor turpis 
                 rhoncus sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean finibus felis ac 
                 risus lacinia, non venenatis erat vestibulum.</p>
                 <p></p>
             </div>
             <div class="clearfix"></div>
          </div>
    </div>
</div>
<!---->
@endsection
