<div class="form-inline pull-right">
    <form action="<?php echo $action; ?>" method="get" pjax-container>
        <fieldset>

            <?php foreach($filters as $filter): ?>
                <?php echo $filter->render(); ?>

            <?php endforeach; ?>

            <div class="btn-group btn-group-sm">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                <a href="<?php echo $action; ?>" class="btn btn-warning" ><i class="fa fa-undo"></i></a>
            </div>

        </fieldset>
    </form>
</div>
