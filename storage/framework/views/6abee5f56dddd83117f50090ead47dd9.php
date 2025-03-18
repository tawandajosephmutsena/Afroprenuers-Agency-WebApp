<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heading','subhearding','content']));

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

foreach (array_filter((['heading','subhearding','content']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal39839f6cd31065a86aadb23021102cc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39839f6cd31065a86aadb23021102cc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.info-section01','data' => ['heading' => $heading,'subhearding' => $subhearding,'content' => $content]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.info-section01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heading),'subhearding' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($subhearding),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($content)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39839f6cd31065a86aadb23021102cc2)): ?>
<?php $attributes = $__attributesOriginal39839f6cd31065a86aadb23021102cc2; ?>
<?php unset($__attributesOriginal39839f6cd31065a86aadb23021102cc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39839f6cd31065a86aadb23021102cc2)): ?>
<?php $component = $__componentOriginal39839f6cd31065a86aadb23021102cc2; ?>
<?php unset($__componentOriginal39839f6cd31065a86aadb23021102cc2); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/24bd8c382646a4e855f818cc392d2c12.blade.php ENDPATH**/ ?>