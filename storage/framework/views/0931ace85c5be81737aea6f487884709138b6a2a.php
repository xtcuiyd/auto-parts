<?php $__env->startSection('content'); ?>
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
         <li>
          <div class="biseller-column">
              <a href="#"><img src="<?php echo e(asset('assets/images/pic6.jpg')); ?>" alt=""/></a>
              <h4>Donec lacinia</h4>
              <p>Cras pulvinar iaculis ex. Nullam vitae justo vel sapien malesuada varius ac blandit egestas nec felis. Nunc pharetra. </p>
              <a class="more hvr-bounce-to-bottom" href="gallery.html">Read More..</a>
          </div>
        </li>
        <li>
          <div class="biseller-column">
              <a href="#"><img src="<?php echo e(asset('assets/images/pic5.jpg')); ?>" alt=""/></a>
              <h4>Donec lacinia</h4>
              <p>Cras pulvinar iaculis ex. Nullam vitae justo vel sapien malesuada varius ac blandit egestas nec felis. Nunc pharetra.</p>
              <a class="more hvr-bounce-to-bottom" href="gallery.html">Read More..</a>
          </div>
        </li>
        <li>
          <div class="biseller-column">
              <a href="#"><img src="<?php echo e(asset('assets/images/pic8.jpg')); ?>" alt=""/></a>
              <h4>Donec lacinia</h4>
              <p>Cras pulvinar iaculis ex. Nullam vitae justo vel sapien malesuada varius ac blandit egestas nec felis. Nunc pharetra.</p>
              <a class="more hvr-bounce-to-bottom" href="gallery.html">Read More..</a>
          </div>
        </li>
        <li>
          <div class="biseller-column">
              <a href="#"><img src="<?php echo e(asset('assets/images/pic4.jpg')); ?>" alt=""/></a>
              <h4>Donec lacinia</h4>
              <p>Cras pulvinar iaculis ex. Nullam vitae justo vel sapien malesuada varius ac blandit  egestas nec felis. Nunc pharetra.</p>
              <a class="more hvr-bounce-to-bottom" href="gallery.html">Read More..</a>
          </div>
        </li>
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
         <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.flexisel.js')); ?>"></script>      
   </div>
</div>
<!---->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>