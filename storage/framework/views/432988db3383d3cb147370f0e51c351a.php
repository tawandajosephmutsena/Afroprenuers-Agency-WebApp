<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal382adf584ecb6e572c017d91b5c3e609 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal382adf584ecb6e572c017d91b5c3e609 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.price-lists01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.price-lists01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal382adf584ecb6e572c017d91b5c3e609)): ?>
<?php $attributes = $__attributesOriginal382adf584ecb6e572c017d91b5c3e609; ?>
<?php unset($__attributesOriginal382adf584ecb6e572c017d91b5c3e609); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal382adf584ecb6e572c017d91b5c3e609)): ?>
<?php $component = $__componentOriginal382adf584ecb6e572c017d91b5c3e609; ?>
<?php unset($__componentOriginal382adf584ecb6e572c017d91b5c3e609); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/7c4429ebc8225b2955188a3c74763671.blade.php ENDPATH**/ ?>