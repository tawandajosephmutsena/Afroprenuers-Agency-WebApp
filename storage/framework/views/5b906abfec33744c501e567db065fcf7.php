<?php foreach ((['page']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'heading',
    'clientLogos' => [],
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
    'heading',
    'clientLogos' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    use Awcodes\Curator\Models\Media;
?>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
        <h2 class="mb-8 lg:mb-16 text-3xl font-bold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl"><?php echo e($heading); ?></h2>
        <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
            <?php if(!empty($clientLogos)): ?>
                <?php $__currentLoopData = $clientLogos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <?php if(isset($logo['logo'])): ?>
                            <?php
                                $mediaItem = Media::find($logo['logo']);
                            ?>
                            <?php if($mediaItem): ?>
                                <img
                                    src="<?php echo e(url('storage/' . $mediaItem->path)); ?>"
                                    alt="<?php echo e($logo['alt'] ?? 'Client logo'); ?>"
                                    loading="lazy"
                                    class="h-12 max-w-full object-contain"
                                >
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="col-span-full text-center text-gray-500">
                    No client logos available
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH /Users/mac/Herd/an/resources/views/components/filament-fabricator/page-blocks/clientlogo.blade.php ENDPATH**/ ?>