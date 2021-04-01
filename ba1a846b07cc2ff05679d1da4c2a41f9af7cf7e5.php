<?php $__env->startSection('title', "HOME"); ?>;

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('css/home.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript"> const ADD_LIKE= "<?php echo e(route('update_home.add_like')); ?>"</script>
<script type="text/javascript"> const REMOVE_LIKE= "<?php echo e(route('update_home.remove_like')); ?>"</script>
<script type="text/javascript"> const SHOW_LIKE= "<?php echo e(route('show_like')); ?>"</script>

    <script src='<?php echo e(asset('js/home.js')); ?>' defer="true"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<html>
    <body>
        <main>


<form name='form_refresh' refresh="<?php echo e(('refreshPost')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input id="refreshPost" type='hidden' name='refreshPost' value="<?php echo e(route('refreshPost')); ?>">
    <input id="route_update_home" type='hidden' name='route_update_home' value="<?php echo e(route('update_home')); ?>">

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

<?php echo $__env->make('layouts.app_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\39389\Desktop\hmw2\resources\views/home.blade.php ENDPATH**/ ?>