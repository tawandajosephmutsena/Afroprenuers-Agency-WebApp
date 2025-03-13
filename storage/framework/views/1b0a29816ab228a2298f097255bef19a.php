<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heading','content','buttonText']));

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

foreach (array_filter((['heading','content','buttonText']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginaldc7ec71324351b51cd0d02600db3284f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc7ec71324351b51cd0d02600db3284f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.hero02','data' => ['heading' => $heading,'content' => $content,'buttonText' => $buttonText]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.hero02'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($content),'button_text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($buttonText)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc7ec71324351b51cd0d02600db3284f)): ?>
<?php $attributes = $__attributesOriginaldc7ec71324351b51cd0d02600db3284f; ?>
<?php unset($__attributesOriginaldc7ec71324351b51cd0d02600db3284f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc7ec71324351b51cd0d02600db3284f)): ?>
<?php $component = $__componentOriginaldc7ec71324351b51cd0d02600db3284f; ?>
<?php unset($__componentOriginaldc7ec71324351b51cd0d02600db3284f); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/d50e7f311bb43157d6e6d6b75e105d1d.blade.php ENDPATH**/ ?>