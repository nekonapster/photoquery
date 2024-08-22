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
     <?php $__env->slot('yo', null, []); ?> 
        <ul>
            <li>1a</li>
            <li>2a</li>
            <li>3a</li>
            <li>4a</li>
            <li>5a</li>
        </ul>
     <?php $__env->endSlot(); ?>
     <?php $__env->slot('yo2', null, []); ?> 
        <ul>
            <li>1b</li>
            <li>2b</li>
            <li>3b</li>
            <li>4b</li>
            <li>5b</li>
        </ul>
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

<?php if (isset($component)) { $__componentOriginald411d1792bd6cc877d687758b753742c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald411d1792bd6cc877d687758b753742c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
descargar
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $attributes = $__attributesOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__attributesOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $component = $__componentOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__componentOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\G14\Documents\MEGA_G14\VSCode\WWW\laravel\sebapp\resources\views/yo.blade.php ENDPATH**/ ?>