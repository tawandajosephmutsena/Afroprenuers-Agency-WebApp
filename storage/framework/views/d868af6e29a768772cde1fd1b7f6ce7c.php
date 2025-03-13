<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginalcf6cd1d0af6a1af11220e1b7cad0d730 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcf6cd1d0af6a1af11220e1b7cad0d730 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.gallery01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.gallery01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcf6cd1d0af6a1af11220e1b7cad0d730)): ?>
<?php $attributes = $__attributesOriginalcf6cd1d0af6a1af11220e1b7cad0d730; ?>
<?php unset($__attributesOriginalcf6cd1d0af6a1af11220e1b7cad0d730); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf6cd1d0af6a1af11220e1b7cad0d730)): ?>
<?php $component = $__componentOriginalcf6cd1d0af6a1af11220e1b7cad0d730; ?>
<?php unset($__componentOriginalcf6cd1d0af6a1af11220e1b7cad0d730); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/75e1530111d9443f797ea58523ce11ac.blade.php ENDPATH**/ ?>