<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Install <?php echo e($name); ?> v<?php echo e($version); ?> — Bitflan</title>
    <link rel="icon" href="<?php echo e(asset('static-backend/favicon.ico')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/theme.css')); ?>" />
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <main class="flex flex-col items-center justify-center w-screen h-screen px-6 overflow-hidden bg-gray-100">
        <img src="<?php echo e(asset('static-backend/logo.webp')); ?>" width="222" />

        <section class="max-w-[550px] w-full rounded bg-white shadow-md p-6 text-center flex flex-col items-center justify-center mt-3">
            <div>
                <strong><a href="https://weadown.com" target="_blank">weadown.com</a></strong> | You are installing <strong><?php echo e($name); ?></strong> <span class="text-xs font-bold ml-1 px-2 py-0.5 bg-green-600 text-white rounded-lg"><?php echo e($version); ?></span>
            </div>
        </section>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('installer')->html();
} elseif ($_instance->childHasBeenRendered('knwBTfT')) {
    $componentId = $_instance->getRenderedChildComponentId('knwBTfT');
    $componentTag = $_instance->getRenderedChildComponentTagName('knwBTfT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('knwBTfT');
} else {
    $response = \Livewire\Livewire::mount('installer');
    $html = $response->html();
    $_instance->logRenderedChild('knwBTfT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </main>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH /home/awsstart/domains/meritcodetechnology.com/public_html/resources/views/install/index.blade.php ENDPATH**/ ?>