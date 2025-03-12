<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal94f130902a1a46e0abfd8598509f9697 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94f130902a1a46e0abfd8598509f9697 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.info-cards01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.info-cards01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94f130902a1a46e0abfd8598509f9697)): ?>
<?php $attributes = $__attributesOriginal94f130902a1a46e0abfd8598509f9697; ?>
<?php unset($__attributesOriginal94f130902a1a46e0abfd8598509f9697); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94f130902a1a46e0abfd8598509f9697)): ?>
<?php $component = $__componentOriginal94f130902a1a46e0abfd8598509f9697; ?>
<?php unset($__componentOriginal94f130902a1a46e0abfd8598509f9697); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/cc7c1986dbe3d8e6eb814df29c05c4e2.blade.php ENDPATH**/ ?>