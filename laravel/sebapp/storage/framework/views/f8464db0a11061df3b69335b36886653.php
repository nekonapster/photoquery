<?php if (isset($component)) { $__componentOriginald53eae655aa529be20d5574981015689 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald53eae655aa529be20d5574981015689 = $attributes; } ?>
<?php $component = App\View\Components\TestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('test-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('martin', null, []); ?> 
        <h1>HOLA SOY MARTIN</h1>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald53eae655aa529be20d5574981015689)): ?>
<?php $attributes = $__attributesOriginald53eae655aa529be20d5574981015689; ?>
<?php unset($__attributesOriginald53eae655aa529be20d5574981015689); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald53eae655aa529be20d5574981015689)): ?>
<?php $component = $__componentOriginald53eae655aa529be20d5574981015689; ?>
<?php unset($__componentOriginald53eae655aa529be20d5574981015689); ?>
<?php endif; ?>
<?php /**PATH C:\Users\G14\Documents\MEGA_G14\VSCode\WWW\laravel\sebapp\resources\views/martin.blade.php ENDPATH**/ ?>