<?php $__env->startPush('alpine-components'); ?>
    <script>
        window.bitflanTextReplacerComponent = function() {
            return {
                converted: false,

                generate() {
                    try {
                        let content = this.$refs.content.value;
                        let url = new URL(content);

                        this.$refs.textarea.value = [
                            'Host  : ' + url.host,
                            'Href  : ' + url.href,
                            'Path  : ' + url.pathname,
                            'Query : ' + url.search,
                            'Hash  : ' + url.hash
                        ].join('\n');
                
                        this.converted = true;
                    } catch(e) {
                        alert('Please enter a valid URL.');
                    }
                }
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<div x-data="window.bitflanTextReplacerComponent()">
    <div class="form-group">
        <input type="text" x-ref="content" class="rounded custom-textarea" placeholder="<?php echo e(trans('webtools/tools/url-parser.content')); ?>" />
    </div>

    <div class="form-group">
        <button x-on:click="generate()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/url-parser.submit')); ?></button>
    </div>

    <div class="form-group" x-cloak x-show="converted">
        <textarea id="textarea" class="custom-textarea rounded" cols="30" rows="5" x-ref="textarea"></textarea>
        <button x-on:click="window.writeClipboardText($event, $refs.textarea.value)" class="btn custom--btn button__md btn__dark">Copy</button>
    </div>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/url-parser/view.blade.php ENDPATH**/ ?>