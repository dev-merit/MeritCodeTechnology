<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="" class="custom-label"><?php echo e(trans('webtools/tools/user-agent-finder.label')); ?></label>
            <div class="copy-textarea-btn">
                <textarea type="email" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/user-agent-finder.placeholder')); ?>" rows="5"><?php echo e($this->agent); ?></textarea>
                <button class="btn custom--btn button__md copy-btn btn__dark" onclick="window.writeClipboardTextVanilla(this, '<?php echo e($this->agent); ?>')"><?php echo e(trans('webtools/general.copy')); ?></button>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/user-agent-finder/livewire.blade.php ENDPATH**/ ?>