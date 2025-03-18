<?php
    $items = $getMedia();
    $overlap = $getOverlap() ?? 'sm';
    $imageCount = count($items);
    $ring = match ($getRing()) {
        0 => 'ring-0',
        1 => 'ring-1',
        2 => 'ring-2',
        4 => 'ring-4',
        default => 'ring',
    };

    $ringClasses = \Illuminate\Support\Arr::toCssClasses([
        'ring-white dark:ring-gray-900',
        match ($ring) {
            0 => null,
            1 => 'ring-1',
            2 => 'ring-2',
            3 => 'ring',
            4 => 'ring-4',
            default => $ring,
        },
    ]);

    $overlap = match ($overlap) {
        0 => 'space-x-0',
        2 => '-space-x-2',
        3 => '-space-x-3',
        4 => '-space-x-4',
        default => '-space-x-1',
    };

    $defaultImageUrl = $getDefaultImageUrl();

    $resolution = $getResolution();

    $height = $getHeight();
    $width = $getWidth() ?? ($isRounded() ? $height : null);
?>

<div
    <?php echo e($attributes->merge($getExtraAttributes())->class([
        'curator-column px-4 py-3',
        $overlap . ' flex items-center' => $imageCount > 1,
    ])); ?>

>
    <!--[if BLOCK]><![endif]--><?php if($items): ?>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="
                <?php echo $height !== null ? "height: {$height};" : null; ?>

                <?php echo $width !== null ? "width: {$width};" : null; ?>

            "
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'rounded-full overflow-hidden' => $isRounded(),
                $ring . ' ring-white dark:ring-gray-900' => $imageCount > 1,
            ]); ?>"
        >
            <!--[if BLOCK]><![endif]--><?php if(\Awcodes\Curator\is_media_resizable($item->type)): ?>
                <?php
                    $img_width = $width ? (int)$width : null;
                    $img_height = $height ? (int)$height : null;

                    if ($resolution) {
                        $img_width *= $resolution;
                        $img_height *= $resolution;
                    }
                ?>
                <img
                    src="<?php echo e($item->getSignedUrl([
                        'w' => $img_width,
                        'h' => $img_height,
                        'fit' => 'crop',
                        'fm' => 'webp'
                    ])); ?>"
                    alt="<?php echo e($item->alt); ?>"
                    style="
                        <?php echo $height !== null ? "height: {$height};" : null; ?>

                        <?php echo $width !== null ? "width: {$width};" : null; ?>

                    "
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'max-w-none' => $height && ! $width,
                        'object-cover object-center' => ($isRounded() || $width || $height)
                    ]); ?>"
                    <?php echo e($getExtraImgAttributeBag()); ?>

                />
            <?php elseif(str($item->type)->contains('svg')): ?>
                <img
                    src="<?php echo e(Storage::url($item->path)); ?>"
                    alt="<?php echo e($item->alt); ?>"
                    style="
                        <?php echo $height !== null ? "height: {$height};" : "height: 2rem;"; ?>

                        <?php echo $width !== null ? "width: {$width};" : null; ?>

                    "
                    class="h-full w-auto"
                    <?php echo e($getExtraImgAttributeBag()); ?>

                />
            <?php else: ?>
                <?php if (isset($component)) { $__componentOriginaldf8a712998df2199f6fd7a9afac78c10 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8a712998df2199f6fd7a9afac78c10 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'curator::components.document-image','data' => ['label' => $item->name,'iconSize' => 'md','type' => $item->type,'extension' => $item->ext,'class' => 'h-full w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('curator::document-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->name),'icon-size' => 'md','type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->type),'extension' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item->ext),'class' => 'h-full w-full']); ?>
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
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    <?php elseif($defaultImageUrl): ?>
        <img
                src="<?php echo e($defaultImageUrl); ?>"
                <?php echo e($getExtraImgAttributeBag()
						->class([
							'max-w-none object-cover object-center',
							'rounded-full' => $isCircular,
							$ringClasses,
						])
						->style([
							"height: {$height}" => $height,
							"width: {$width}" => $width,
						])); ?>

        />
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH /Users/mac/Herd/an/vendor/awcodes/filament-curator/src/../resources/views/components/tables/curator-column.blade.php ENDPATH**/ ?>