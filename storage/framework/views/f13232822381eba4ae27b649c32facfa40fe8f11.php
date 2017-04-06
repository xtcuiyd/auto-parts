<input type="checkbox" class="grid-select-all" />&nbsp;

<div class="btn-group">
    <a class="btn btn-sm btn-default">  <?php echo e(trans('admin::lang.action')); ?></a>
    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <?php foreach($actions as $action): ?>
            <li><a href="#" class="grid-batch-<?php echo e($action['id']); ?>"><?php echo e($action['title']); ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>