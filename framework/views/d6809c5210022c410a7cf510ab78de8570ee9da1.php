<!DOCTYPE html>
<html lang="en">
<!-- memanggil semua yang dipisah(foter dll) -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maha ID</title>
    <link rel="stylesheet" type="text/css" href="profil.css">
</head>

<body>

    <?php echo $__env->make('template.switch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">

        <?php echo $__env->make('template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('template.midbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('template.sidebar-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('template.sidebar-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>

</html><?php /**PATH C:\Users\ASUS\Downloads\laravel5\laravel5\resources\views/template/layout.blade.php ENDPATH**/ ?>