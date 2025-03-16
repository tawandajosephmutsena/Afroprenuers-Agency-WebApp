<?php
    $heading = $this->getHeading();
    $description = $this->getDescription();
    $color = $this->getColor();
    $filters = $this->getFilters();
?>

<div class="fi-wi-stats-overview-card relative rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10">
    <div class="grid gap-y-2">
        <div class="flex items-center gap-x-2">
            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                <?php echo e($description); ?>

            </span>
            <!--[if BLOCK]><![endif]--><?php if($filters): ?>
                    <?php if (isset($component)) { $__componentOriginal505efd9768415fdb4543e8c564dad437 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal505efd9768415fdb4543e8c564dad437 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.wrapper','data' => ['inlinePrefix' => true,'wire:target' => 'filter','class' => 'ms-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::input.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['inline-prefix' => true,'wire:target' => 'filter','class' => 'ms-auto']); ?>
                        <?php if (isset($component)) { $__componentOriginal97dc683fe4ff7acce9e296503563dd85 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal97dc683fe4ff7acce9e296503563dd85 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.select','data' => ['inlinePrefix' => true,'wire:model.live' => 'filter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['inline-prefix' => true,'wire:model.live' => 'filter']); ?>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value); ?>">
                                    <?php echo e($label); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal97dc683fe4ff7acce9e296503563dd85)): ?>
<?php $attributes = $__attributesOriginal97dc683fe4ff7acce9e296503563dd85; ?>
<?php unset($__attributesOriginal97dc683fe4ff7acce9e296503563dd85); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal97dc683fe4ff7acce9e296503563dd85)): ?>
<?php $component = $__componentOriginal97dc683fe4ff7acce9e296503563dd85; ?>
<?php unset($__componentOriginal97dc683fe4ff7acce9e296503563dd85); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal505efd9768415fdb4543e8c564dad437)): ?>
<?php $attributes = $__attributesOriginal505efd9768415fdb4543e8c564dad437; ?>
<?php unset($__attributesOriginal505efd9768415fdb4543e8c564dad437); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal505efd9768415fdb4543e8c564dad437)): ?>
<?php $component = $__componentOriginal505efd9768415fdb4543e8c564dad437; ?>
<?php unset($__componentOriginal505efd9768415fdb4543e8c564dad437); ?>
<?php endif; ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <div class="text-3xl font-semibold tracking-tight text-gray-950 dark:text-white">
            <?php echo e($heading); ?>

        </div>
    </div>

    <div
        <?php if($pollingInterval = $this->getPollingInterval()): ?>
            wire:poll.<?php echo e($pollingInterval); ?>="updateChartData"
        <?php endif; ?>

    >
        <div
            ax-load
            ax-load-src="<?php echo e(\Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('chart', 'filament/widgets')); ?>"
            wire:ignore
            x-data="chart({
                cachedData: <?php echo \Illuminate\Support\Js::from($this->getCachedData())->toHtml() ?>,
                options: <?php echo \Illuminate\Support\Js::from($this->getOptions())->toHtml() ?>,
                type: <?php echo \Illuminate\Support\Js::from($this->getType())->toHtml() ?>,
            })"
            x-ignore
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'absolute inset-x-0 bottom-0 overflow-hidden rounded-b-xl',
            ]); ?>"
            style="<?php echo \Illuminate\Support\Arr::toCssStyles([
                \Filament\Support\get_color_css_variables($color, shades: [50, 400, 500]) => $color !== 'gray',
            ]) ?>"
            @updateChartData.camel="console.log('updateChartData')"
        >
            <canvas :id="$id('fi-wi-stats-overview-card')" x-ref="canvas" class="h-6"></canvas>

            <span
                x-ref="backgroundColorElement"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    match ($color) {
                        'gray' => 'text-gray-100 dark:text-gray-800',
                        default => 'text-custom-50 dark:text-custom-400/10',
                    },
                ]); ?>"
            ></span>

            <span
                x-ref="borderColorElement"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    match ($color) {
                        'gray' => 'text-gray-400',
                        default => 'text-custom-500 dark:text-custom-400',
                    },
                ]); ?>"
            ></span>

            <span
                x-ref="gridColorElement"
                class="text-gray-300 dark:text-gray-700"
            ></span>

            <span
                x-ref="textColorElement"
                class="text-gray-500 dark:text-gray-400"
            ></span>
        </div>
    </div>
</div>
<?php /**PATH /Users/mac/Herd/an/vendor/bezhansalleh/filament-google-analytics/src/../resources/views/widgets/active-users.blade.php ENDPATH**/ ?>