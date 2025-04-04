<div x-data="window.bitflanFormattersComponent('js')">
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/css-formatter.label')); ?></label>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="form-group position-relative">
                    <button @click="window.writeClipboardText($event, editor.getValue())" class="btn custom--btn button__md ace-copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                    <div x-ref="editor" id="editor"></div>
                </div>
            </div>
        </div>
    </div>
    <button x-on:click="formatCss()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/css-formatter.submit')); ?></button>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/css-formatter/view.blade.php ENDPATH**/ ?>