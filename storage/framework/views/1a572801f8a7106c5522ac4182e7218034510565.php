

<?php $__env->startSection('content'); ?>

<div class="single-page-sec">
    <div class="single-page-icon"><svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.9194 3.55804C10.4466 1.02183 13.2431 0 16.443 0C19.6629 0 22.6963 1.26819 24.9723 3.56383C27.2447 5.85582 28.4977 8.91027 28.4977 12.1476C28.4977 15.3848 27.2447 18.4393 24.9723 20.7313L24.9696 20.734C24.8471 20.8569 24.7224 20.9768 24.5956 21.0938C25.1872 21.4312 25.7612 21.8073 26.3145 22.2217C27.3759 23.0172 27.6067 24.53 26.8147 25.605L26.8138 25.6062C26.0184 26.6834 24.5072 26.9132 23.4304 26.1117L23.4282 26.1101C21.3999 24.5939 18.9926 23.7949 16.4603 23.7949C13.5685 23.7949 10.7924 24.8651 8.63836 26.8138C6.50117 28.7487 5.14357 31.3897 4.81496 34.2518C4.67455 35.4838 3.63408 36.3988 2.41733 36.3988C2.32153 36.3988 2.23363 36.3918 2.19568 36.3887C2.192 36.3884 2.18879 36.3882 2.18608 36.388L2.16022 36.3859L2.13445 36.3829C0.80441 36.2255 -0.13707 35.0205 0.0163809 33.6958C0.475949 29.6842 2.00298 26.2798 5.40918 23.2058C6.26458 22.4338 7.45164 21.6891 8.38122 21.1537C8.21032 21.007 8.04931 20.8611 7.91712 20.7278C5.64473 18.4358 4.39179 15.3813 4.39179 12.1441C4.39179 8.93277 5.37156 6.11495 7.9194 3.55804ZM16.4465 4.84874C14.5155 4.84874 12.7077 5.60281 11.3426 6.97942C9.97582 8.36117 9.22452 10.1872 9.22452 12.1441C9.22452 14.102 9.97651 15.9309 11.3421 17.3082C12.6604 18.6379 14.2616 19.3535 16.1169 19.4336C18.1371 19.5192 20.1185 18.7442 21.548 17.3076C22.9141 15.9294 23.6684 14.1003 23.6684 12.1441C23.6684 10.185 22.9191 8.35698 21.5518 6.98092C20.1824 5.60267 18.3736 4.84874 16.4465 4.84874ZM27.1267 26.2872C27.1267 24.9579 28.1984 23.8611 29.5431 23.8611C30.8879 23.8611 31.9595 24.9579 31.9595 26.2872V27.9329H33.5802C34.9262 27.9329 35.9927 29.0295 36 30.352L36 30.3591C36 31.6884 34.9284 32.7852 33.5836 32.7852H31.9629V34.4309C31.9629 35.7603 30.8913 36.8571 29.5466 36.8571C28.2018 36.8571 27.1302 35.7603 27.1302 34.4309V32.7852H25.506C24.1613 32.7852 23.0897 31.6884 23.0897 30.3591C23.0897 29.0297 24.1613 27.9329 25.506 27.9329H27.1267V26.2872Z" fill="#4C3FF2"></path></svg></div>
    <h1 class="single-page-main-title">Register</h1>
    <p class="single-page-main-desc">Create a New Account</p>
    
    <?php if(session('recaptchaerror')): ?>
        <div class="alert alert-danger">Captcha verification is required.</div>
    <?php endif; ?>

    <div class="single-page-inner">
        <form method="POST" action="<?php echo e(route('register-store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label class="custom-label">Full Name</label>
                <div class="copy-textarea-btn">
                    <input type="text" name="name" required class="custom-input" placeholder="Your Full Name Here" />
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger input-alerts"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        
            <div class="form-group">
                <label class="custom-label">E-Mail</label>
                <div class="copy-textarea-btn">
                    <input type="email" name="email" required class="custom-input" placeholder="Your valid e-mail address" />
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger input-alerts"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="custom-label">Password</label>
                        <div class="copy-textarea-btn">
                            <input type="password" name="password" required class="custom-input" placeholder="Choose a Secure Password. Minimum 8 Characters." />
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger input-alerts"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label class="custom-label">Password Confirmation</label>
                        <div class="copy-textarea-btn">
                            <input type="password" name="password_confirmation" required class="custom-input" placeholder="Confirm your Password" />
                        </div>
                    </div>
                </div>
            </div>
        
            <?php if($recaptcha): ?>
                <div class="col-12">
                    <div class="g-recaptcha" data-sitekey="<?php echo e($generalSettings->recaptchaSiteKey); ?>"></div>
                </div>
            <?php endif; ?>
        
            <input type="hidden" name="submit" value="true" />

            <div class="d-flex justify-content-between align-items-center">
                <button class="btn custom--btn button__lg mt-2">
                    Submit
                </button>
                <div>
                    <a href="<?php echo e(route('social.login')); ?>" class="btn custom--btn bg-danger button__lg mt-2 px-3 me-2">
                        <i class="fab fa-google"></i>
                    </a>
        
                    <a href="<?php echo e(route('login')); ?>" class="btn custom--btn button__lg copy-btn btn__dark mt-2 ">
                        Already have an account?
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/auth/register.blade.php ENDPATH**/ ?>