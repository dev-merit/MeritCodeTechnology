<?php $__env->startPush('alpine-components'); ?>
    <script>
        window.bitflanTextReverserComponent = function() {
            return {
                converted: false,

                generate() {
                    let content = this.$refs.content.value;
                    
                    switch(this.$refs.case.value) {
                        case 'lower':
                            content = content.toLowerCase();
                            break;
                        case 'upper':
                            content = content.toUpperCase();
                            break;
                        case 'capitalize':
                            let split = content.split(/\s+/);
                            split = split.map(s => s[0].toUpperCase() + s.slice(1).toLowerCase());

                            content = split.join(' ');

                            break;

                        case 'camel':
                            content = content.replace(/(?:^\w|[A-Z]|\b\w)/g, function(word, index) {
                                return index === 0 ? word.toLowerCase() : word.toUpperCase();
                            }).replace(/\s+/g, '');
                            break;

                        case 'pascal':
                            content = content.replace(/(?:^\w|[A-Z]|\b\w)/g, function(word, index) {
                                return word.toUpperCase();
                            }).replace(/\s+/g, '');
                            break;
                    }

                    this.$refs.textarea.value = content;
                
                    this.converted = true;
                }
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<div x-data="window.bitflanTextReverserComponent()">
    <div class="form-group">
        <label class="form-label"><?php echo e(trans('webtools/tools/case-converter.case')); ?></label>
        <select x-ref="case" class="custom-input form-select">
            <option value="lower" selected><?php echo e(trans('webtools/tools/case-converter.lower')); ?></option>
            <option value="upper"><?php echo e(trans('webtools/tools/case-converter.upper')); ?></option>
            <option value="capitalize"><?php echo e(trans('webtools/tools/case-converter.capitalize')); ?></option>
            <option value="camel"><?php echo e(trans('webtools/tools/case-converter.camel')); ?></option>
            <option value="pascal"><?php echo e(trans('webtools/tools/case-converter.pascal')); ?></option>
        </select>
    </div>
    <div class="form-group">
        <textarea x-ref="content" name="" class="rounded custom-textarea" rows="5" placeholder="<?php echo e(trans('webtools/tools/case-converter.content')); ?>"></textarea>
    </div>

    <div class="form-group">
        <button x-on:click="generate()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/case-converter.submit')); ?></button>
    </div>

    <div class="form-group" x-cloak x-show="converted">
        <textarea id="textarea" class="custom-textarea rounded" cols="30" rows="5" x-ref="textarea"></textarea>
        <button x-on:click="window.writeClipboardText($event, $refs.textarea.value)" class="btn custom--btn button__md btn__dark">Copy</button>
    </div>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/case-converter/view.blade.php ENDPATH**/ ?>