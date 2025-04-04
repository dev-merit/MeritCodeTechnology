<?php $__env->startPush('alpine-components'); ?>
    <script>
        window.bitflanHtaccessComponent = function() {
            return {
                from: '',
                to: '',
                htaccess: '',

                init() {
                    this.editor = ace.edit(this.$refs.editor);
                    this.editor.setOption("showPrintMargin", false);
                },

                submit() {
                    this.htaccess = `<IfModule mod_rewrite.c>
RewriteEngine On
Redirect 301 ${this.from} ${this.to}
</IfModule>`;

                    this.editor.session.setValue(this.htaccess.trim());
                }
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<div x-data="window.bitflanHtaccessComponent()">
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/htaccess-redirect-generator.from')); ?></label>
        <input x-model="from" type="text" class="custom-input" placeholder="<?php echo e(trans('webtools/tools/htaccess-redirect-generator.from_holder')); ?>" / >
    </div>

    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/htaccess-redirect-generator.to')); ?></label>
        <input x-model="to" type="text" class="custom-input" placeholder="<?php echo e(trans('webtools/tools/htaccess-redirect-generator.to_holder')); ?>" / >
    </div>

    <button x-on:click="submit()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/htaccess-redirect-generator.submit')); ?></button>

    <div class="row mt-3" x-cloak x-show="htaccess">
        <div class="col-12">
            <div class="form-group">
                <div class="form-group position-relative">
                    <button @click="window.writeClipboardText($event, editor.getValue())" class="btn custom--btn button__md ace-copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                    <div x-ref="editor" id="editor"></div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/htaccess-redirect-generator/view.blade.php ENDPATH**/ ?>