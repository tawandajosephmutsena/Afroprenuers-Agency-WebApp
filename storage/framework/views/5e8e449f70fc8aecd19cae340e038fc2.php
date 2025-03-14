<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['limit','showImage','showPrice','showDescription','orderBy']));

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

foreach (array_filter((['limit','showImage','showPrice','showDescription','orderBy']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal8595cb378a5511267f3791e9121a8fa6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8595cb378a5511267f3791e9121a8fa6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.services_list','data' => ['limit' => $limit,'showImage' => $showImage,'showPrice' => $showPrice,'showDescription' => $showDescription,'orderBy' => $orderBy]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.services_list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['limit' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($limit),'show_image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showImage),'show_price' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showPrice),'show_description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showDescription),'order_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orderBy)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8595cb378a5511267f3791e9121a8fa6)): ?>
<?php $attributes = $__attributesOriginal8595cb378a5511267f3791e9121a8fa6; ?>
<?php unset($__attributesOriginal8595cb378a5511267f3791e9121a8fa6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8595cb378a5511267f3791e9121a8fa6)): ?>
<?php $component = $__componentOriginal8595cb378a5511267f3791e9121a8fa6; ?>
<?php unset($__componentOriginal8595cb378a5511267f3791e9121a8fa6); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/368661e9f29ee1432acc483c63736df6.blade.php ENDPATH**/ ?>