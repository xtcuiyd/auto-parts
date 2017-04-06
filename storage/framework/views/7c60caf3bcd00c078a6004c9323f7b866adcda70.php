<?php $__env->startSection('content'); ?>
<!---->
<div class="about" style="padding-top: 0;margin-bottom: 175px">
   <div class="container">
       <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Search Parts</li>             
          </ol>
        <?php if(Session::has('message')): ?>
           <div class="alert alert-danger"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>
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
                <?php echo captcha_img(); ?>

              </div>
            </div>
            <div class="form-group">
              <label for="input01"></label>
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
             <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </form>
        </div>
        <?php if($res): ?>
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
                <td><?php echo e($res->parts_num); ?></td>
                <td><?php echo e($res->name); ?></td>
                <td><?php echo e($res->standard_price); ?></td>
                <td><?php echo e($res->length); ?></td>
                <td><?php echo e($res->width); ?></td>
                <td><?php echo e($res->height); ?></td>
                <td><?php echo e($res->weight); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
   </div>
</div>
<!---->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>