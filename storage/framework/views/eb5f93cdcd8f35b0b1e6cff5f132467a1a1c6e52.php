<?php foreach($css as $c): ?>
    <link rel="stylesheet" href="<?php echo e(asset("$c")); ?>">
<?php endforeach; ?>