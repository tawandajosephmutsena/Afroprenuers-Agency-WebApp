<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title','content']));

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

foreach (array_filter((['title','content']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal373867826b70bbf011998242050bab72 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal373867826b70bbf011998242050bab72 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.info-section02','data' => ['title' => $title,'content' => $content]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.info-section02'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($content)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal373867826b70bbf011998242050bab72)): ?>
<?php $attributes = $__attributesOriginal373867826b70bbf011998242050bab72; ?>
<?php unset($__attributesOriginal373867826b70bbf011998242050bab72); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal373867826b70bbf011998242050bab72)): ?>
<?php $component = $__componentOriginal373867826b70bbf011998242050bab72; ?>
<?php unset($__componentOriginal373867826b70bbf011998242050bab72); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/2d4e50d151efb39f0b0d6ce7da050619.blade.php ENDPATH**/ ?>