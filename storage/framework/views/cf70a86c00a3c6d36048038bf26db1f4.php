<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heading','content','button01','button02']));

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

foreach (array_filter((['heading','content','button01','button02']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal80e3366c7d4441efd2fb0c9927712407 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal80e3366c7d4441efd2fb0c9927712407 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.hero01','data' => ['heading' => $heading,'content' => $content,'button01' => $button01,'button02' => $button02]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.hero01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($content),'button01' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button01),'button02' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button02)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal80e3366c7d4441efd2fb0c9927712407)): ?>
<?php $attributes = $__attributesOriginal80e3366c7d4441efd2fb0c9927712407; ?>
<?php unset($__attributesOriginal80e3366c7d4441efd2fb0c9927712407); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal80e3366c7d4441efd2fb0c9927712407)): ?>
<?php $component = $__componentOriginal80e3366c7d4441efd2fb0c9927712407; ?>
<?php unset($__componentOriginal80e3366c7d4441efd2fb0c9927712407); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/4460aec92ae5bc779133ac114dd6f396.blade.php ENDPATH**/ ?>