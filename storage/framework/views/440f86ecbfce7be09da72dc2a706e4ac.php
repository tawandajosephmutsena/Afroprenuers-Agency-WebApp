<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal5eb3349dc4123deb80cc5c671dc2e0eb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5eb3349dc4123deb80cc5c671dc2e0eb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.our-team01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.our-team01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5eb3349dc4123deb80cc5c671dc2e0eb)): ?>
<?php $attributes = $__attributesOriginal5eb3349dc4123deb80cc5c671dc2e0eb; ?>
<?php unset($__attributesOriginal5eb3349dc4123deb80cc5c671dc2e0eb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5eb3349dc4123deb80cc5c671dc2e0eb)): ?>
<?php $component = $__componentOriginal5eb3349dc4123deb80cc5c671dc2e0eb; ?>
<?php unset($__componentOriginal5eb3349dc4123deb80cc5c671dc2e0eb); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/badeb97349ed3e09fb2fac61158ecbd7.blade.php ENDPATH**/ ?>