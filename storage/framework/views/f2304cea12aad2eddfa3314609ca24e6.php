<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal2c280e7f0a8b99e21f396d4ed674f3ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c280e7f0a8b99e21f396d4ed674f3ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.quote01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.quote01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c280e7f0a8b99e21f396d4ed674f3ea)): ?>
<?php $attributes = $__attributesOriginal2c280e7f0a8b99e21f396d4ed674f3ea; ?>
<?php unset($__attributesOriginal2c280e7f0a8b99e21f396d4ed674f3ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c280e7f0a8b99e21f396d4ed674f3ea)): ?>
<?php $component = $__componentOriginal2c280e7f0a8b99e21f396d4ed674f3ea; ?>
<?php unset($__componentOriginal2c280e7f0a8b99e21f396d4ed674f3ea); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/e56f20150f004786d80abb5e295d4be7.blade.php ENDPATH**/ ?>