@extends('layouts.app')

@section('content')
<!---->
<div class="about" style="padding-top: 0;margin-bottom: 175px">
   <div class="container">
       <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Search Parts</li>             
          </ol>
        <form role="form" action="/search_parts" method="post">
          <div class="form-group">
            <label for="name">Part Number</label>
            <input type="text" class="form-control" id="name" name="parts_num" placeholder="please input the parts number" required="">
          </div>
          <div class="form-group">
            <!-- Text input-->
            <label for="input01">Captch</label>
            <div>
              <div class="col-sm-2 ">
              <input type="text" placeholder="captcha" name="captcha"class="form-control " required="">
              </div>
              <div class="col-sm-2 ">
              {!!captcha_img()!!}
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="input01"></label>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </form>
   </div>
</div>
<!---->
@endsection
