<?php if (isset($component)) { $__componentOriginald489e48d6214ecaf87e4b6a8ce684ad1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald489e48d6214ecaf87e4b6a8ce684ad1 = $attributes; } ?>
<?php $component = Filament\View\LegacyComponents\Widget::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Filament\View\LegacyComponents\Widget::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal9b945b32438afb742355861768089b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b945b32438afb742355861768089b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <!--[if BLOCK]><![endif]--><?php if($activeTask): ?>
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-medium"><?php echo e($activeTask->title); ?></h3>
                    <button
                        wire:click="toggleFocusMode"
                        class="px-4 py-2 text-sm font-medium rounded-md <?php echo e($focusModeActive ? 'bg-red-600 text-white' : 'bg-primary-600 text-white'); ?>"
                    >
                        <?php echo e($focusModeActive ? 'Exit Focus Mode' : 'Start Focus Mode'); ?>

                    </button>
                </div>

                <!--[if BLOCK]><![endif]--><?php if($focusModeActive): ?>
                    <div class="space-y-4">
                        <div class="relative pt-1">
                            <div class="flex mb-2 items-center justify-between">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-primary-600 bg-primary-200">
                                        Progress
                                    </span>
                                </div>
                                <div class="text-right">
                                    <span class="text-xs font-semibold inline-block text-primary-600">
                                        <?php echo e($currentStep + 1); ?>/<?php echo e(count($breakdownSteps)); ?>

                                    </span>
                                </div>
                            </div>
                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-primary-200">
                                <div
                                    style="width: <?php echo e($progress); ?>%"
                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500 transition-all duration-500"
                                ></div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <h4 class="font-medium">Current Step:</h4>
                            <p class="text-gray-700"><?php echo e($breakdownSteps[$currentStep]); ?></p>

                            <button
                                wire:click="completeStep"
                                class="w-full mt-4 px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                            >
                                Complete Step
                            </button>
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php else: ?>
            <div class="text-center text-gray-500">
                Select a task to enter focus mode
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b945b32438afb742355861768089b04)): ?>
<?php $attributes = $__attributesOriginal9b945b32438afb742355861768089b04; ?>
<?php unset($__attributesOriginal9b945b32438afb742355861768089b04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b945b32438afb742355861768089b04)): ?>
<?php $component = $__componentOriginal9b945b32438afb742355861768089b04; ?>
<?php unset($__componentOriginal9b945b32438afb742355861768089b04); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald489e48d6214ecaf87e4b6a8ce684ad1)): ?>
<?php $attributes = $__attributesOriginald489e48d6214ecaf87e4b6a8ce684ad1; ?>
<?php unset($__attributesOriginald489e48d6214ecaf87e4b6a8ce684ad1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald489e48d6214ecaf87e4b6a8ce684ad1)): ?>
<?php $component = $__componentOriginald489e48d6214ecaf87e4b6a8ce684ad1; ?>
<?php unset($__componentOriginald489e48d6214ecaf87e4b6a8ce684ad1); ?>
<?php endif; ?>
<?php /**PATH /Users/mac/Herd/an/resources/views/filament/Widgets/task-focus-mode.blade.php ENDPATH**/ ?>