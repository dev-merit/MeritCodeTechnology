<?php
    $state = $getFormattedState();

    $stateColor = match ($getStateColor()) {
        'danger' => \Illuminate\Support\Arr::toCssClasses(['text-danger-700 bg-danger-500/10', 'dark:text-danger-500' => config('tables.dark_mode')]),
        'primary' => \Illuminate\Support\Arr::toCssClasses(['text-primary-700 bg-primary-500/10', 'dark:text-primary-500' => config('tables.dark_mode')]),
        'success' => \Illuminate\Support\Arr::toCssClasses(['text-success-700 bg-success-500/10', 'dark:text-success-500' => config('tables.dark_mode')]),
        'warning' => \Illuminate\Support\Arr::toCssClasses(['text-warning-700 bg-warning-500/10', 'dark:text-warning-500' => config('tables.dark_mode')]),
        null, 'secondary' => \Illuminate\Support\Arr::toCssClasses(['text-gray-700 bg-gray-500/10', 'dark:text-gray-300 dark:bg-gray-500/20' => config('tables.dark_mode')]),
        default => $getStateColor(),
    };

    $stateIcon = $getStateIcon();
    $iconPosition = $getIconPosition();
    $iconClasses = 'w-4 h-4';
?>

<div <?php echo e($attributes->merge($getExtraAttributes())->class([
    'filament-tables-badge-column flex',
    'px-4 py-3' => ! $isInline(),
    match ($getAlignment()) {
        'start' => 'justify-start',
        'center' => 'justify-center',
        'end' => 'justify-end',
        'left' => 'justify-start rtl:flex-row-reverse',
        'center' => 'justify-center',
        'right' => 'justify-end rtl:flex-row-reverse',
        default => null,
    },
])); ?>>
    <?php if(filled($state)): ?>
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'inline-flex items-center justify-center space-x-1 rtl:space-x-reverse min-h-6 px-2 py-0.5 text-sm font-medium tracking-tight rounded-xl whitespace-nowrap',
            $stateColor => $stateColor,
        ]) ?>">
            <?php if($stateIcon && $iconPosition === 'before'): ?>
                <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $stateIcon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => $iconClasses]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
            <?php endif; ?>

            <span>
                <?php echo e($state); ?>

            </span>

            <?php if($stateIcon && $iconPosition === 'after'): ?>
                <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $stateIcon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => $iconClasses]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/vendor/filament/tables/src/../resources/views/columns/badge-column.blade.php ENDPATH**/ ?>