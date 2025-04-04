<?php $__env->startPush('alpine-components'); ?>
    <script>
        window.bitflanDuplicateLinesRemoverComponent = function() {
            return {
                editor: null,

                init() {
                    this.editor = ace.edit(this.$refs.editor_input);
                    this.editor.setOption("showPrintMargin", false);
                    this.editor.setTheme("ace/theme/clouds");
                },

                convert() {
                    const val = this.editor.getValue();

                    const newLines = val.replace("\r", '').split("\n");

                    console.log(newLines);
                    
                    const lines = [...(new Set(newLines))];
                    let seen = {};
                    this.editor.setValue(lines.filter(function(item) {
                        return seen.hasOwnProperty(item) ? false : (seen[item] = true);
                    }).join("\n"));
                }
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<div x-data="window.bitflanDuplicateLinesRemoverComponent()">
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/duplicate-lines-remover.label')); ?></label>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="form-group position-relative">
                    <button @click="window.writeClipboardText($event, editor.getValue())" class="btn custom--btn button__md ace-copy-btn btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
                    <div x-ref="editor_input" id="editor"></div>
                </div>
            </div>
        </div>
    </div>
    <button x-on:click="convert()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/duplicate-lines-remover.submit')); ?></button>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/duplicate-lines-remover/view.blade.php ENDPATH**/ ?>