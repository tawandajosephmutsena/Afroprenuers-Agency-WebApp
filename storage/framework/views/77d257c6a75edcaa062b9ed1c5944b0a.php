<?php
    $statePath = $getStatePath();
    $items = $getState() ?? [];
    $itemsCount = count($items);
    $isMultiple = $isMultiple();
    $maxItems = $getMaxItems();
    $shouldDisplayAsList = $shouldDisplayAsList();
?>

<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['field' => $field]); ?>

    <div
        x-data="{
            insertMedia: function (event) {
                if (event.detail.statePath !== '<?php echo e($statePath); ?>') return;
                $wire.$set(event.detail.statePath, event.detail.media);
            },
        }"
        x-on:insert-content.window="insertMedia($event)"
        class="curator-media-picker w-full"
    >
        <ul
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'w-full',
                'flex items-center gap-6 flex-wrap' => $itemsCount <= 3 && ! $shouldDisplayAsList,
                'curator-grid-container' => $itemsCount >= 3 && ! $shouldDisplayAsList,
                'overflow-hidden bg-white border border-gray-300 rounded-lg shadow-sm divide-y divide-gray-300 dark:border-gray-700 dark:text-white dark:divide-gray-700 dark:bg-white/5' => $itemsCount > 0 && $shouldDisplayAsList,
            ]); ?>"
            x-sortable
            wire:end.stop="mountFormComponentAction('<?php echo e($statePath); ?>', 'reorder', { items: $event.target.sortable.toArray() })"
            style="<?php echo e($itemsCount === 1 ? '--grid-column-count: 1' : ''); ?>"
        >
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uuid => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li
                    wire:key="<?php echo e($this->getId()); ?>.<?php echo e($uuid); ?>.<?php echo e($field::class); ?>.item"
                    x-sortable-item="<?php echo e($uuid); ?>"
                    <?php echo e($attributes->merge($getExtraAttributes())->class([
                        'relative w-full',
                    ])); ?>

                >
                    <!--[if BLOCK]><![endif]--><?php if($shouldDisplayAsList): ?>
                        <div class="w-full flex items-center gap-4 text-xs pe-2">
                            <div class="curator-picker-list-preview flex-shrink-0 h-12 w-12 checkered">
                                <!--[if BLOCK]><![endif]--><?php if(str($item['type'])->contains('image')): ?>
                                    <img
                                        src="<?php echo e($item['thumbnail_url']); ?>"
                                        alt="<?php echo e($item['alt'] ?? $item['name']); ?>"
                                        <?php if($shouldLazyLoad()): ?>
                                            loading="lazy"
                                        <?php endif; ?>
                                        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                           'h-full',
                                           'object-contain' => $isConstrained(),
                                           'object-cover w-full' => ! $isConstrained(),
                                       ]); ?>"
                                    />
                                <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginaldf8a712998df2199f6fd7a9afac78c10 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8a712998df2199f6fd7a9afac78c10 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'curator::components.document-image','data' => ['label' => ''.e($item['name']).'','type' => ''.e($item['type']).'','extension' => ''.e($item['ext']).'','iconSize' => 'md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('curator::document-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e($item['name']).'','type' => ''.e($item['type']).'','extension' => ''.e($item['ext']).'','icon-size' => 'md']); ?>
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
                            <div class="curator-picker-list-details min-w-0 overflow-hidden py-2">
                                <p><?php echo e($item['pretty_name']); ?></p>
                            </div>
                            <div class="curator-picker-list-details flex-shrink-0 ml-auto py-2">
                                <p><?php echo e($item['size_for_humans']); ?></p>
                            </div>
                            <div class="curator-picker-list-actions flex-shrink-0">
                                <div class="relative flex items-center">
                                    <!--[if BLOCK]><![endif]--><?php if($isMultiple): ?>
                                        <div
                                            x-sortable-handle
                                            class="flex items-center justify-center flex-none w-8 h-8 transition text-gray-400 hover:text-gray-300"
                                        >
                                            <?php echo e($getAction('reorder')); ?>

                                        </div>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                    <div class="flex items-center justify-center flex-none w-8 h-8">
                                        <?php if (isset($component)) { $__componentOriginalbdee036326cbc931a2e3bf686403ecb7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbdee036326cbc931a2e3bf686403ecb7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.group','data' => ['actions' => [
                                                $getAction('view')(['url' => $item['url']]),
                                                $getAction('edit')(['id' => $item['id']]),
                                                $getAction('download')(['uuid' => $uuid]),
                                                $getAction('remove')(['uuid' => $uuid]),
                                            ],'color' => 'gray','size' => 'xs','dropdownPlacement' => 'bottom-end']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-actions::group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                                                $getAction('view')(['url' => $item['url']]),
                                                $getAction('edit')(['id' => $item['id']]),
                                                $getAction('download')(['uuid' => $uuid]),
                                                $getAction('remove')(['uuid' => $uuid]),
                                            ]),'color' => 'gray','size' => 'xs','dropdown-placement' => 'bottom-end']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbdee036326cbc931a2e3bf686403ecb7)): ?>
<?php $attributes = $__attributesOriginalbdee036326cbc931a2e3bf686403ecb7; ?>
<?php unset($__attributesOriginalbdee036326cbc931a2e3bf686403ecb7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbdee036326cbc931a2e3bf686403ecb7)): ?>
<?php $component = $__componentOriginalbdee036326cbc931a2e3bf686403ecb7; ?>
<?php unset($__componentOriginalbdee036326cbc931a2e3bf686403ecb7); ?>
<?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'relative block w-full overflow-hidden border border-gray-300 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:text-white flex justify-center checkered',
                                'h-64' => ! str($item['type'])->contains('video'),
                                'md:flex-1 ' => $itemsCount <= 3,
                            ]); ?>"
                        >
                        <!--[if BLOCK]><![endif]--><?php if(str($item['type'])->contains('image')): ?>
                            <img
                                src="<?php echo e($item['large_url']); ?>"
                                alt="<?php echo e($item['alt'] ?? $item['name']); ?>"
                                <?php if($shouldLazyLoad()): ?>
                                    loading="lazy"
                                <?php endif; ?>
                                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                   'h-full',
                                   'object-contain' => $isConstrained(),
                                   'object-cover w-full' => ! $isConstrained(),
                               ]); ?>"
                            />
                        <?php elseif(str($item['type'])->contains('video')): ?>
                            <video
                                controls
                                src="<?php echo e($item['url']); ?>"
                                <?php if($shouldLazyLoad()): ?>
                                    preload="none"
                                <?php endif; ?>
                            ></video>
                        <?php else: ?>
                            <?php if (isset($component)) { $__componentOriginaldf8a712998df2199f6fd7a9afac78c10 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8a712998df2199f6fd7a9afac78c10 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'curator::components.document-image','data' => ['label' => ''.e($item['name']).'','iconSize' => 'xl','type' => ''.e($item['type']).'','extension' => ''.e($item['ext']).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('curator::document-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e($item['name']).'','icon-size' => 'xl','type' => ''.e($item['type']).'','extension' => ''.e($item['ext']).'']); ?>
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

                        <div class="absolute top-0 right-0">
                            <div class="relative flex items-center bg-gray-950 divide-x divide-gray-700 rounded-bl-lg shadow-md">
                                <!--[if BLOCK]><![endif]--><?php if($isMultiple): ?>
                                    <div
                                        x-sortable-handle
                                        class="flex items-center justify-center flex-none w-10 h-10 transition text-gray-400 hover:text-gray-300"
                                    >
                                        <?php echo e($getAction('reorder')); ?>

                                    </div>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <div class="flex items-center justify-center flex-none w-10 h-10">
                                    <?php if (isset($component)) { $__componentOriginalbdee036326cbc931a2e3bf686403ecb7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbdee036326cbc931a2e3bf686403ecb7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-actions::components.group','data' => ['actions' => [
                                            $getAction('view')(['url' => $item['url']]),
                                            $getAction('edit')(['id' => $item['id']]),
                                            $getAction('download')(['uuid' => $uuid]),
                                            $getAction('remove')(['uuid' => $uuid]),
                                        ],'color' => 'gray','size' => 'xs','dropdownPlacement' => 'bottom-end']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-actions::group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['actions' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                                            $getAction('view')(['url' => $item['url']]),
                                            $getAction('edit')(['id' => $item['id']]),
                                            $getAction('download')(['uuid' => $uuid]),
                                            $getAction('remove')(['uuid' => $uuid]),
                                        ]),'color' => 'gray','size' => 'xs','dropdown-placement' => 'bottom-end']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbdee036326cbc931a2e3bf686403ecb7)): ?>
<?php $attributes = $__attributesOriginalbdee036326cbc931a2e3bf686403ecb7; ?>
<?php unset($__attributesOriginalbdee036326cbc931a2e3bf686403ecb7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbdee036326cbc931a2e3bf686403ecb7)): ?>
<?php $component = $__componentOriginalbdee036326cbc931a2e3bf686403ecb7; ?>
<?php unset($__componentOriginalbdee036326cbc931a2e3bf686403ecb7); ?>
<?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!--[if BLOCK]><![endif]--><?php if(! str($item['type'])->contains('video')): ?>
                            <div class="absolute inset-x-0 bottom-0 flex items-center justify-between px-2 pt-10 pb-1 text-xs text-white bg-gradient-to-t from-black/80 to-transparent gap-3">
                                <p class="truncate"><?php echo e($item['pretty_name']); ?></p>
                                <p class="flex-shrink-0"><?php echo e($item['size_for_humans']); ?></p>
                            </div>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </ul>

        <div
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'flex items-center gap-4',
                'mt-4' => $itemsCount > 0
            ]); ?>"
        >
            <!--[if BLOCK]><![endif]--><?php if($itemsCount === 0 || $isMultiple): ?>
                <?php if(! $maxItems || $itemsCount < $maxItems): ?>
                    <?php echo e($getAction('open_curator_picker')); ?>

                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if($itemsCount > 1): ?>
                <?php echo e($getAction('removeAll')); ?>

            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/vendor/awcodes/filament-curator/src/../resources/views/components/forms/picker.blade.php ENDPATH**/ ?>