<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['topButtonLink','topbutton','title','content','button01Link','button01','title02','partnerLogos']));

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

foreach (array_filter((['topButtonLink','topbutton','title','content','button01Link','button01','title02','partnerLogos']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc31b4ee314bd30929d3d2d4bb87b0bda = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc31b4ee314bd30929d3d2d4bb87b0bda = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.filament-fabricator.page-blocks.hero03','data' => ['topButtonLink' => $topButtonLink,'topbutton' => $topbutton,'title' => $title,'content' => $content,'button01Link' => $button01Link,'button01' => $button01,'title02' => $title02,'partnerLogos' => $partnerLogos]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-fabricator.page-blocks.hero03'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['topButtonLink' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($topButtonLink),'topbutton' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($topbutton),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($content),'button01Link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button01Link),'button01' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($button01),'title02' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title02),'partnerLogos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partnerLogos)]); ?>

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
<?php endif; ?><?php /**PATH /Users/mac/Herd/an/storage/framework/views/75a5c9d2aa4798723f04847d289cae3e.blade.php ENDPATH**/ ?>