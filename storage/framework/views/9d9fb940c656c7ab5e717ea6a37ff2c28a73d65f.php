<link rel="canonical" href="<?php echo e(url()->current()); ?>" />
<meta name="title" content="<?php echo e($title); ?> — <?php echo e($generalSettings->websiteTitle); ?>">
<meta name="description" content="<?php echo e($description); ?>">

<?php if($keywords): ?>
<meta name="keywords" content="<?php echo e($keywords); ?>">
<?php endif; ?>

<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo e(url('/')); ?>">
<meta property="og:title" content="<?php echo e($title); ?> — <?php echo e($generalSettings->websiteTitle); ?>">
<meta property="og:description" content="<?php echo e($description); ?>">
<meta property="og:image" content="<?php echo e(storage_url($generalSettings->ogImage)); ?>">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo e(url('/')); ?>">
<meta property="twitter:title" content="<?php echo e($title); ?> — <?php echo e($generalSettings->websiteTitle); ?>">
<meta property="twitter:description" content="<?php echo e($description); ?>">
<meta property="twitter:image" content="<?php echo e(storage_url($generalSettings->ogImage)); ?>"><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/includes/seo-content.blade.php ENDPATH**/ ?>