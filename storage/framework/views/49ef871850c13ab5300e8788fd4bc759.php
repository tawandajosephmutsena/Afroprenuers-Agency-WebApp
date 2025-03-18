<?php foreach ((['page']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'limit' => 6,
    'show_image' => true,
    'show_price' => true,
    'show_description' => true,
    'order_by' => 'latest',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'limit' => 6,
    'show_image' => true,
    'show_price' => true,
    'show_description' => true,
    'order_by' => 'latest',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $services = \App\Models\Service::query()
        ->when($order_by === 'latest', fn($query) => $query->latest())
        ->when($order_by === 'oldest', fn($query) => $query->oldest())
        ->when($order_by === 'random', fn($query) => $query->inRandomOrder())
        ->limit($limit)
        ->get();
?>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="grid gap-8 mb-6">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <?php if($show_image && $service->image): ?>
                        <img 
                            class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" 
                            src="<?php echo e(url('storage/' . $service->image)); ?>" 
                            alt="<?php echo e($service->name); ?>"
                        >
                    <?php endif; ?>
                    
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <?php echo e($service->name); ?>

                            <?php if($show_price): ?>
                                <span class="text-lg font-semibold text-primary-600 dark:text-primary-500">
                                    $<?php echo e(number_format($service->price, 2)); ?>

                                </span>
                            <?php endif; ?>
                        </h5>
                        
                        <?php if($show_description): ?>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                <?php echo e($service->description); ?>

                            </p>
                        <?php endif; ?>
                        
                        <div class="flex items-center space-x-2">
                            <?php if($service->duration): ?>
                                <span class="text-sm text-gray-500 dark:text-gray-400">
                                    <i class="heroicon-o-clock"></i> <?php echo e($service->duration); ?> minutes
                                </span>
                            <?php endif; ?>
                            <?php if($service->service_type): ?>
                                <span class="text-sm text-gray-500 dark:text-gray-400">
                                    | <?php echo e($service->service_type); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH /Users/mac/Herd/an/resources/views/components/filament-fabricator/page-blocks/services_list.blade.php ENDPATH**/ ?>