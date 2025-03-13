<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal90dafb758a2b77cc00e81f33a26f9534 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90dafb758a2b77cc00e81f33a26f9534 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.c-t-a01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.c-t-a01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90dafb758a2b77cc00e81f33a26f9534)): ?>
<?php $attributes = $__attributesOriginal90dafb758a2b77cc00e81f33a26f9534; ?>
<?php unset($__attributesOriginal90dafb758a2b77cc00e81f33a26f9534); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90dafb758a2b77cc00e81f33a26f9534)): ?>
<?php $component = $__componentOriginal90dafb758a2b77cc00e81f33a26f9534; ?>
<?php unset($__componentOriginal90dafb758a2b77cc00e81f33a26f9534); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/9da5190c91a2b91aa0260e5874243879.blade.php ENDPATH**/ ?>