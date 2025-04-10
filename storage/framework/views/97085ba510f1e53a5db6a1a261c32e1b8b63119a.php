<?php $__env->startPush('alpine-components'); ?>
    <script>
        window.bitflanPunyComponent = function() {
            return {
                converted: false,

                generate() {
                    let content = this.$refs.content.value;
                    
                    this.$refs.textarea.value = window.decodePuny(content);
                
                    this.converted = true;
                }
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<div x-data="window.bitflanPunyComponent()">
    <div class="form-group">
        <textarea x-ref="content" name="" class="rounded custom-textarea" rows="5" placeholder="<?php echo e(trans('webtools/tools/punycode-to-unicode.content')); ?>"></textarea>
    </div>

    <div class="form-group">
        <button x-on:click="generate()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/punycode-to-unicode.submit')); ?></button>
    </div>

    <div class="form-group" x-cloak x-show="converted">
        <textarea id="textarea" class="custom-textarea rounded" cols="30" rows="5" x-ref="textarea"></textarea>
        <button x-on:click="window.writeClipboardText($event, $refs.textarea.value)" class="btn custom--btn button__md btn__dark">Copy</button>
    </div>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/punycode-to-unicode/view.blade.php ENDPATH**/ ?>