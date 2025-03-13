<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal7cd78cbd90230ab815ee88f3df93981c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7cd78cbd90230ab815ee88f3df93981c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.time-line01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.time-line01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7cd78cbd90230ab815ee88f3df93981c)): ?>
<?php $attributes = $__attributesOriginal7cd78cbd90230ab815ee88f3df93981c; ?>
<?php unset($__attributesOriginal7cd78cbd90230ab815ee88f3df93981c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7cd78cbd90230ab815ee88f3df93981c)): ?>
<?php $component = $__componentOriginal7cd78cbd90230ab815ee88f3df93981c; ?>
<?php unset($__componentOriginal7cd78cbd90230ab815ee88f3df93981c); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/670ebe359863c0f0e980db3405b1a778.blade.php ENDPATH**/ ?>