<div x-data="window.bitflanToolBase64Component()">
    <div class="form-group">
        <label for="" class="custom-label"><?php echo e(trans('webtools/tools/text-to-base64.label')); ?></label>
        <textarea x-model="content" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/text-to-base64.placeholder')); ?>" rows="5"></textarea>
    </div>
    <button @click="convert()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/text-to-base64.submit')); ?></button>
    <hr class="">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="" class="custom-label"><?php echo e(trans('webtools/tools/text-to-base64.result-label')); ?></label>
                <div class="copy-textarea-btn">
                    <textarea :value="ib64" type="email" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/text-to-base64.result-placeholder')); ?>" rows="5"></textarea>
                    <button @click="window.writeClipboardText($event, ib64)" class="btn custom--btn button__md copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('alpine-components'); ?>
<script type="text/javascript">
    window.bitflanToolBase64Component = function() {
        return {
            content: '',
            ib64: '',

            convert() {
                this.ib64 = btoa(this.content)
            }
        }
    };
</script>
<?php $__env->stopPush(); ?><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/text-to-base64/view.blade.php ENDPATH**/ ?>