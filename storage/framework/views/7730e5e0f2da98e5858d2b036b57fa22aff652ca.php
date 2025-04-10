<section>
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/json-to-csv.label')); ?></label>
        <textarea wire:model.defer="json" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/json-to-csv.placeholder')); ?>" rows="5"></textarea>
    </div>
    <button wire:click='submit' class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/json-to-csv.submit')); ?></button>
    
    <?php if($this->csv && $this->code != 1): ?>
        <hr class="">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="" class="custom-label"><?php echo e(trans('webtools/tools/json-to-csv.result-label')); ?></label>
                    <div class="copy-textarea-btn">
                        <textarea id="csvArea" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/json-to-csv.result-placeholder')); ?>" rows="5"><?php echo e($this->csv); ?></textarea>
                        <button onclick="window.writeClipboardTextVanilla(this, document.getElementById('csvArea').value)" class="btn custom--btn button__md copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif($this->code == 1): ?>
        <hr class="">
        <div class="border-0 alert alert-danger rounded-pill bg-danger">
            <h5 class="m-0 d-inline-block text-light p-l-25 flex-grow-1 me-3 text-break"><?php echo e(trans('webtools/tools/json-to-csv.error-text')); ?></h5>
            <h5 class="float-end p-r-25 text-light flex-shrink-0"><?php echo e(trans('webtools/tools/json-to-csv.error')); ?></h5>
        </div>
    <?php endif; ?>
</section><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/json-to-csv/livewire.blade.php ENDPATH**/ ?>