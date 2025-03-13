<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => null,
    'dir' => 'ltr',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'title' => null,
    'dir' => 'ltr',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php use \Z3d0X\FilamentFabricator\View\LayoutRenderHook; ?>

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e($dir); ?>" class="filament-fabricator">

<head>
    <?php echo e(\Filament\Support\Facades\FilamentView::renderHook(LayoutRenderHook::HEAD_START)); ?>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php $__currentLoopData = \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getMeta(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($tag); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($favicon = \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getFavicon()): ?>
        <link rel="icon" href="<?php echo e($favicon); ?>">
    <?php endif; ?>

    <title><?php echo e($title ? "{$title} - " : null); ?> <?php echo e(config('app.name')); ?></title>


    <style>
        [x-cloak=""],
        [x-cloak="x-cloak"],
        [x-cloak="1"] {
            display: none !important;
        }
    </style>


    <?php $__currentLoopData = \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getStyles(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(\Illuminate\Support\Str::of($path)->startsWith('<')): ?>
            <?php echo $path; ?>

        <?php else: ?>
            <link rel="stylesheet" href="<?php echo e($path); ?>" />
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo e(\Filament\Support\Facades\FilamentView::renderHook(LayoutRenderHook::HEAD_END)); ?>

</head>

<body class="filament-fabricator-body">
    <?php echo e(\Filament\Support\Facades\FilamentView::renderHook(LayoutRenderHook::BODY_START)); ?>


    <?php echo e($slot); ?>


    <?php echo e(\Filament\Support\Facades\FilamentView::renderHook(LayoutRenderHook::SCRIPTS_START)); ?>


    <?php $__currentLoopData = \Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getScripts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(\Illuminate\Support\Str::of($path)->startsWith('<')): ?>
            <?php echo $path; ?>

        <?php else: ?>
            <script defer src="<?php echo e($path); ?>"></script>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <?php echo e(\Filament\Support\Facades\FilamentView::renderHook(LayoutRenderHook::SCRIPTS_END)); ?>


    <?php echo e(\Filament\Support\Facades\FilamentView::renderHook(LayoutRenderHook::BODY_END)); ?>

</body>

</html>
<?php /**PATH /Users/mac/Herd/an/vendor/z3d0x/filament-fabricator/src/../resources/views/components/layouts/base.blade.php ENDPATH**/ ?>