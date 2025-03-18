<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['statePath','editor']));

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

foreach (array_filter((['statePath','editor']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal5d57e381e045b7eeff46c1d40cf8031d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5d57e381e045b7eeff46c1d40cf8031d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-tiptap-editor::components.tools.subscript','data' => ['statePath' => $statePath,'editor' => $editor]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-tiptap-editor::tools.subscript'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['state-path' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statePath),'editor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($editor)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5d57e381e045b7eeff46c1d40cf8031d)): ?>
<?php $attributes = $__attributesOriginal5d57e381e045b7eeff46c1d40cf8031d; ?>
<?php unset($__attributesOriginal5d57e381e045b7eeff46c1d40cf8031d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d57e381e045b7eeff46c1d40cf8031d)): ?>
<?php $component = $__componentOriginal5d57e381e045b7eeff46c1d40cf8031d; ?>
<?php unset($__componentOriginal5d57e381e045b7eeff46c1d40cf8031d); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/0cb55d4ac321c34e42c05bbc3a52f77c.blade.php ENDPATH**/ ?>