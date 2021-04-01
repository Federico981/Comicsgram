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
    <script src="<?php echo e(asset('js/login.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/signup.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>
</head>


<body>




<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
          <?php echo $__env->yieldContent('content'); ?> <!-- abbiamo scelto un nome a caso che indica il contenuto principale della pagina-->

            </div>
		</div>
	</div>

</body>
</html>




<!-- <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                      </a>

                   <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                   </form> -->
<?php /**PATH C:\Users\Asus\Desktop\Homework_due_STEINS_GATE\resources\views/layouts/app.blade.php ENDPATH**/ ?>