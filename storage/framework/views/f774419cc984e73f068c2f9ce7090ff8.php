<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['heading','clientlogo']));

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

foreach (array_filter((['heading','clientlogo']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal72d8f0fe6ff1bcfb942b83734b077e54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal72d8f0fe6ff1bcfb942b83734b077e54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.clientlogo','data' => ['heading' => $heading,'clientlogo' => $clientlogo]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.clientlogo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($heading),'clientlogo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clientlogo)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal72d8f0fe6ff1bcfb942b83734b077e54)): ?>
<?php $attributes = $__attributesOriginal72d8f0fe6ff1bcfb942b83734b077e54; ?>
<?php unset($__attributesOriginal72d8f0fe6ff1bcfb942b83734b077e54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal72d8f0fe6ff1bcfb942b83734b077e54)): ?>
<?php $component = $__componentOriginal72d8f0fe6ff1bcfb942b83734b077e54; ?>
<?php unset($__componentOriginal72d8f0fe6ff1bcfb942b83734b077e54); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/12846fff0055a5655f4ec2e325bd958b.blade.php ENDPATH**/ ?>