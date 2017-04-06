<script data-exec-on-popstate>

    $(function () {
        <?php foreach($script as $s): ?>
            <?php echo $s; ?>

        <?php endforeach; ?>
    });
</script>