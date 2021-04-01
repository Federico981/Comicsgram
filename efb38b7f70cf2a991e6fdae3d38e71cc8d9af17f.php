<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo $__env->yieldContent("title"); ?></title>

    <!-- Scripts -->
    <?php echo $__env->yieldContent('script'); ?>

    <!-- Styles -->

    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>
    <nav>
        <div class="nome_sito">Steins;Book</div>
        <ul class="nav_links">
          <li><a class= "active" href= '<?php echo e(route("home")); ?>'>HOME</a></li>
          <li><a href= '<?php echo e(route("create_post")); ?>'>POST</a></li>
          <li><a href= '<?php echo e(route("search_people")); ?>'>FOLLOW</a></li>
          <li> <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                           LOGOUT
                      </a>
                   <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                   </form> </li>
         </ul>
      </nav>
      <?php echo $__env->yieldContent('content'); ?>
</body>

</html>

<?php /**PATH C:\Users\Asus\Desktop\compito_2\resources\views/layouts/app_auth.blade.php ENDPATH**/ ?>