<div
    <?php echo e($attributes->merge($getExtraAttributes())->class(['curator-grid-column absolute inset-0 rounded-t-xl overflow-hidden aspect-video'])); ?>

>
    <?php
        $record = $getRecord();
    ?>

    <div class="rounded-t-xl h-full overflow-hidden bg-gray-100 dark:bg-gray-950/50">
        <!--[if BLOCK]><![endif]--><?php if(str($record->type)->contains('image')): ?>
            <img
                src="<?php echo e($record->getSignedUrl(['w' => 640, 'h' => 320, 'fit' => 'crop', 'fm' => 'webp'])); ?>"
                alt="<?php echo e($record->alt); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'h-full',
                    'w-auto mx-auto' => str($record->type)->contains('svg'),
                    'object-cover w-full' => ! str($record->type)->contains('svg'),
                ]); ?>"
            />
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginaldf8a712998df2199f6fd7a9afac78c10 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8a712998df2199f6fd7a9afac78c10 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'curator::components.document-image','data' => ['label' => $record->name,'iconSize' => 'lg','type' => $record->type,'extension' => $record->ext]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('curator::document-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($record->name),'icon-size' => 'lg','type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($record->type),'extension' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($record->ext)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8a712998df2199f6fd7a9afac78c10)): ?>
<?php $attributes = $__attributesOriginaldf8a712998df2199f6fd7a9afac78c10; ?>
<?php unset($__attributesOriginaldf8a712998df2199f6fd7a9afac78c10); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8a712998df2199f6fd7a9afac78c10)): ?>
<?php $component = $__componentOriginaldf8a712998df2199f6fd7a9afac78c10; ?>
<?php unset($__componentOriginaldf8a712998df2199f6fd7a9afac78c10); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <div
            class="absolute inset-x-0 bottom-0 flex items-center justify-between px-1.5 pt-10 pb-1.5 text-xs text-white bg-gradient-to-t from-black/80 to-transparent gap-3"
        >
            <p class="truncate"><?php echo e($record->pretty_name); ?></p>
            <p class="flex-shrink-0"><?php echo e($record->size_for_humans); ?></p>
        </div>
    </div>
</div>
<?php /**PATH /Users/mac/Herd/an/vendor/awcodes/filament-curator/src/../resources/views/components/tables/grid-column.blade.php ENDPATH**/ ?>