<div>
    <?php if (isset($component)) { $__componentOriginal166a02a7c5ef5a9331faf66fa665c256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.page.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-panels::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginalee08b1367eba38734199cf7829b1d1e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee08b1367eba38734199cf7829b1d1e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.section.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <div>
                <div class="flex justify-between xl:gap-60 lg:gap-48 md:gap-16 sm:gap-8 sm:flex-row flex-col gap-4">
                    <div class="w-full">
                        <div>
                            <img src="<?php echo e(url('storage/' . setting('site_logo'))); ?>" alt="<?php echo e(setting('site_name')); ?>" class="w-16">
                        </div>
                        <div class="flex flex-col">
                            <div class="text-sm text-gray-400  mt-3">
                                <?php echo e(trans('filament-invoices::messages.invoices.view.bill_from')); ?>:
                            </div>
                            <div class="text-lg font-bold">
                                <?php echo e($this->getRecord()->billedFrom->name); ?>

                            </div>
                            <div class="text-sm">
                                <?php echo e($this->getRecord()->billedFrom->phone); ?>

                            </div>
                            <div class="text-sm">
                                <?php echo e($this->getRecord()->billedFrom->address); ?>

                            </div>
                            <div class="text-sm">
                                <?php echo e($this->getRecord()->billedFrom->zip); ?> <?php echo e($this->getRecord()->billedFrom->city); ?>

                            </div>
                            <div class="text-sm">
                                <?php echo e($this->getRecord()->billedFrom->country?->name); ?>

                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="mt-4">
                                <div class="text-sm text-gray-400">
                                    <?php echo e(trans('filament-invoices::messages.invoices.view.bill_to')); ?>:
                                </div>
                                <div class="text-lg font-bold">
                                    <?php echo e($this->getRecord()->billedFor?->name); ?>

                                </div>
                                <div class="text-sm">
                                    <?php echo e($this->getRecord()->billedFor?->email); ?>

                                </div>
                                <div class="text-sm">
                                    <?php echo e($this->getRecord()->billedFor?->phone); ?>

                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col">
                        <div class="flex justify-end font-bold">
                            <div>
                                <div>
                                    <h1 class="text-3xl uppercase"><?php echo e(trans('filament-invoices::messages.invoices.view.invoice')); ?></h1>
                                </div>
                                <div>
                                    #<?php echo e($this->getRecord()->uuid); ?>

                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end h-full">
                            <div class="flex flex-col justify-end">
                                <div>
                                    <div class="flex justify-between gap-4">
                                        <div class="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.issue_date')); ?> : </div>
                                        <div><?php echo e($this->getRecord()->created_at->toDateString()); ?></div>
                                    </div>
                                    <div class="flex justify-between gap-4">
                                        <div class="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.due_date')); ?> : </div>
                                        <div><?php echo e($this->getRecord()->due_date->toDateString()); ?></div>
                                    </div>
                                    <div class="flex justify-between gap-4">
                                        <div class="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.status')); ?> : </div>
                                        <div><?php echo e(type_of($this->getRecord()->status, 'invoices', 'status')->name); ?></div>
                                    </div>
                                    <div class="flex justify-between gap-4">
                                        <div class="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.type')); ?> : </div>
                                        <div><?php echo e(type_of($this->getRecord()->type, 'invoices', 'type')->name); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="border border-gray-200 dark:border-gray-700 rounded-lg my-4 px-2">
                        <div class="flex flex-col">
                            <div class="flex justify-between  px-4 py-2 border-gray-200 dark:border-gray-700 font-bold border-b text-start">
                                <div class="p-2 w-full">
                                    <?php echo e(trans('filament-invoices::messages.invoices.view.item')); ?>

                                </div>
                                <div class="p-2 w-full">
                                    <?php echo e(trans('filament-invoices::messages.invoices.view.total')); ?>

                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 divide-y divide-gray-100 dark:divide-white/5">
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->getRecord()->invoicesitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex justify-between px-4 py-2">
                                    <div class="flex flex-col w-full">
                                        <div class="flex justify-start">
                                            <div>
                                                <div class="font-bold text-lg">
                                                    <?php echo e($item->item); ?>

                                                </div>
                                                <!--[if BLOCK]><![endif]--><?php if($item->description): ?>
                                                    <div class="text-gray-400">
                                                        <?php echo e($item->description); ?>

                                                    </div>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                <!--[if BLOCK]><![endif]--><?php if($item->options): ?>
                                                    <div class="text-gray-400">
                                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $item->options  ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label=>$options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <span><?php echo e(str($label)->ucfirst()); ?></span> : <?php echo e($options); ?> <br>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="p-2">
                                            <div class="flex flex-col mt-2">
                                                <div>
                                                    <div class="flex justify-between">
                                                        <span class="text-sm text-gray-400 uppercase w-full"><?php echo e(trans('filament-invoices::messages.invoices.view.price')); ?>:</span>
                                                        <span class="w-full">
                                                    <?php echo e(number_format($item->price, 2)); ?><small class="text-md font-normal"><?php echo e($this->getRecord()->currency?->iso); ?> </small>
                                                </span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between">
                                                        <span class="text-sm text-gray-400 uppercase w-full"><?php echo e(trans('filament-invoices::messages.invoices.view.vat')); ?>:</span>
                                                        <span class="w-full">
                                                    <?php echo e(number_format($item->tax, 2)); ?><small class="text-md font-normal"><?php echo e($this->getRecord()->currency?->iso); ?></small>
                                                </span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between">
                                                        <span class="text-sm text-gray-400 uppercase w-full"><?php echo e(trans('filament-invoices::messages.invoices.view.discount')); ?>:</span>
                                                        <span class="w-full">
                                                    <?php echo e(number_format($item->discount, 2)); ?><small class="text-md font-normal"><?php echo e($this->getRecord()->currency?->iso); ?></small>
                                                </span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between">
                                                        <span class="text-sm text-gray-400 uppercase w-full"><?php echo e(trans('filament-invoices::messages.invoices.view.qty')); ?>:</span>
                                                        <span class="w-full">
                                                    <?php echo e($item->qty); ?>

                                                </span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex justify-between">
                                                        <span class="text-sm text-gray-400 uppercase w-full"><?php echo e(trans('filament-invoices::messages.invoices.view.total')); ?>:</span>
                                                        <span class="w-full font-bold">
                                                        <?php echo e(number_format($item->total, 2)); ?><small class="text-md font-normal"><?php echo e($this->getRecord()->currency?->iso); ?></small>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                    <div class="flex justify-between mt-6">
                        <div class="flex flex-col justify-end gap-4 w-full">
                            <!--[if BLOCK]><![endif]--><?php if($this->getRecord()->is_bank_transfer): ?>
                                <div>
                                    <div class="mb-2 text-xl">
                                        <?php echo e(trans('filament-invoices::messages.invoices.view.bank_account')); ?>

                                    </div>
                                    <div class="text-sm flex flex-col">
                                        <div>
                                            <span clas="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.name')); ?></span> : <span class="font-bold"><?php echo e($this->getRecord()->bank_name); ?></span>
                                        </div>
                                        <div>
                                            <span clas="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.address')); ?></span> : <span class="font-bold"><?php echo e($this->getRecord()->bank_address); ?>, <?php echo e($this->getRecord()->bank_city); ?>, <?php echo e($this->getRecord()->bank_country); ?></span>
                                        </div>
                                        <div>
                                            <span clas="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.branch')); ?></span> : <span class="font-bold"><?php echo e($this->getRecord()->bank_branch); ?></span>
                                        </div>
                                        <div>
                                            <span clas="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.swift')); ?></span> : <span class="font-bold"><?php echo e($this->getRecord()->bank_swift); ?></span>
                                        </div>
                                        <div>
                                            <span clas="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.account')); ?></span> : <span class="font-bold"><?php echo e($this->getRecord()->bank_account); ?></span>
                                        </div>
                                        <div>
                                            <span clas="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.owner')); ?></span> : <span class="font-bold"><?php echo e($this->getRecord()->bank_account_owner); ?></span>
                                        </div>
                                        <div>
                                            <span clas="text-gray-400"><?php echo e(trans('filament-invoices::messages.invoices.view.iban')); ?></span> : <span class="font-bold"><?php echo e($this->getRecord()->bank_iban); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                            <div>
                                <div class="mb-2 text-xl">
                                    <?php echo e(trans('filament-invoices::messages.invoices.view.signature')); ?>

                                </div>
                                <div class="text-sm text-gray-400">
                                    <div>
                                        <?php echo e($this->getRecord()->billedFrom?->name); ?>

                                    </div>
                                    <div>
                                        <?php echo e($this->getRecord()->billedFrom?->email); ?>

                                    </div>
                                    <div>
                                        <?php echo e($this->getRecord()->billedFrom?->phone); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 mt-4  w-full">
                            <div class="flex justify-between">
                                <div class="font-bold">
                                    <?php echo e(trans('filament-invoices::messages.invoices.view.subtotal')); ?>

                                </div>
                                <div>
                                    <?php echo e(number_format(($this->getRecord()->total + $this->getRecord()->discount) - ($this->getRecord()->vat + $this->getRecord()->shipping), 2)); ?><small class="text-md font-normal"><?php echo e($this->getRecord()->currency?->iso); ?></small>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="font-bold">
                                    <?php echo e(trans('filament-invoices::messages.invoices.view.tax')); ?>

                                </div>
                                <div>
                                    <?php echo e(number_format($this->getRecord()->vat, 2)); ?><small class="text-md font-normal"><?php echo e($this->getRecord()->currency?->iso); ?></small>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="font-bold">
                                    <?php echo e(trans('filament-invoices::messages.invoices.view.discount')); ?>

                                </div>
                                <div>
                                    <?php echo e(number_format($this->getRecord()->discount, 2)); ?><small class="text-md font-normal"><?php echo e($this->getRecord()->currency?->iso); ?></small>
                                </div>
                            </div>
                            <div class="flex justify-between border-b border-gray-200 dark:border-gray-700 pb-4">
                                <div class="font-bold">
                                    <?php echo e(trans('filament-invoices::messages.invoices.view.paid')); ?>

                                </div>
                                <div>
                                    <?php echo e(number_format($this->getRecord()->paid, 2)); ?><small class="text-md font-normal"><?php echo e($this->getRecord()->currency?->iso); ?></small>
                                </div>
                            </div>
                            <div class="flex justify-between text-xl font-bold">
                                <div>
                                    <?php echo e(trans('filament-invoices::messages.invoices.view.balance_due')); ?>

                                </div>
                                <div>
                                    <?php echo e(number_format($this->getRecord()->total-$this->getRecord()->paid, 2)); ?><small class="text-md font-normal"><?php echo e($this->getRecord()->currency?->iso); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if($this->getRecord()->notes): ?>
                        <div class="border-b border-gray-200 dark:border-gray-700 my-4"></div>
                        <div>
                            <div class="mb-2 text-xl">
                                <?php echo e(trans('filament-invoices::messages.invoices.view.notes')); ?>

                            </div>
                            <div class="text-sm text-gray-400">
                                <?php echo $this->getRecord()->notes; ?>

                            </div>
                        </div`>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $attributes = $__attributesOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $component = $__componentOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__componentOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
        <div class="no-print">
            <?php
                $relationManagers = $this->getRelationManagers();
                $hasCombinedRelationManagerTabsWithContent = $this->hasCombinedRelationManagerTabsWithContent();
            ?>
            <!--[if BLOCK]><![endif]--><?php if(count($relationManagers)): ?>
                <?php if (isset($component)) { $__componentOriginal66235374c4c55de4d5fac61c84f69826 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66235374c4c55de4d5fac61c84f69826 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.resources.relation-managers','data' => ['activeLocale' => isset($activeLocale) ? $activeLocale : null,'activeManager' => $this->activeRelationManager ?? ($hasCombinedRelationManagerTabsWithContent ? null : array_key_first($relationManagers)),'contentTabLabel' => $this->getContentTabLabel(),'contentTabIcon' => $this->getContentTabIcon(),'contentTabPosition' => $this->getContentTabPosition(),'managers' => $relationManagers,'ownerRecord' => $record,'pageClass' => static::class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-panels::resources.relation-managers'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active-locale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($activeLocale) ? $activeLocale : null),'active-manager' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->activeRelationManager ?? ($hasCombinedRelationManagerTabsWithContent ? null : array_key_first($relationManagers))),'content-tab-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getContentTabLabel()),'content-tab-icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getContentTabIcon()),'content-tab-position' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getContentTabPosition()),'managers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($relationManagers),'owner-record' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($record),'page-class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(static::class)]); ?>
                    <!--[if BLOCK]><![endif]--><?php if($hasCombinedRelationManagerTabsWithContent): ?>
                         <?php $__env->slot('content', null, []); ?> 
                            <!--[if BLOCK]><![endif]--><?php if($this->hasInfolist()): ?>
                                <?php echo e($this->infolist); ?>

                            <?php else: ?>
                                <?php echo e($this->form); ?>

                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                         <?php $__env->endSlot(); ?>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66235374c4c55de4d5fac61c84f69826)): ?>
<?php $attributes = $__attributesOriginal66235374c4c55de4d5fac61c84f69826; ?>
<?php unset($__attributesOriginal66235374c4c55de4d5fac61c84f69826); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66235374c4c55de4d5fac61c84f69826)): ?>
<?php $component = $__componentOriginal66235374c4c55de4d5fac61c84f69826; ?>
<?php unset($__componentOriginal66235374c4c55de4d5fac61c84f69826); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $attributes = $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $component = $__componentOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>


    <style type="text/css" media="print">
        .fi-section-content-ctn {
            padding: 0 !important;
            border: none !important;
        }
        .fi-section {
            border: none !important;
            box-shadow: none !important;
        }
        .fi-section-content {
            border: none !important;
            box-shadow: none !important;
        }
        .fi-main {
            margin: 0 !important;
            padding: 0 !important;
            background-color: white !important;
            color: black !important;
        }
        .no-print { display: none; !important; }
        .fi-header { display: none; !important; }
        .fi-topbar { display: none; !important; }
        .fi-sidebar { display: none; !important; }
        .fi-sidebar-close-overlay { display: none; !important; }
    </style>

</div>
<?php /**PATH /Users/mac/Herd/an/resources/views/vendor/filament-invoices/pages/view-invoice.blade.php ENDPATH**/ ?>