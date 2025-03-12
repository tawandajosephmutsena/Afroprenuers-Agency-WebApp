<style>
    .shadow-lg {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    .p-3 {
        padding: 0.75rem;
    }

    .bg-gray-200 {
        background-color: #edf2f7;
    }

    .rounded-t-lg {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }

    .space-x-2 > :not(template) ~ :not(template) {
        --tw-space-x-reverse: 0;
        margin-right: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
        margin-left: calc(0.5rem * var(--tw-space-x-reverse));
    }

    .h-3 {
        height: 0.75rem;
    }

    .w-3 {
        width: 0.75rem;
    }

    .bg-red-500 {
        background-color: #ef4444;
    }

    .bg-yellow-500 {
        background-color: #f59e0b;
    }

    .bg-green-500 {
        background-color: #10b981;
    }

    .text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem;
    }

    .font-semibold {
        font-weight: 600;
    }

    .mb-1 {
        margin-bottom: 0.25rem;
    }

    .text-blue-600 {
        color: #2563eb;
    }

    .hover\:underline:hover {
        text-decoration: underline;
    }

    .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }

    .text-green-600 {
        color: #059669;
    }

    .text-gray-600 {
        color: #4b5563;
    }

    .hover\:underline:hover {
        text-decoration: underline;
    }

    .text-blue-600 {
        color: #2563eb;
    }

    .hover\:underline:hover {
        text-decoration: underline;
    }

    .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }

    .text-green-600 {
        color: #059669;
    }

    .text-gray-600 {
        color: #4b5563;
    }
</style>

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
    <div x-data="{ state: $wire.$entangle('<?php echo e($getStatePath()); ?>') }">
        <div class="text-left">
            <div class="mt-4 text-gray-600 text-sm mb-2">
                <?php echo e(__('filament-general-settings::default.seo_preview_helper_text')); ?>

            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg w-full">
            <div class="flex items-center justify-between p-3 bg-gray-200 rounded-t-lg">
                <div class="flex items-center space-x-2">
                    <div class="h-3 w-3 bg-red-500 rounded-full" style="margin-right: 9px;"></div>
                    <div class="h-3 w-3 bg-yellow-500 rounded-full"></div>
                    <div class="h-3 w-3 bg-green-500 rounded-full"></div>
                </div>
                <div class="flex items-center space-x-2">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-globe-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-5 w-5 text-gray-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="p-4">
                <div class="mb-4">
                    <h3 class="text-lg font-semibold mb-1">
                        <a href="#" class="text-blue-600 hover:underline">
                            <!--[if BLOCK]><![endif]--><?php if(!empty($this->data['seo_title'])): ?>
                                <?php echo e($this->data['seo_title']); ?>

                            <?php else: ?>
                                SEO Title field
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </a>
                    </h3>
                    <p class="text-sm text-green-600">
                        <!--[if BLOCK]><![endif]--><?php if(!empty($this->data['seo_metadata']['og:url'])): ?>
                            <?php echo e($this->data['seo_metadata']['og:url']); ?>

                        <?php else: ?>
                            og:url
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </p>
                    <p class="text-sm text-gray-600 mt-1">
                        <!--[if BLOCK]><![endif]--><?php if(!empty($this->data['seo_metadata']['og:description'])): ?>
                            <?php echo e($this->data['seo_metadata']['og:description']); ?>

                        <?php else: ?>
                            og:description
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </p>
                </div>
            </div>
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
<?php endif; ?>
<?php /**PATH /Users/mac/Herd/mho/resources/views/vendor/filament-general-settings/forms/components/seo-preview.blade.php ENDPATH**/ ?>