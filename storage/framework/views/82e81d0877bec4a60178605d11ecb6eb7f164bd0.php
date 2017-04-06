<div <?php echo $attributes; ?>>
    <div class="box-header with-border">
        <h3 class="box-title"><?php echo e($title); ?></h3>
        <div class="box-tools pull-right">
            <?php foreach($tools as $tool): ?>
                <?php echo $tool; ?>

                <?php endforeach; ?>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body" style="display: block;">
        <?php echo $content; ?>

    </div><!-- /.box-body -->
</div>