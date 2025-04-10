<form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="url" class="custom-label"><?php echo e(trans('webtools/tools/redirect-checker.label')); ?></label>
        <input wire:model.defer="url" type="text" id="url" class="custom-input" placeholder="<?php echo e(trans('webtools/tools/redirect-checker.placeholder')); ?>">
    </div>

    <?php if($this->status === 'success'): ?>
        <div class="form-group">
            <div class="border-0 alert alert-success rounded bg-success d-flex align-items-center">
                <h5 class="m-0 d-inline-block text-light p-l-25 flex-grow-1 me-3 text-break"><?php echo e($this->result); ?></h5>
                <h5 class="float-end p-r-25 text-light flex-shrink-0"><a class="text-white text-underline" href="#" onclick="window.writeClipboardTextVanilla(this, '<?php echo e($this->result); ?>')"><?php echo e(trans('webtools/general.copy')); ?></a></h5>
            </div>
        </div>
    <?php elseif($this->status === 'failure'): ?>
        <div class="form-group">
            <div class="border-0 alert alert-danger rounded-pill bg-danger">
                <h5 class="m-0 d-inline-block text-light p-l-25 flex-grow-1 me-3"><?php echo e(trans('webtools/tools/redirect-checker.error')); ?></h5>
            </div>
        </div>
    <?php endif; ?>

    <button class="btn custom--btn button__lg" wire:loading.class="disabled" wire:loading.attr="disabled">
        <span wire:loading.class="d-none">
            <?php echo e(trans('webtools/tools/redirect-checker.submit')); ?>

        </span>

        <span wire:loading>
            <svg width="40" height="10" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                <circle fill="currentColor" cx="15" cy="15" r="15">
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
</form><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/redirect-checker/livewire.blade.php ENDPATH**/ ?>