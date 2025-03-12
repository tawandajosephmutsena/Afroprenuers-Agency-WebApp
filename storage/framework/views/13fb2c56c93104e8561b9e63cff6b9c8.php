<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heading','description','buttonText','privacyText','privacyUrl']));

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

foreach (array_filter((['heading','description','buttonText','privacyText','privacyUrl']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalbd6e778cb00632d832e23cb6bfeae54b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd6e778cb00632d832e23cb6bfeae54b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.newsletter01','data' => ['heading' => $heading,'description' => $description,'buttonText' => $buttonText,'privacyText' => $privacyText,'privacyUrl' => $privacyUrl]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.newsletter01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heading),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($description),'button_text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($buttonText),'privacy_text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($privacyText),'privacy_url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($privacyUrl)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd6e778cb00632d832e23cb6bfeae54b)): ?>
<?php $attributes = $__attributesOriginalbd6e778cb00632d832e23cb6bfeae54b; ?>
<?php unset($__attributesOriginalbd6e778cb00632d832e23cb6bfeae54b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd6e778cb00632d832e23cb6bfeae54b)): ?>
<?php $component = $__componentOriginalbd6e778cb00632d832e23cb6bfeae54b; ?>
<?php unset($__componentOriginalbd6e778cb00632d832e23cb6bfeae54b); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/16394a9e75ace5287e9ca30a253b652c.blade.php ENDPATH**/ ?>