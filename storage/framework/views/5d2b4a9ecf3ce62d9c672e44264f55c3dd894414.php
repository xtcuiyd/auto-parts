<?php if(is_array($errorKey)): ?>
    <?php foreach($errorKey as $key => $col): ?>
        <?php if($errors->has($col.$key)): ?>
            <?php foreach($errors->get($col.$key) as $message): ?>
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo e($message); ?></label><br/>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php else: ?>
    <?php if($errors->has($errorKey)): ?>
        <?php foreach($errors->get($errorKey) as $message): ?>
            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> <?php echo e($message); ?></label><br/>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>