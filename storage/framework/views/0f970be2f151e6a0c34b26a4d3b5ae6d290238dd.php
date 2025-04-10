<div x-data="{ timestamp: <?php echo e(time()); ?> }" x-init="setInterval(() => timestamp++, 1000)">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"><?php echo e(trans('webtools/tools/timestamp-converter.human-readable-time')); ?></th>
                    <th scope="col">Seconds</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1 minute</th>
                    <td>60 seconds</td>
                </tr>
                <tr>
                    <th scope="row">1 hour</th>
                    <td>3600 seconds</td>
                </tr>
                <tr>
                    <th scope="row">1 day</th>
                    <td>86400 seconds</td>
                </tr>
                <tr>
                    <th scope="row">1 week</th>
                    <td>604800 seconds</td>
                </tr>
                <tr>
                    <th scope="row">1 month </th>
                    <td>2629743 seconds</td>
                </tr>
                <tr>
                    <th scope="row">1 year</th>
                    <td>31556926 seconds</td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="form-group">
        <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.current-epoch-time')); ?> <span x-text="timestamp"><?php echo e(time()); ?></span></label>
    </div>
    <button @click="window.writeClipboardText($event, timestamp)" class="btn custom--btn button__lg btn__dark"><?php echo e(trans('webtools/general.copy')); ?></button>
    <hr>
    <div class="form-group">
        <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.convert-to-human-readable')); ?></label>
        <input min="0" max="2147483647" type="number" class="custom-input" value="<?php echo e(time()); ?>" wire:model.defer="timestamp">
    </div>
    <button x- class="btn custom--btn button__lg" wire:click="convertTimestamp"><?php echo e(trans('webtools/tools/timestamp-converter.submit')); ?></button>

    <?php if($this->convertedTimestamp): ?>
        <hr class="small-marg">
        <p><?php echo e($this->convertedTimestamp); ?></p>
    <?php endif; ?>

    <hr class="">

    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.convert-from-human-readable')); ?></label>
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <div class="form-group">
                <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.day')); ?></label>
                <input wire:model.defer="day" min="1" max="31" type="number" class="custom-input" value="<?php echo e(now()->day); ?>">
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <div class="form-group">
                <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.month')); ?></label>
                <input wire:model.defer="month" min="1" max="12" type="number" class="custom-input" value="<?php echo e(now()->month); ?>">
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <div class="form-group">
                <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.year')); ?></label>
                <input wire:model.defer="year" min="1" max="1000000" type="number" class="custom-input" value="<?php echo e(now()->year); ?>">
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <div class="form-group">
                <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.hour')); ?></label>
                <input wire:model.defer="hour" min="0" max="24" type="number" class="custom-input" value="<?php echo e(now()->hour); ?>">
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <div class="form-group">
                <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.minute')); ?></label>
                <input wire:model.defer="minute" min="0" max="60" type="number" class="custom-input" value="<?php echo e(now()->minute); ?>">
            </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-6">
            <div class="form-group">
                <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.second')); ?></label>
                <input wire:model.defer="second" min="0" max="60" type="number" class="custom-input" value="<?php echo e(now()->second); ?>">
            </div>
        </div>
    </div>
    <button class="btn custom--btn button__lg" wire:click="convertDate"><?php echo e(trans('webtools/tools/timestamp-converter.submit')); ?></button>

    <?php if($this->convertedDate): ?>
        <hr class="small-marg">
        <p><?php echo e(trans('webtools/tools/timestamp-converter.timestamp')); ?> <?php echo e($this->convertedDate); ?><br><?php echo e(date("M d, Y h:i:s A", $this->convertedDate)); ?></p>
    <?php endif; ?>

    <hr class="">
    <div class="form-group">
        <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.utc-formatted-date')); ?></label>
        <input wire:model.defer="formatted" type="text" class="custom-input" value="<?php echo e(now()->toFormattedDateString()); ?>">
    </div>
    <button wire:click='convertFormatted' class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/timestamp-converter.submit')); ?></button>

    <?php if($this->convertedFormatted): ?>
        <hr class="small-marg">
        <p><?php echo e(trans('webtools/tools/timestamp-converter.timestamp')); ?> <?php echo e($this->convertedFormatted); ?><br><?php echo e(date("M d, Y h:i:s A", $this->convertedFormatted)); ?></p>
    <?php endif; ?>

    <?php if($this->formattedError): ?>
        <div class="alert alert-danger input-alerts"><?php echo e(trans('webtools/tools/timestamp-converter.error-formatted')); ?></div>
    <?php endif; ?>

    <hr class="">
    <div class="form-group">
        <label for="" class="custom-label"><?php echo e(trans('webtools/tools/timestamp-converter.format-days-hours-minutes')); ?></label>
        <input wire:model.defer="seconds" type="text" class="custom-input" value="0">
    </div>
    <button class="btn custom--btn button__lg" wire:click="convertSeconds"><?php echo e(trans('webtools/tools/timestamp-converter.submit')); ?></button>

    <?php if($this->seconds): ?>
        <hr class="small-marg">
        <p><?php echo e(number_format($this->seconds / (86400 * 365), 2)); ?> year(s), <?php echo e(number_format($this->seconds / (86400 * 30), 2)); ?> month(s), <?php echo e(number_format($this->seconds / 86400, 2)); ?> day(s), <?php echo e(number_format($this->seconds / 3600, 2)); ?> hour(s), <?php echo e(number_format($this->seconds / 60, 2)); ?> minute(s).</p>
    <?php endif; ?>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/timestamp-converter/livewire.blade.php ENDPATH**/ ?>