<div>
    <?php if($this->status == 'error'): ?>
        <div class="alert alert-danger mb-2"><?php echo e(trans('webtools/tools/rot13-encoder.error')); ?></div>
    <?php endif; ?>

    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/rot13-encoder.label')); ?></label>
        <textarea rows="4" type="text" wire:model.defer='content' class="custom-textarea rounded" placeholder="<?php echo e(trans('webtools/tools/rot13-encoder.placeholder')); ?>"></textarea>
    </div>

    <div class="form-group">
        <button wire:loading.class="disabled" wire:click='generate' class="btn custom--btn button__lg mt-2 mb-2"><?php echo e(trans('webtools/tools/rot13-encoder.submit')); ?></button>
    </div>

    <div x-data class="form-group <?php if($this->converted == ''): ?> d-none <?php endif; ?>">
        <textarea rows="4" id="textarea" class="custom-textarea rounded" rows="10"><?php echo $this->converted; ?></textarea>
        <button onclick="window.writeClipboardTextVanilla(this, document.getElementById('textarea').value)" class="btn custom--btn button__md copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
    </div>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/rot13-encoder/livewire.blade.php ENDPATH**/ ?>