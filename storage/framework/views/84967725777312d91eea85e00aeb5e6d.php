<?php foreach ((['page']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'columns' => 3,
    'limit' => 6,
    'show_featured_image' => true,
    'show_date' => true,
    'show_excerpt' => true,
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
    'columns' => 3,
    'limit' => 6,
    'show_featured_image' => true,
    'show_date' => true,
    'show_excerpt' => true,
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
    $articles = \App\Models\Article::query()
        ->with('featuredImage')
        ->when($order_by === 'latest', fn($query) => $query->latest())
        ->when($order_by === 'oldest', fn($query) => $query->oldest())
        ->when($order_by === 'random', fn($query) => $query->inRandomOrder())
        ->limit($limit)
        ->get();

    $gridCols = [
        1 => 'grid-cols-1',
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
        4 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
    ];
?>
<section class="bg-white dark:bg-gray-900">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-20 lg:py-20">

    <!-- Debug information -->
  
    
    <div class="grid <?php echo e($gridCols[$columns]); ?> gap-6">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <?php if($show_featured_image && $article->featuredImage): ?>
                    <a href="<?php echo e(route('articles.show', $article)); ?>">
                        
                        
                        <img class="rounded-t-lg w-full h-48 object-cover" 
                             src="<?php echo e(url('storage/' . $article->featuredImage->path)); ?>" 
                             alt="<?php echo e($article->title); ?>" />
                    </a>
                <?php else: ?>
                    <div class="w-full h-48 bg-gray-100 flex items-center justify-center">
                        <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                <?php endif; ?>
                
                <div class="p-5">
                    <?php if($show_date): ?>
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                            <?php echo e($article->created_at->format('M d, Y')); ?>

                        </span>
                    <?php endif; ?>

                    <a href="<?php echo e(route('articles.show', $article)); ?>">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <?php echo e($article->title); ?>

                        </h5>
                    </a>

                    <?php if($show_excerpt): ?>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <?php echo e($article->excerpt); ?>

                        </p>
                    <?php endif; ?>

                    <a href="<?php echo e(route('articles.show', $article)); ?>" 
                       class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
</section><?php /**PATH /Users/mac/Herd/an/resources/views/components/filament-fabricator/page-blocks/blog_posts.blade.php ENDPATH**/ ?>