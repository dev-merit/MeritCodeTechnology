<?php $__env->startSection('content'); ?>

<div class="hero-section">
    <h2><?php echo e(trans('webtools/homepage.title')); ?></h2>
    <h1><?php echo e(trans('webtools/homepage.heading')); ?></h1>
</div>

<?php echo $__env->make("modules.tools.search-base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="single-page-sec">
    <?php echo $__env->make( $tool['templates']['header'], [
        'tool' => $tool['name']
    ] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ads.top-banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ads.top-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <div class="single-page-inner">

        <form>

            <div class="form-group">
                <label for="height" class="custom-label"><?php echo e(trans('webtools/tools/bmi-calculator.label_height')); ?></label>
                <div class="d-flex">
                    <input type="number" name="height" id="height" class="custom-input w-100" value="<?php echo e(request()->input('height')); ?>" required>
                    <select class="form-select custom-input w-auto pe-5 ms-3" name="heightUnit">
                        <option value="centimeter"><?php echo e(trans('webtools/tools/bmi-calculator.opt_centimeter')); ?></option>
                        <option value="inch"><?php echo e(trans('webtools/tools/bmi-calculator.opt_inch')); ?></option>
                        <option value="foot" selected=""><?php echo e(trans('webtools/tools/bmi-calculator.opt_foot')); ?></option>
                        <option value="meter"><?php echo e(trans('webtools/tools/bmi-calculator.opt_meter')); ?></option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="weight" class="custom-label"><?php echo e(trans('webtools/tools/bmi-calculator.label_weight')); ?></label>
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <input type="number" name="weight" id="weight" class="custom-input w-100" value="<?php echo e(request()->input('weight')); ?>" required>
                    </div>
                    <select class="form-select custom-input w-auto pe-5 ms-3" name="weightUnit">
                        <option value="kilogram" selected=""><?php echo e(trans('webtools/tools/bmi-calculator.opt_kilogram')); ?></option>
                        <option value="pound"><?php echo e(trans('webtools/tools/bmi-calculator.opt_pound')); ?></option>
                    </select>
                </div>
            </div>

            <input type="hidden" name="submit" value="true">
            <button class="btn custom--btn button__lg"><?php echo e(trans('webtools/tools/bmi-calculator.submit')); ?></button>
            <?php if(request()->input('submit')): ?>
                <?php if($error == true): ?>
                    <div class="alert alert-danger rounded-pill mt-3 p-l-25 p-r-25 bg-danger border-0"><h5 class="m-0 text-light"><?php echo e(trans('webtools/tools/bmi-calculator.msg_required')); ?></h5></div>
                <?php endif; ?>
                <?php if($m_number == true): ?>
                    <div class="alert alert-success rounded-pill mt-3 p-l-25 p-r-25 bg-success border-0"><h5 class="m-0 text-light"><?php echo e(trans('webtools/tools/bmi-calculator.msg_only_number')); ?></h5></div>
                <?php endif; ?>

                <?php if($error != true && $m_number != true): ?>
                    <?php if($BMIIndex < 18.5): ?>
                        <div class="alert alert-warning rounded-pill mt-3 p-l-25 p-r-25 bg-warning border-0"><h5 class="m-0 text-light fs-4"><?php echo e(trans('webtools/tools/bmi-calculator.ur_bmi_is')); ?> <?php echo e($BMIIndex); ?> <?php echo e(trans('webtools/tools/bmi-calculator.and_u_r')); ?> <?php echo e(trans('webtools/tools/bmi-calculator.msg_under_weight')); ?></h5></div>
                            <?php elseif($BMIIndex <= 24.9): ?>
                                <div class="alert alert-success rounded-pill mt-3 p-l-25 p-r-25 bg-success border-0"><h5 class="m-0 text-light fs-4"><?php echo e(trans('webtools/tools/bmi-calculator.ur_bmi_is')); ?> <?php echo e($BMIIndex); ?> <?php echo e(trans('webtools/tools/bmi-calculator.and_u_r')); ?> <?php echo e(trans('webtools/tools/bmi-calculator.msg_normal')); ?></h5></div>
                            <?php elseif($BMIIndex <= 29.9): ?>
                                <div class="alert alert-primary rounded-pill mt-3 p-l-25 p-r-25 bg-primary border-0"><h5 class="m-0 text-light fs-4"><?php echo e(trans('webtools/tools/bmi-calculator.ur_bmi_is')); ?> <?php echo e($BMIIndex); ?> <?php echo e(trans('webtools/tools/bmi-calculator.and_u_r')); ?> <?php echo e(trans('webtools/tools/bmi-calculator.msg_over_weight')); ?></h5></div>
                            <?php else: ?>
                                <div class="alert alert-info rounded-pill mt-3 p-l-25 p-r-25 bg-info border-0"><h5 class="m-0 text-dark fs-4"><?php echo e(trans('webtools/tools/bmi-calculator.ur_bmi_is')); ?> <?php echo e($BMIIndex); ?> <?php echo e(trans('webtools/tools/bmi-calculator.and_u_r')); ?> <?php echo e(trans('webtools/tools/bmi-calculator.msg_obese')); ?></h5></div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        </form>

        <hr class="small-marg">
        <h2><?php echo e(trans('webtools/tools/bmi-calculator.bmi_cat_title')); ?></h2>
        <p>
            <?php echo e(trans('webtools/tools/bmi-calculator.msg_under_weight')); ?> = < 18.5 <br>
            <?php echo e(trans('webtools/tools/bmi-calculator.msg_normal')); ?> = 18.5–24.9 <br>
            <?php echo e(trans('webtools/tools/bmi-calculator.msg_over_weight')); ?> = 25–29.9 <br>
            <?php echo e(trans('webtools/tools/bmi-calculator.msg_obese')); ?> = <?php echo e(trans('webtools/tools/bmi-calculator.bmi_greater')); ?>

        </p>
    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ads.middle-banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ads.middle-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<div class="content-sec">
    <div class="content-sec-inner">
        <div class="content-title-sec">
            <div class="content-title-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                    <path id="chart-relationship" d="M29.25,6.75a4.5,4.5,0,0,0-4.34,3.375H20.171A8.995,8.995,0,1,0,10.125,20.171V24.91a4.5,4.5,0,1,0,2.25,0V20.173A8.945,8.945,0,0,0,16.76,18.35l4.128,4.129a4.447,4.447,0,0,0-.638,2.271,4.5,4.5,0,1,0,4.5-4.5,4.446,4.446,0,0,0-2.271.638L18.35,16.759a8.944,8.944,0,0,0,1.823-4.384H24.91A4.492,4.492,0,1,0,29.25,6.75Z" transform="translate(-2.251 -2.251)" fill="#fff"/>
                </svg>
            </div>
            <h3><?php echo e(trans('webtools/general.related')); ?></h3>
        </div>
        <div class="content-cats-sec">
            <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toolKey => $relatedTool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($relatedTool['name'] != $tool['name']): ?>
                    <?php if($toolOptions['tool-' . $relatedTool['name'] . '.' . 'enabled'][0]->payload != 'false'): ?>
                        <div class="content-cats-col">
                            <a href="<?php echo e(!can_use($toolKey) ? route('pricing') : route('tool', $toolSlugs->{$toolKey})); ?>" class="content-cats-inner <?php echo e(!can_use($toolKey) ? 'locked' : ''); ?>">
                                <?php echo $__env->make($relatedTool['templates']['selector'], [
                                    'tool'    => $relatedTool['name'],
                                    'title'   => get_tool_title($relatedTool['name'], str_replace('"', '', $toolOptions['tool-' . $relatedTool['name'] . '.' . 'title'][0]->payload)),
                                    'summary' => get_tool_summary($relatedTool['name'], str_replace('"', '', $toolOptions['tool-' . $relatedTool['name'] . '.' . 'summary'][0]->payload)),
                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ads.bottom-banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ads.bottom-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/bmi-calculator/view.blade.php ENDPATH**/ ?>