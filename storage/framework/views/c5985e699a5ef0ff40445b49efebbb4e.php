<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['columns','limit','showFeaturedImage','showDate','showExcerpt','orderBy']));

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

foreach (array_filter((['columns','limit','showFeaturedImage','showDate','showExcerpt','orderBy']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginald3b8294b216d8418fbdae93fc6177ac5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald3b8294b216d8418fbdae93fc6177ac5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.blog_posts','data' => ['columns' => $columns,'limit' => $limit,'showFeaturedImage' => $showFeaturedImage,'showDate' => $showDate,'showExcerpt' => $showExcerpt,'orderBy' => $orderBy]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.blog_posts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns),'limit' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($limit),'show_featured_image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showFeaturedImage),'show_date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showDate),'show_excerpt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showExcerpt),'order_by' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orderBy)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald3b8294b216d8418fbdae93fc6177ac5)): ?>
<?php $attributes = $__attributesOriginald3b8294b216d8418fbdae93fc6177ac5; ?>
<?php unset($__attributesOriginald3b8294b216d8418fbdae93fc6177ac5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3b8294b216d8418fbdae93fc6177ac5)): ?>
<?php $component = $__componentOriginald3b8294b216d8418fbdae93fc6177ac5; ?>
<?php unset($__componentOriginald3b8294b216d8418fbdae93fc6177ac5); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/1d887c8b695d6524da3247a85dadbe6b.blade.php ENDPATH**/ ?>