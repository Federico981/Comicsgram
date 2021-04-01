<?php $__env->startSection('title', "Login"); ?>


<?php $__env->startSection('content'); ?>
<form class="login100-form validate-form flex-sb flex-w" action='<?php echo e(route("login")); ?>' method="POST" name="signin">
				<?php echo csrf_field(); ?>
					<span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							<a href='<?php echo e(route("register")); ?>'>SignUp</a>
						</button>
					</div>

				</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\39389\Desktop\hmw2\resources\views/auth/login.blade.php ENDPATH**/ ?>