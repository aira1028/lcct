<?php if (isset($component)) { $__componentOriginala98e1fc4c58e37b9f0417ea39067f030 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala98e1fc4c58e37b9f0417ea39067f030 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.patient-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('patient-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


        <div class="">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('patient.index', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3235240721-0', $__slots ?? [], get_defined_vars());

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
<?php if (isset($__attributesOriginala98e1fc4c58e37b9f0417ea39067f030)): ?>
<?php $attributes = $__attributesOriginala98e1fc4c58e37b9f0417ea39067f030; ?>
<?php unset($__attributesOriginala98e1fc4c58e37b9f0417ea39067f030); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala98e1fc4c58e37b9f0417ea39067f030)): ?>
<?php $component = $__componentOriginala98e1fc4c58e37b9f0417ea39067f030; ?>
<?php unset($__componentOriginala98e1fc4c58e37b9f0417ea39067f030); ?>
<?php endif; ?>
<?php /**PATH C:\Users\asus\Desktop\lcct\resources\views/patient/index.blade.php ENDPATH**/ ?>