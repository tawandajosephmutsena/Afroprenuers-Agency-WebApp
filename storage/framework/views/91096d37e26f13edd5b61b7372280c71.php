<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['partnerLogos','topButtonLink','topbutton','title','content','button01Link','button01','button02Link','title02','button01Link','button01']));

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

foreach (array_filter((['partnerLogos','topButtonLink','topbutton','title','content','button01Link','button01','button02Link','title02','button01Link','button01']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc31b4ee314bd30929d3d2d4bb87b0bda = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc31b4ee314bd30929d3d2d4bb87b0bda = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.hero03','data' => ['partnerLogos' => $partnerLogos,'topButtonLink' => $topButtonLink,'topbutton' => $topbutton,'title' => $title,'content' => $content,'button01Link' => $button01Link,'button01' => $button01,'button02Link' => $button02Link,'title02' => $title02]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.hero03'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['partnerLogos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partnerLogos),'topButtonLink' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($topButtonLink),'topbutton' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($topbutton),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($content),'Button01Link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button01Link),'Button01' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button01),'Button02Link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button02Link),'title02' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title02),'button01Link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button01Link),'button01' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button01)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc31b4ee314bd30929d3d2d4bb87b0bda)): ?>
<?php $attributes = $__attributesOriginalc31b4ee314bd30929d3d2d4bb87b0bda; ?>
<?php unset($__attributesOriginalc31b4ee314bd30929d3d2d4bb87b0bda); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc31b4ee314bd30929d3d2d4bb87b0bda)): ?>
<?php $component = $__componentOriginalc31b4ee314bd30929d3d2d4bb87b0bda; ?>
<?php unset($__componentOriginalc31b4ee314bd30929d3d2d4bb87b0bda); ?>
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/8a93df4f9bbd2f01f8f023273ddb483e.blade.php ENDPATH**/ ?>