<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginalc31b4ee314bd30929d3d2d4bb87b0bda = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc31b4ee314bd30929d3d2d4bb87b0bda = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.hero03','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.hero03'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc31b4ee314bd30929d3d2d4bb87b0bda)): ?>
<?php $attributes = $__attributesOriginalc31b4ee314bd30929d3d2d4bb87b0bda; ?>
<?php unset($__attributesOriginalc31b4ee314bd30929d3d2d4bb87b0bda); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc31b4ee314bd30929d3d2d4bb87b0bda)): ?>
<?php $component = $__componentOriginalc31b4ee314bd30929d3d2d4bb87b0bda; ?>
<?php unset($__componentOriginalc31b4ee314bd30929d3d2d4bb87b0bda); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/894de0b702199a81c06af1544595e88c.blade.php ENDPATH**/ ?>