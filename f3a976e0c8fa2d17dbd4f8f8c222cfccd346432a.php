<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo $__env->yieldContent("title"); ?></title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
 <link href="<?php echo e(asset('css/home.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>
</head>
<?php /**PATH C:\Users\Asus\Desktop\compito_2\resources\views/layouts/head.blade.php ENDPATH**/ ?>