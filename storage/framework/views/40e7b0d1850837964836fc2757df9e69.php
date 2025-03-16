<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['columns']));

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

foreach (array_filter((['columns']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalcf6cd1d0af6a1af11220e1b7cad0d730 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcf6cd1d0af6a1af11220e1b7cad0d730 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.gallery01','data' => ['columns' => $columns]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.gallery01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcf6cd1d0af6a1af11220e1b7cad0d730)): ?>
<?php $attributes = $__attributesOriginalcf6cd1d0af6a1af11220e1b7cad0d730; ?>
<?php unset($__attributesOriginalcf6cd1d0af6a1af11220e1b7cad0d730); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf6cd1d0af6a1af11220e1b7cad0d730)): ?>
<?php $component = $__componentOriginalcf6cd1d0af6a1af11220e1b7cad0d730; ?>
<?php unset($__componentOriginalcf6cd1d0af6a1af11220e1b7cad0d730); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/a057c2fb34f9f41ba660057302f3afea.blade.php ENDPATH**/ ?>