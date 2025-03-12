<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['slides']));

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

foreach (array_filter((['slides']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal2ea8366adcc442a59e75b5c454f58352 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ea8366adcc442a59e75b5c454f58352 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.carousel-slider01','data' => ['slides' => $slides]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.carousel-slider01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['slides' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($slides)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ea8366adcc442a59e75b5c454f58352)): ?>
<?php $attributes = $__attributesOriginal2ea8366adcc442a59e75b5c454f58352; ?>
<?php unset($__attributesOriginal2ea8366adcc442a59e75b5c454f58352); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ea8366adcc442a59e75b5c454f58352)): ?>
<?php $component = $__componentOriginal2ea8366adcc442a59e75b5c454f58352; ?>
<?php unset($__componentOriginal2ea8366adcc442a59e75b5c454f58352); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/990920e3000aad92998322797c2ae386.blade.php ENDPATH**/ ?>