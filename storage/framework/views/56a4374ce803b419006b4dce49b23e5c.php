<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['class']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['class']); ?>
<?php foreach (array_filter((['class']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal95a617ad9ec1e98ca44137a3885abf9b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal95a617ad9ec1e98ca44137a3885abf9b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'wireui::components.icons.outline.dots-vertical','data' => ['class' => $class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('wireui::icons.outline.dots-vertical'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal95a617ad9ec1e98ca44137a3885abf9b)): ?>
<?php $attributes = $__attributesOriginal95a617ad9ec1e98ca44137a3885abf9b; ?>
<?php unset($__attributesOriginal95a617ad9ec1e98ca44137a3885abf9b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal95a617ad9ec1e98ca44137a3885abf9b)): ?>
<?php $component = $__componentOriginal95a617ad9ec1e98ca44137a3885abf9b; ?>
<?php unset($__componentOriginal95a617ad9ec1e98ca44137a3885abf9b); ?>
<?php endif; ?><?php /**PATH C:\Users\asus\Desktop\lcct\storage\framework\views/ce2101c947694723d663b20767b0441d.blade.php ENDPATH**/ ?>