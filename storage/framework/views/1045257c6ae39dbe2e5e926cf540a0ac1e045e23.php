<?php if($generalSettings->customStyles): ?>
    <style>
        <?php echo $generalSettings->customStyles; ?>

    </style>
<?php endif; ?>

<?php if(isset($styles) && $styles): ?>
    <?php $__currentLoopData = $styles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $style): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="stylesheet" href="<?php echo e($style[1] == 'internal' ? asset($style[0]) : $style[0]); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php $__currentLoopData = $generalSettings->styles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $style): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link rel="stylesheet" href="<?php echo e($style['url']); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__currentLoopData = $generalSettings->scripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($script['location'] == 'header'): ?>
        <script src="<?php echo e($script['url']); ?>"></script>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
    window.bitflanBaseUrl = '<?php echo e(url("/")); ?>';
    window.copiedIntlString = `<?php echo e(trans('webtools/general.copied')); ?>`;
</script>

<?php if($adSettings->popAdStatus && $adSettings->popAdLocation == 'header'): ?>
    <?php echo $adSettings->popAdCode; ?>

<?php endif; ?>

<?php if($generalSettings->headerTags): ?>
    <?php echo $generalSettings->headerTags; ?>

<?php endif; ?><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/includes/header-content.blade.php ENDPATH**/ ?>