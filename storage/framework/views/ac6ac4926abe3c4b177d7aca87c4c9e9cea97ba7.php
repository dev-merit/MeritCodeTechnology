<div x-data="window.bitflanToolBaseSearchComponent()" class="main-search-sec">
    <input x-model:value="query" type="text" placeholder="<?php echo e(trans('webtools/homepage.search-placeholder')); ?>">
    <ul class="main-search-dd" x-ref="list">
        <?php $__currentLoopData = config('tools.categories'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $category['tools']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $searchable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($toolOptions['tool-' . $searchable['name'] . '.' . 'enabled']) && $toolOptions['tool-' . $searchable['name'] . '.' . 'enabled'][0]->payload != 'false'): ?>
                    <li data-name="<?php echo e(str_replace('"', '', $toolOptions['tool-' . $searchable['name'] . '.' . 'title'][0]->payload)); ?>" data-summary="<?php echo e(str_replace('"', '', $toolOptions['tool-' . $searchable['name'] . '.' . 'summary'][0]->payload)); ?>">
                        <a href="<?php echo e(route('tool', $slugs->{$key})); ?>">
                            <?php echo e(str_replace('"', '', $toolOptions['tool-' . $searchable['name'] . '.' . 'title'][0]->payload)); ?>

                            <br>
                            <small><?php echo e(str_replace('"', '', $toolOptions['tool-' . $searchable['name'] . '.' . 'summary'][0]->payload)); ?></small>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/modules/tools/search-base.blade.php ENDPATH**/ ?>