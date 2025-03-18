<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginala525ca476929a69a7cf49d57067dc4aa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala525ca476929a69a7cf49d57067dc4aa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.testimonials01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.testimonials01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala525ca476929a69a7cf49d57067dc4aa)): ?>
<?php $attributes = $__attributesOriginala525ca476929a69a7cf49d57067dc4aa; ?>
<?php unset($__attributesOriginala525ca476929a69a7cf49d57067dc4aa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala525ca476929a69a7cf49d57067dc4aa)): ?>
<?php $component = $__componentOriginala525ca476929a69a7cf49d57067dc4aa; ?>
<?php unset($__componentOriginala525ca476929a69a7cf49d57067dc4aa); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/497375e4096bf915f1d0060ca93254e7.blade.php ENDPATH**/ ?>