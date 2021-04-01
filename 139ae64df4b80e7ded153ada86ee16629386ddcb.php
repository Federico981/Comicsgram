<?php $__env->startSection('title', "Registrazione"); ?>

<?php $__env->startSection('content'); ?>
<form class="login100-form validate-form flex-sb flex-w" action="<?php echo e(route('register')); ?>" method="post" name="signup" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>

					<span class="login100-form-title p-b-51">
						SignUp
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Nome is required">
						<input class="input100" type="text" name="name" placeholder="Nome">
						<span class="focus-input100"></span>
						<?php $__errorArgs = ["name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Cognome is required">
						<input class="input100" type="text" name="surname" placeholder="Cognome">
						<span class="focus-input100"></span>
						<?php $__errorArgs = ["surname"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username" verifyUsername="<?php echo e(route('controllaUtente')); ?>">
						<span class="focus-input100"></span>
						<?php $__errorArgs = ["username"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="date" name="birth" placeholder="Data di Nascita">
						<span class="focus-input100"></span>
						<?php $__errorArgs = ["birth"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<?php $__errorArgs = ["password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<?php echo e($message); ?>

						<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="Ripeti Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Nome is required">
						<input class="input100" type="file" name="photo" accept="images/*" placeholder="Scegli foto">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							SignUp
						</button>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" >
					<a href='<?php echo e(route("login")); ?>'>Login</a>
						</button>
					</div>

				</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/signup.js')); ?>" defer="true"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Desktop\compito_2\resources\views/auth/register.blade.php ENDPATH**/ ?>