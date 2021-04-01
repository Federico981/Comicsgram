<?php $__env->startSection('script'); ?>


<script type="text/javascript"> const UPDATE= "<?php echo e(route('search_people')); ?>"</script>
<script type="text/javascript"> const FOLLOW= "<?php echo e(route('search_people.follow')); ?>"</script>
<script type="text/javascript"> const UNFOLLOW= "<?php echo e(route('search_people.unfollow')); ?>"</script>


<script src="<?php echo e(asset('js/search_people.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<link href="<?php echo e(asset('css/search_people.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', "RICERCA UTENTI"); ?>;

<?php $__env->startSection('content'); ?>
    <body>

                <div id="libreriaContainer">
                <!-- sezione di ricerca -->
                    <div id="searchBox" >
                    <form name ='search-form' action = "<?php echo e(route('search_people.do_search')); ?>">
                     <?php echo csrf_field(); ?>
                    <input type="text"  id="searchtext" placeholder="Scrivi qui">
                    <input type="submit" value='Cerca' id="btntext">
                    </form>
                    </div>

                    <section>
                <div class='grid'>
                </div>
                    </section>
            </div>

</body>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\39389\Desktop\hmw2\resources\views/search_people.blade.php ENDPATH**/ ?>