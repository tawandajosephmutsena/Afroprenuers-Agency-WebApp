<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal4db34f534044564c455561c4b05dcc52 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4db34f534044564c455561c4b05dcc52 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.image-content-card01','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.image-content-card01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4db34f534044564c455561c4b05dcc52)): ?>
<?php $attributes = $__attributesOriginal4db34f534044564c455561c4b05dcc52; ?>
<?php unset($__attributesOriginal4db34f534044564c455561c4b05dcc52); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4db34f534044564c455561c4b05dcc52)): ?>
<?php $component = $__componentOriginal4db34f534044564c455561c4b05dcc52; ?>
<?php unset($__componentOriginal4db34f534044564c455561c4b05dcc52); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/d6d31b3e074bcf4442cd9c57baf61d5a.blade.php ENDPATH**/ ?>