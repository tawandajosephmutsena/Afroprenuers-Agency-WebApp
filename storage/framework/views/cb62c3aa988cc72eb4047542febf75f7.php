<?php if (isset($component)) { $__componentOriginalbe23554f7bded3778895289146189db7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe23554f7bded3778895289146189db7 = $attributes; } ?>
<?php $component = Filament\View\LegacyComponents\Page::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Filament\View\LegacyComponents\Page::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="mb-6">
        <?php echo e($this->form); ?>

    </div>

    <div
        x-data="kanbanBoard()"
        class="flex space-x-4 overflow-x-auto pb-4"
    >
        <?php
            $statuses = [
                'backlog' => 'gray',
                'todo' => 'blue',
                'in_progress' => 'yellow',
                'review' => 'purple',
                'done' => 'green'
            ];
        ?>

        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status => $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex-1 min-w-[300px]">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                    <div class="p-3 border-b border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-medium">
                            <span class="inline-block w-3 h-3 rounded-full bg-<?php echo e($color); ?>-500 mr-2"></span>
                            <?php echo e(Str::title(str_replace('_', ' ', $status))); ?>

                            <span class="text-gray-400 text-sm ml-1">
                                (<?php echo e(($tasks[$status] ?? collect())->count()); ?>)
                            </span>
                        </h3>
                    </div>

                    <div
                        x-on:dragover.prevent
                        x-on:drop="dropTask($event, '<?php echo e($status); ?>')"
                        class="p-3 min-h-[calc(100vh-20rem)] bg-gray-50 dark:bg-gray-900 rounded-b-lg"
                    >
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tasks[$status] ?? collect(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                id="task-<?php echo e($task->id); ?>"
                                draggable="true"
                                x-on:dragstart="startDragging($event, <?php echo e($task->id); ?>)"
                                class="bg-white dark:bg-gray-800 p-3 mb-2 rounded-lg shadow-sm border-2 border-transparent hover:border-primary-500 cursor-move"
                            >
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-500">#<?php echo e($task->id); ?></span>
                                    <span class="px-2 py-1 text-xs rounded-full" style="background-color: <?php echo e($task->priority_color); ?>">
                                        <?php echo e($task->priority); ?>

                                    </span>
                                </div>

                                <h4 class="text-sm font-medium mb-2"><?php echo e($task->title); ?></h4>

                                <!--[if BLOCK]><![endif]--><?php if($task->description): ?>
                                    <p class="text-xs text-gray-500 mb-2">
                                        <?php echo e(Str::limit($task->description, 100)); ?>

                                    </p>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <!--[if BLOCK]><![endif]--><?php if($task->due_date): ?>
                                            <span class="text-xs text-gray-500">
                                                📅 <?php echo e($task->due_date->format('M d')); ?>

                                            </span>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>

                                    <!--[if BLOCK]><![endif]--><?php if($task->assignee): ?>
                                        <div class="flex items-center">
<img
    src="<?php echo e($task->assignee->getFilamentAvatarUrl() ?? 'path/to/default-avatar.png'); ?>"
    alt="<?php echo e($task->assignee->name); ?>"
    class="w-6 h-6 rounded-full"
>
                                        </div>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <script>
        function kanbanBoard() {
            return {
                draggingTaskId: null,

                startDragging(event, taskId) {
                    this.draggingTaskId = taskId;
                    event.dataTransfer.effectAllowed = 'move';
                },

                dropTask(event, newStatus) {
                    if (this.draggingTaskId) {
                        window.Livewire.find('<?php echo e($_instance->getId()); ?>').updateTaskStatus(this.draggingTaskId, newStatus);
                        this.draggingTaskId = null;
                    }
                }
            }
        }
        </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe23554f7bded3778895289146189db7)): ?>
<?php $attributes = $__attributesOriginalbe23554f7bded3778895289146189db7; ?>
<?php unset($__attributesOriginalbe23554f7bded3778895289146189db7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe23554f7bded3778895289146189db7)): ?>
<?php $component = $__componentOriginalbe23554f7bded3778895289146189db7; ?>
<?php unset($__componentOriginalbe23554f7bded3778895289146189db7); ?>
<?php endif; ?>
<?php /**PATH /Users/mac/Herd/an/resources/views/filament/pages/kanban-board.blade.php ENDPATH**/ ?>