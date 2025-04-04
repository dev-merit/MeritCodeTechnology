<?php $__env->startPush('alpine-components'); ?>
    <script>
        window.randomizerTool = function() {
            return {
                content: '',

                randomize() {
                    let lines = this.content.split('\n');
                    lines = this.shuffle(lines);
                    this.content = lines.join('\n');
                },

                shuffle(array) {
                    for (var i = array.length - 1; i > 0; i--) {
                        var j = Math.floor(Math.random() * (i + 1));
                        var temp = array[i];
                        array[i] = array[j];
                        array[j] = temp;
                    }

                    return array;
                }
            }
        };
    </script>
<?php $__env->stopPush(); ?>

<div x-data="window.randomizerTool()">
    <div class="form-group">
        <label for="randomLines" class="custom-label"><?php echo e(trans('webtoolstools/random-text-line.label')); ?></label>
        <textarea x-model="content" type="text" name="randomLines" id="randomLines" class="custom-textarea" placeholder="<?php echo e(trans('webtoolstools/random-text-line.placeholder')); ?>" rows="5" required></textarea>
        <input type="hidden" name="submit" value="true">
    </div>
    <div class="btn custom--btn button__lg" x-on:click="randomize()"><?php echo e(trans('webtoolstools/random-text-line.submit')); ?></div>
    <button class="btn custom--btn button__lg bg-dark" x-on:click="window.writeClipboardText($event, content)"><?php echo e(trans('webtoolstools/random-text-line.copy')); ?></button>
</div>
<?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/random-text-line/view.blade.php ENDPATH**/ ?>