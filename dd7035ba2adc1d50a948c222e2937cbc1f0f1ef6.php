<?php $__env->startSection('title', "HOME"); ?>;

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('css/home.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src='<?php echo e(asset('js/home.js')); ?>' defer="true"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<html>
    <body>
        <main>


<form name='form_refresh' method="POST">
    <?php echo csrf_field(); ?>
    <input id="update_home" type='hidden' name='update_home' value="<?php echo e(route('update_home')); ?>">
    <input id="miPiace" type='hidden' name='miPiace' value="<?php echo e(route('miPiace')); ?>">
    <input id="add_like" type='hidden' name='add_like' value="<?php echo e(route('add_like')); ?>">
    <input id="remove_like" type='hidden' name='remove_like' value="<?php echo e(route('remove_like')); ?>">
    <input id="show_like" type='hidden' name='show_like' value="<?php echo e(route('show_like')); ?>">
</form>




<section class="result_view">
</section>

<section id="modal-view" class="hidden">
<div id="box"></div>
</section>

</main>
</body>

</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\Homework_due_STEINS_GATE\resources\views/home.blade.php ENDPATH**/ ?>