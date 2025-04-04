<section>
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/csv-to-json.keys-label')); ?></label>
        <select wire:model.defer='keys' class="form-select custom-input">
            <option selected value="nokeys"><?php echo e(trans('webtools/tools/csv-to-json.keys-nokeys')); ?></otion>
            <option value="keys"><?php echo e(trans('webtools/tools/csv-to-json.keys-rows')); ?></option>
        </select>
    </div>
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/csv-to-json.label')); ?></label>
        <textarea wire:model.defer="csv" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/csv-to-json.placeholder')); ?>" rows="5"></textarea>
    </div>
    <button wire:click='submit' class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/csv-to-json.submit')); ?></button>
    
    <?php if($this->json && $this->code != 1): ?>
        <hr class="">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="" class="custom-label"><?php echo e(trans('webtools/tools/csv-to-json.result-label')); ?></label>
                    <div class="copy-textarea-btn">
                        <textarea id="csvArea" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/csv-to-json.result-placeholder')); ?>" rows="5"><?php echo $this->json; ?></textarea>
                        <button onclick="window.writeClipboardTextVanilla(this, document.getElementById('csvArea').value)" class="btn custom--btn button__md copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif($this->code == 1): ?>
        <hr class="">
        <div class="border-0 alert alert-danger rounded-pill bg-danger">
            <h5 class="m-0 d-inline-block text-light p-l-25 flex-grow-1 me-3 text-break"><?php echo e(trans('webtools/tools/csv-to-json.error-text')); ?></h5>
            <h5 class="float-end p-r-25 text-light flex-shrink-0"><?php echo e(trans('webtools/tools/csv-to-json.error')); ?></h5>
        </div>
    <?php endif; ?>
</section><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/csv-to-json/livewire.blade.php ENDPATH**/ ?>