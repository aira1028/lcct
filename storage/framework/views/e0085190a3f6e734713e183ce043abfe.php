<?php if (isset($component)) { $__componentOriginal1e3104080c84f48e29bb256e3b9852ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e3104080c84f48e29bb256e3b9852ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.staff-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('staff-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Dental</h2>
    <div class="">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('staff.dental', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1248026809-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e3104080c84f48e29bb256e3b9852ae)): ?>
<?php $attributes = $__attributesOriginal1e3104080c84f48e29bb256e3b9852ae; ?>
<?php unset($__attributesOriginal1e3104080c84f48e29bb256e3b9852ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e3104080c84f48e29bb256e3b9852ae)): ?>
<?php $component = $__componentOriginal1e3104080c84f48e29bb256e3b9852ae; ?>
<?php unset($__componentOriginal1e3104080c84f48e29bb256e3b9852ae); ?>
<?php endif; ?>
<?php /**PATH C:\Users\asus\Desktop\lcct\resources\views/staff/dental.blade.php ENDPATH**/ ?>