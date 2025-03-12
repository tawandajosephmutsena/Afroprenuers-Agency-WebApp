<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginaldc7ec71324351b51cd0d02600db3284f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc7ec71324351b51cd0d02600db3284f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.hero02','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.hero02'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc7ec71324351b51cd0d02600db3284f)): ?>
<?php $attributes = $__attributesOriginaldc7ec71324351b51cd0d02600db3284f; ?>
<?php unset($__attributesOriginaldc7ec71324351b51cd0d02600db3284f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc7ec71324351b51cd0d02600db3284f)): ?>
<?php $component = $__componentOriginaldc7ec71324351b51cd0d02600db3284f; ?>
<?php unset($__componentOriginaldc7ec71324351b51cd0d02600db3284f); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/e62ed20269c3e8b16dd72ad7f8de2b2f.blade.php ENDPATH**/ ?>