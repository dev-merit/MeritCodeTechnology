<div>
    <div class="mb-5 form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/http-headers-parser.label')); ?></label>
        <div class="copy-textarea-btn">
            <input type="text" wire:model.defer="url" class="custom-input" placeholder="<?php echo e(trans('webtools/tools/http-headers-parser.placeholder')); ?>" />
        </div>
        <button wire:loading.class="disabled" wire:click='submit' class="mt-2 btn custom--btn button__lg">
            <span wire:loading.class="d-none">
                <?php echo e(trans('webtools/tools/http-headers-parser.submit')); ?>

            </span>
    
            <span wire:loading>
                <svg width="40" height="10" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                    <circle cx="15" cy="15" r="15">
                        <animate attributeName="r" from="15" to="15"
                                 begin="0s" dur="0.8s"
                                 values="15;9;15" calcMode="linear"
                                 repeatCount="indefinite" />
                        <animate attributeName="fill-opacity" from="1" to="1"
                                 begin="0s" dur="0.8s"
                                 values="1;.5;1" calcMode="linear"
                                 repeatCount="indefinite" />
                    </circle>
                    <circle cx="60" cy="15" r="9" fill-opacity="0.3">
                        <animate attributeName="r" from="9" to="9"
                                 begin="0s" dur="0.8s"
                                 values="9;15;9" calcMode="linear"
                                 repeatCount="indefinite" />
                        <animate attributeName="fill-opacity" from="0.5" to="0.5"
                                 begin="0s" dur="0.8s"
                                 values=".5;1;.5" calcMode="linear"
                                 repeatCount="indefinite" />
                    </circle>
                    <circle cx="105" cy="15" r="15">
                        <animate attributeName="r" from="15" to="15"
                                 begin="0s" dur="0.8s"
                                 values="15;9;15" calcMode="linear"
                                 repeatCount="indefinite" />
                        <animate attributeName="fill-opacity" from="1" to="1"
                                 begin="0s" dur="0.8s"
                                 values="1;.5;1" calcMode="linear"
                                 repeatCount="indefinite" />
                    </circle>
                </svg>
            </span>
        </button>
    </div>

    <?php if($this->error == 0 && $this->headers != []): ?>
        <?php $__currentLoopData = $this->headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="px-3 py-2 mb-1 rounded d-flex justify-content-between align-items-center bg-light">
                <span class="w-25 d-inline-block"><?php echo e($header); ?></span>
                <span class="w-75 d-inline-block"><?php echo join('<br>', $value); ?></span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php elseif($this->error == 1): ?>
        <div class="alert alert-danger input-alerts"><?php echo e(trans('webtools/tools/http-headers-parser.error-text')); ?></div>
    <?php endif; ?>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/http-headers-parser/livewire.blade.php ENDPATH**/ ?>