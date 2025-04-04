<?php $__env->startPush('alpine-components'); ?>
    <script>
        window.bitflanTextReverserComponent = function() {
            return {
                converted: false,
                palindrome: false,

                generate() {
                    let content = this.$refs.content.value;
                
                    this.palindrome = content.split("").reverse().join("") == content;
                    this.converted  = true;
                }
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<div x-data="window.bitflanTextReverserComponent()">
    <div class="form-group">
        <textarea x-ref="content" name="" class="rounded custom-textarea" rows="5" placeholder="<?php echo e(trans('webtools/tools/palindrome-checker.content')); ?>"></textarea>
    </div>

    <div class="form-group">
        <button @click="generate()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/palindrome-checker.submit')); ?></button>
    </div>

    <div class="form-group" x-cloak x-show="converted">
        <template x-if="palindrome">
            <div class="alert alert-success"><?php echo e(trans('webtools/tools/palindrome-checker.ispalindrome')); ?></div>
        </template>

        <template x-if="!palindrome">
            <div class="alert alert-danger"><?php echo e(trans('webtools/tools/palindrome-checker.notpalindrome')); ?></div>
        </template>
    </div>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/palindrome-checker/view.blade.php ENDPATH**/ ?>