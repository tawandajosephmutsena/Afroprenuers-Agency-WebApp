<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginalbd6e778cb00632d832e23cb6bfeae54b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd6e778cb00632d832e23cb6bfeae54b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.newsletter01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.newsletter01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

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
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/62ef76479922c7efaeb733be68a4159a.blade.php ENDPATH**/ ?>