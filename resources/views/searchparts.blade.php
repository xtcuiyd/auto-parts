@extends('layouts.app')

@section('content')
<!---->
<div class="about" style="padding-top: 0;margin-bottom: 175px">
   <div class="container">
       <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Search Parts</li>             
          </ol>
        @if (Session::has('message'))
           <div class="alert alert-danger">{{ Session::get('message') }}</div>
        @endif
        <?php Session::forget('message'); ?>
        <div class="col-sm-4" >
          <form role="form" action="/search_parts" method="post">
            <div class="form-group">
              <label for="name">Part Number</label>
              <input type="text" class="form-control" id="name" name="parts_num" placeholder="please input the parts number" required="">
            </div>
            <div class="form-group">
              <!-- Text input-->
              <label for="input01">&nbsp;&nbsp;&nbsp;Captch</label>
              <div>
                <input type="text" placeholder="captcha" name="captcha"class="form-control " required="">
                {!!captcha_img()!!}
              </div>
            </div>
            <div class="form-group">
              <label for="input01"></label>
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>
             <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </form>
        </div>
        @if($res)
         <div class="table-responsive col-sm-8" style="border-left: 1px solid #ccc">
          <table class="table" style="text-align: center;">
            <caption>Search Result</caption>
            <thead>
              <tr>
                <th>Parts Number</th>
                <th>Name</th>
                <th>Standard Price</th>
                <th>Length</th>
                <th>Width</th>
                <th>Height</th>
                <th>Weight</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$res->parts_num}}</td>
                <td>{{$res->name}}</td>
                <td>{{$res->standard_price}}</td>
                <td>{{$res->length}}</td>
                <td>{{$res->width}}</td>
                <td>{{$res->height}}</td>
                <td>{{$res->weight}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      @endif
   </div>
</div>
<!---->
@endsection
