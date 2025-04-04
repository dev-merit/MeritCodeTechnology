<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'forms::components.field-wrapper.index','data' => ['id' => $getId(),'label' => $getLabel(),'labelSrOnly' => $isLabelHidden(),'helperText' => $getHelperText(),'hint' => $getHint(),'hintIcon' => $getHintIcon(),'required' => $isRequired(),'statePath' => $getStatePath()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms::field-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getId()),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getLabel()),'label-sr-only' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isLabelHidden()),'helper-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getHelperText()),'hint' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getHint()),'hint-icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getHintIcon()),'required' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isRequired()),'state-path' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($getStatePath())]); ?>
    <div x-data="{ state: 'yes' }">
        <div class="flex items-start px-3 py-2 space-x-2 text-sm text-green-600 rounded shadow backdrop-blur-xl backdrop-saturate-150 rtl:space-x-reverse ring-1 bg-green-50/50 ring-green-400">Press the button to generate a Symlink.</div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/filament/tools/symlinkAlert.blade.php ENDPATH**/ ?>