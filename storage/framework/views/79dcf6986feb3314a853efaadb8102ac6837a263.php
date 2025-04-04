<form method="POST" wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">
    <div class="row">
        <?php if($this->success === true): ?>
            <div class="col-lg-12">
                <div class="alert alert-success bg-success input-alerts"><?php echo e(trans('contact.contact-sent')); ?></div>
            </div>
        <?php elseif($this->success === false): ?>
            <div class="col-lg-12">
                <div class="alert alert-danger input-alerts"><?php echo e(trans('contact.contact-error')); ?></div>
            </div>
        <?php endif; ?>

        <?php if(session('recaptcha-error') == true): ?>
            <div class="col-lg-12">
                <div class="alert alert-danger input-alerts"><?php echo e(trans('contact.recaptcha-required')); ?></div>
            </div>
        <?php endif; ?>

        <div class="col-lg-6">
            <div class="form-group">
                <input required wire:model.defer="name" class="custom-input" placeholder="<?php echo e(trans('contact.name')); ?>">
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
        <div class="col-lg-6">
            <div class="form-group">
                <input required wire:model.defer="email" type="email" class="custom-input" placeholder="<?php echo e(trans('contact.email')); ?>">
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

        <div class="col-12">
            <div class="form-group">
                <textarea required wire:model.defer="message" class="rounded custom-textarea rounded" placeholder="<?php echo e(trans('contact.message')); ?>" rows="9"></textarea>
                <?php $__errorArgs = ['message'];
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

        <?php if($recaptcha): ?>
            <div wire:ignore class="col-12 mb-3">
                <div class="g-recaptcha" data-sitekey="<?php echo e($siteKey); ?>"></div>
            </div>
        <?php endif; ?>

        <div class="col-12">
            <button wire:loading.attr="disabled" wire:loading.class="disabled" class="btn custom--btn button__lg"><?php echo e(trans('contact.submit')); ?></button>
        </div>
    </div>
</form><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/livewire/contact.blade.php ENDPATH**/ ?>