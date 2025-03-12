<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal2ce5f24257d221a30212099d6325f3a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ce5f24257d221a30212099d6325f3a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.client-logos01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.client-logos01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ce5f24257d221a30212099d6325f3a8)): ?>
<?php $attributes = $__attributesOriginal2ce5f24257d221a30212099d6325f3a8; ?>
<?php unset($__attributesOriginal2ce5f24257d221a30212099d6325f3a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ce5f24257d221a30212099d6325f3a8)): ?>
<?php $component = $__componentOriginal2ce5f24257d221a30212099d6325f3a8; ?>
<?php unset($__componentOriginal2ce5f24257d221a30212099d6325f3a8); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/abd2c90b93a5b339b938d7c954fb734a.blade.php ENDPATH**/ ?>