<?php if(Admin::user()->visible($item['roles'])): ?>
    <?php if(!isset($item['children'])): ?>
        <li>
            <a href="<?php echo e(Admin::url($item['uri'])); ?>"><i class="fa <?php echo e($item['icon']); ?>"></i>
                <span><?php echo e($item['title']); ?></span>
            </a>
        </li>
    <?php else: ?>
        <li class="treeview">
            <a href="#">
                <i class="fa <?php echo e($item['icon']); ?>"></i>
                <span><?php echo e($item['title']); ?></span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <?php foreach($item['children'] as $item): ?>
                    <?php echo $__env->make('admin::partials.menu', $item, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endif; ?>
<?php endif; ?>