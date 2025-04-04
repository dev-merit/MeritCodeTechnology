<?php $__env->startPush('alpine-components'); ?>
    <script>
        window.bitflanTextReplacerComponent = function() {
            return {
                number: '',
                month: '',
                year: '',
                cvv: '',
                validated: false,
                converted: false,

                update() {
                    this.converted = true;

                    this.validated = window.isValid(this.number) && window.isValidExp(this.month, this.year) && window.isValidCvv(this.number, this.cvv);
                }
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<div x-data="window.bitflanTextReplacerComponent()">
    <div class="form-group">
        <label class="custom-label"><?php echo e(trans('webtools/tools/credit-card-validator.number')); ?></label>
        <input type="number" x-model="number" class="rounded custom-textarea" placeholder="0000 0000 0000 0000" />
    </div>
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label class="custom-label"><?php echo e(trans('webtools/tools/credit-card-validator.month')); ?></label>
                        <input type="number" x-model="month" class="rounded custom-textarea" placeholder="10" />
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label class="custom-label"><?php echo e(trans('webtools/tools/credit-card-validator.year')); ?></label>
                        <input type="number" x-model="year" class="rounded custom-textarea" placeholder="24" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label class="custom-label"><?php echo e(trans('webtools/tools/credit-card-validator.cvv')); ?></label>
                <input type="number" x-model="cvv" class="rounded custom-textarea" placeholder="123" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <button x-on:click="update()" class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/credit-card-validator.submit')); ?></button>
    </div>

    <template x-if="converted">
        <div :class="`alert ${ validated ? 'alert-success' : 'alert-danger' }`" x-text="validated ? `<?php echo e(trans('webtools/tools/credit-card-validator.valid')); ?>` : `<?php echo e(trans('webtools/tools/credit-card-validator.invalid')); ?>`"></div>
    </template>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/credit-card-validator/view.blade.php ENDPATH**/ ?>