<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '']); ?>
    <div class="mx-10 bg-neutral rounded-xl p-5">
        <div class="flex">
            <input type="text" placeholder=" <?php echo e(__('Date')); ?> " class="input input-sm input-bordered w-40 mb-3"
                onfocus="(this.type='date')" />
        </div>
        <div class="flex justify-evenly">
            <fieldset class="border border-gray-600 rounded-xl p-3 w-44">
                <legend class="text-base" class="text-base">BANCO PROVINCIA</legend>
                <input type="number" placeholder="A893" class="input input-sm input-bordered w-44 mb-2" />
                <input type="number" placeholder="A430" class="input input-sm input-bordered w-44 mb-2" />
                <input type="number" placeholder="Parroquia" class="input input-sm input-bordered w-44 mb-2" />
                <input type="number" placeholder="ADM" class="input input-sm input-bordered w-44 mb-2" />
            </fieldset>
            <fieldset class="border border-gray-600 rounded-xl p-3 w-44">
                <legend class="text-base">SANTANDER</legend>
                <input type="number" placeholder="Sant 1" class="input input-sm input-bordered w-44 mb-2" />
                <input type="number" placeholder="Sant 2" class="input input-sm input-bordered w-44 mb-2" />
                <input type="number" placeholder="Sant 3" class="input input-sm input-bordered w-44 mb-2" />
            </fieldset>

            <fieldset class="border border-gray-600 rounded-xl p-3 w-44">
                <legend class="text-base">SANTANDER P.</legend>
                <input type="number" placeholder="893" class="input input-sm input-bordered w-44 mb-2" />
                <input type="number" placeholder="430" class="input input-sm input-bordered w-44 mb-2" />
                <input type="number" placeholder="1486" class="input input-sm input-bordered w-44 mb-2" />
            </fieldset>

            <fieldset class="border border-gray-600 rounded-xl p-3 w-44">
                <legend class="text-base">Carga de datos Cuatro</legend>
                <input type="number" placeholder="FCI A$" class="input input-sm input-bordered w-44 mb-2" />
                <input type="number" placeholder="FCI Plus" class="input input-sm input-bordered w-44 mb-2" />
            </fieldset>
            <div>
                <fieldset class="border border-gray-600 rounded-xl p-3 w-44 mb-2">
                    <legend class="text-base">Digital</legend>

                    <input type="number" placeholder="Mercado Pago" class="input input-sm input-bordered w-44 mb-2" />
                </fieldset>
                <fieldset class="border border-gray-600 rounded-xl p-3 w-44">
                    <legend class="text-base">Efectivo</legend>
                    <input type="number" placeholder="Caja" class="input input-sm input-bordered w-44 mb-2" />
                </fieldset>
            </div>
        </div>
        <div>
            <div class="mt-10">

                <button class="btn btn-sm btn-info">Calcular total</button>
                <input type="text" placeholder="CALCULADO" class="input input-sm input-bordered w-40" />
                <div class="divider divider-primary"></div>
                <div class="flex justify-end">
                    <button class="btn btn-accent">Guardar</button>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\marti\Documents\MEGAsync\VSCode\WWW\laravel\sebapp\resources\views/saldos.blade.php ENDPATH**/ ?>