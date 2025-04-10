<div x-data="window.bitflanToolQrReadComponent()">
    <div class="form-group">
        <label for="" class="custom-label"><?php echo e(trans('webtools/tools/qr-code-reader.label')); ?></label>
        <input x-ref="fileInput" type="file" class="form-control">
    </div>
    <button @click="read()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/qr-code-reader.submit')); ?></button>
    <hr class="">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="" class="custom-label"><?php echo e(trans('webtools/tools/qr-code-reader.result-label')); ?></label>
                <div class="copy-textarea-btn">
                    <textarea :value="data" type="email" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/qr-code-reader.result-placeholder')); ?>" rows="5"></textarea>
                    <button @click="window.writeClipboardText($event, data)" class="btn custom--btn button__md copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('alpine-components'); ?>
<script type="text/javascript">
    window.bitflanToolQrReadComponent = function() {
        return {
            data: '',

            read() {
                if(this.$refs.fileInput.files[0]) {
                    const image = this.$refs.fileInput.files[0];

                    QrScanner.scanImage(image)
                    .then(result => this.data = result)
                    .catch(error => this.data = 'No QR Code Found.');
                }
            }
        }
    };
</script>
<?php $__env->stopPush(); ?><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/qr-code-reader/view.blade.php ENDPATH**/ ?>