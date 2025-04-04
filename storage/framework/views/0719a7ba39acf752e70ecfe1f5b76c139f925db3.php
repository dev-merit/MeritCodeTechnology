<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.page','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="mb-4 p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
        role="alert">
        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Note</span>
        <span class="font-semibold mr-2 text-left flex-auto leading-5">If <strong>Language Settings > Translate Tool Titles & Description</strong> is turned on, then the titles and descriptions specified in the translation files will be used instead of these settings.</span>
    </div>
    

    <?php $__currentLoopData = $this->allTools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="pb-4">
            <div>
                <h3 class="text-lg font-bold"><?php echo e($category['admin']['title']); ?></h3>
            </div>
    
            <div class="grid grid-cols-4 gap-4 mt-3">
                <?php $__currentLoopData = $category['tools']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-2 space-y-2 bg-white shadow rounded-xl">
                        <div class="px-4 py-2">
                            <div class="flex flex-col gap-4 xl:flex-row xl:items-center xl:justify-between">
                                <h2 class="text-xl font-semibold tracking-tight filament-card-heading">
                                    <?php echo e($tool['admin']['title']); ?>

                                </h2>
    
                            </div>
                        </div>
    
                        <div aria-hidden="true" class="border-t filament-hr"></div>
    
                        <div class="space-y-2">
                            <div class="px-4 py-2 space-y-4">
                                <div class="space-y-6">
                                    <p>
                                        <?php echo e($tool['admin']['summary']); ?>

                                    </p>
    
                                    <a href="<?php echo e(($tool['admin']['settings-page'])::getUrl()); ?>" class="inline-flex items-center justify-center px-4 font-medium tracking-tight text-white transition-colors border border-transparent rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset filament-button h-9 focus:ring-white bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700">
                                        <span>Settings</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/filament/pages/manage-tool-settings.blade.php ENDPATH**/ ?>