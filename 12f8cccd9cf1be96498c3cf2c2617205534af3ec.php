<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/create_post.js')); ?>" defer="true"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<link href="<?php echo e(asset('css/create_post.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', "POST"); ?>;

<?php $__env->startSection('content'); ?>
<html>
    <body>
        <main>
         <!--   <nav>
              <div class="nome_sito">ReadBook</div>
              <ul class="nav_links">
                <li><a class= "active" href= "home.php">HOME</a></li>
                <li><a href= "create_post.php">POST</a></li>
                <li><a href= "search_people.php">FOLLOW</a></li>
                <li><a href= "logout.php">LOGOUT</a></li>
               </ul>
            </nav>-->

            <section id="ricerca">
            <form name='form_search'  method='post'>
             <?php echo csrf_field(); ?>
                    <input type='text' name='campo' id='autor' placeholder="Scrivi qui">
                    <select name = 'api'>
                        <option value='opzione1'>Fumetti</option>
                        <option value='opzione2'>Libri</option>
                    </select>
                    <input type='submit' name='cerca' value='Cerca' class="button">
                    <input id="route_do_search_content" type='hidden' name='route_do_search_content' value="<?php echo e(route('do_searchpost')); ?>">
                    <input id="route_do_create_post" type='hidden' name='route_do_create_post' value="<?php echo e(route('do_createpost')); ?>">
                </form>
                </section>
                <section id="risultati"></section>
                <section id="modal-view" class="hidden"></section>

</main>
</body>

</html>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app_auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\39389\Desktop\hmw2\resources\views/create_post.blade.php ENDPATH**/ ?>