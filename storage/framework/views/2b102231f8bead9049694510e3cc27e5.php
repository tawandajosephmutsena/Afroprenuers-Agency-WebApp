<?php
    $hasMessage = session()->has('success') || session()->has('error');
?>

<div 
    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['d-none' => !$hasMessage]); ?>">
    <!--[if BLOCK]><![endif]--><?php if($hasMessage): ?>
        <div x-data="{ showAlert: true }" x-init="setTimeout(() => showAlert = false, 5000)">
            <template x-if="showAlert">
                <div
                    role="alert"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'custom-alert' => session()->has('success'),
                    'custom-danger-alert' => session()->has('error'),
                    ]); ?>">
                    <div class="flex justify-between">
                        <div class="flex">
                            <div class="py-1">
                                <svg class="custom-alert-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="custom-alert-title">
                                    <?php echo e(__('filasortable::filasortable.Sort the table just by drag and drop.')); ?>

                                </p>
                                <p class="custom-alert-message">
                                    <!--[if BLOCK]><![endif]--><?php if(session()->has('success')): ?>
                                        <?php echo e(session('success')); ?>

                                    <?php elseif(session()->has('error')): ?>
                                        <?php echo e(session('error')); ?>

                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </p>
                            </div>
                        </div>
        
                        <!-- Close Button -->
                        <button @click="showAlert = false" class="text-teal-500 h-9 w-9 shadow-lg rounded-full bg-white hover:text-teal-700 font-bold text-lg">
                            &times;
                        </button>
                    </div>
                </div>
            </template>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /Users/mac/Herd/mho/resources/views/vendor/filasortable/livewire/message-component.blade.php ENDPATH**/ ?>