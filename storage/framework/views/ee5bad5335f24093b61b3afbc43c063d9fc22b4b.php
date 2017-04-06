<?php $__env->startSection('content'); ?>
<!---->
<div class="about" style="padding-top: 0;margin-bottom: 175px">
   <div class="container">
       <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Search Parts</li>             
          </ol>
        <form role="form">
          <div class="form-group">
            <label for="name">Manufacturer</label>
            <select class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name">Part Number</label>
            <input type="text" class="form-control" id="name" placeholder="please input the parts number" required="">
          </div>
          <div class="form-group">
            <!-- Text input-->
            <label for="input01">Captch</label>
            <div>
              <div class="col-sm-2 ">
              <input type="text" placeholder="captcha" name="captcha"class="form-control " required="">
              </div>
              <div class="col-sm-2 ">
              <?php echo captcha_img(); ?>

              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="input01"></label>
            <input type="hidden" name="_token" value="' . csrf_token() . '">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </form>
   </div>
</div>
<!---->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>