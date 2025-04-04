

<?php $__env->startSection('content'); ?>

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

<div class="single-page-sec">
    <div class="single-page-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="33.334" viewBox="0 0 30 33.334"><path id="Path_26" data-name="Path 26" d="M-4301.5-156a5,5,0,0,1-5-5v-23.333a5,5,0,0,1,5-5h13.333a11.667,11.667,0,0,1,11.667,11.667V-161a5,5,0,0,1-5,5Zm-1.667-28.333V-161a1.667,1.667,0,0,0,1.667,1.667h20a1.668,1.668,0,0,0,1.667-1.667v-16.667h-10V-186H-4301.5A1.666,1.666,0,0,0-4303.166-184.333ZM-4286.5-181h5.974a8.349,8.349,0,0,0-5.974-4.833Zm-14,19.333v-1.493h17.908v1.493Zm0-3.234v-1.492h17.908v1.492Zm1.493-3.233a1.492,1.492,0,0,1-1.493-1.493V-174.1a1.492,1.492,0,0,1,1.493-1.493h14.922a1.492,1.492,0,0,1,1.493,1.493v4.477a1.492,1.492,0,0,1-1.493,1.493Zm0-1.493h14.922V-174.1h-14.922Z" transform="translate(4306.5 189.334)" fill="#4c3ff2"/></svg></div>
    <h1 class="single-page-main-title"><?php echo e($page->title); ?></h1>
    <p class="single-page-main-desc"><?php echo e($page->description); ?></p>
    
    <div class="single-page-inner">
        <?php echo $page->content; ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/page.blade.php ENDPATH**/ ?>