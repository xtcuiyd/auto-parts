<div class="box">
    <div class="box-header">

        <h3 class="box-title"></h3>

        <div class="pull-right">
            <?php echo $grid->renderFilter(); ?>

            <?php echo $grid->renderExportButton(); ?>

            <?php echo $grid->renderCreateButton(); ?>

        </div>

        <span>
            <?php echo $grid->renderHeaderTools(); ?>

        </span>

    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tr>
                <?php foreach($grid->columns() as $column): ?>
                <th><?php echo e($column->getLabel()); ?><?php echo $column->sorter(); ?></th>
                <?php endforeach; ?>
            </tr>

            <?php foreach($grid->rows() as $row): ?>
            <tr <?php echo $row->getHtmlAttributes(); ?>>
                <?php foreach($grid->columnNames as $name): ?>
                <td><?php echo $row->column($name); ?></td>
                <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="box-footer clearfix">
        <?php echo $grid->paginator(); ?>

    </div>
    <!-- /.box-body -->
</div>
