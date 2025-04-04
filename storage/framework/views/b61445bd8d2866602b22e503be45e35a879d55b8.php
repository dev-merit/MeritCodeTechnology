<div>
    <?php if($this->status == 'error'): ?>
        <div class="alert alert-danger mb-2"><?php echo e(trans('webtools/tools/source-code-downloader.error')); ?></div>
    <?php endif; ?>

    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/source-code-downloader.label')); ?></label>
        <input type="text" wire:model.defer='url' class="custom-input" placeholder="<?php echo e(trans('webtools/tools/source-code-downloader.placeholder')); ?>" />
        <button wire:loading.class="disabled" wire:click='generate' class="btn custom--btn button__lg mt-2"><?php echo e(trans('webtools/tools/source-code-downloader.submit')); ?></button>
    </div>

    <div x-data class="form-group <?php if($this->code == ''): ?> d-none <?php endif; ?>">
        <textarea id="textarea" class="custom-textarea rounded" rows="10"><?php echo $this->code; ?></textarea>
        <button onclick="window.writeClipboardTextVanilla(this, document.getElementById('textarea').value)" class="btn custom--btn button__md copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
    </div>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/source-code-downloader/livewire.blade.php ENDPATH**/ ?>