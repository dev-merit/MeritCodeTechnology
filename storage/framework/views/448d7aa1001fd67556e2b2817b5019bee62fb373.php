<section x-data="{ input: '', decoded: '' }">
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/binary-to-text.label')); ?></label>
        <textarea x-model="input" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/binary-to-text.placeholder')); ?>" rows="5"></textarea>
    </div>
    <button x-on:click="decoded = ''; let binCode = []; let tmp = input.split(' '); for(let i=0;i<tmp.length;i++) { binCode.push(String.fromCharCode(parseInt(tmp[i], 2))); }; decoded = binCode.join('');" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/binary-to-text.submit')); ?></button>
    
    <hr class="">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label class="custom-label"><?php echo e(trans('webtools/tools/binary-to-text.result-label')); ?></label>
                <div class="copy-textarea-btn">
                    <textarea x-text="decoded" type="email" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/binary-to-text.result-placeholder')); ?>" rows="5"></textarea>
                    <button x-on:click="window.writeClipboardText($event, decoded)" class="btn custom--btn button__md copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/binary-to-text/view.blade.php ENDPATH**/ ?>