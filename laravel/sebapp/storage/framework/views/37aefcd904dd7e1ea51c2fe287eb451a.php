<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="card overflow-hidden shadow-sm sm:rounded-lg">
        <div class="card-body bg-neutral rounded-xl mx-10">
            <div class="primerDiv flex items-center justify-between ">
                <input type="text" placeholder="ID" class="input input-sm input-bordered max-w-xs w-40" />
                <select name="" id="" class="select select-bordered select-sm max-w-xs w-full text-xs">
                    <option value="0">PROVEEDOR</option>
                    <option value="1">MARTIN</option>
                    <option value="2">SEBASTIAN</option>
                    <option value="3">MARIA EMILIA</option>
                    <option value="4">GRACIELA</option>
                    <option value="5">ALEJANDRO</option>
                    <option value="5">ANTONIO</option>
                </select>

                <input type="text" placeholder="Fecha de factura" name="" id=""
                    class="input input-sm input-bordered max-w-xs w-40" onfocus="(this.type='date')" />
                <input type="text" placeholder="Fecha de vencimiento" name="" id=""
                    class="input input-sm input-bordered max-w-xs w-40" onfocus="(this.type='date')" />
                <input type="text" placeholder="Auxiliar" class="input input-sm input-bordered max-w-xs w-40" />
            </div>

            <!-- /////////////////////////////////// -->

            <div class="segundoDIV flex items-center justify-between mt-5">
                <input type="text" class="input input-sm input-bordered max-w-xs w-40" placeholder="Pto. Venta" />
                <input type="text" class="input input-sm input-bordered max-w-xs w-40" placeholder="Nº Factura" />
                <input type="number" step="0.1" class="input input-sm input-bordered max-w-xs w-40"
                    placeholder="Importe" />

                <select name="" id="" class="select select-bordered select-sm max-w-xs w-48 text-xs">
                    <option value="">GASTOS</option>
                    <option value="">Gastos 1</option>
                    <option value="">Gastos 2</option>
                    <option value="">Gastos 3</option>
                </select>
                <select name="" id="" class="select select-bordered select-sm max-w-xs w-48 text-xs">
                    <option value="">PROYECTO</option>
                    <option value="">Proyecto 1</option>
                    <option value="">Proyecto 2</option>
                    <option value="">Proyecto 3</option>
                </select>
                <label class="cursor-pointer label w-28">Activacion
                    <input type="checkbox" class="checkbox checkbox-secondary" />
                </label>
            </div>

            <div class="tercerDIV flex items-center justify-between mt-5">
                <select name="" id="" class="select select-bordered select-sm max-w-xs w-48 text-xs">
                    <option value="">PAGO</option>
                    <option value="">pago 1</option>
                    <option value="">pago 2</option>
                    <option value="">pago 3</option>
                </select>

                <input type="text" placeholder="Fecha de pago" name="" id=""
                    class="input input-sm input-bordered max-w-xs w-40" onfocus="(this.type='date')" />
                <select name="" id="" class="select select-bordered select-sm max-w-xs w-40 text-xs">
                    <option value="">BANCOS</option>
                    <option value="">Proincia</option>
                    <option value="">Frances</option>
                    <option value="">Itahu</option>
                    <option value="">Santander</option>
                </select>
                <select name="" id="" class="select select-bordered select-sm max-w-xs w-full text-xs">
                    <option value="">Cuenta de banco</option>
                    <option value="">bue2424000314772024</option>
                    <option value="">bue0909000314772024</option>
                    <option value="">bue1515000314772024</option>
                </select>
                <input type="text" class="input input-sm input-bordered max-w-xs w-40" placeholder="Nº Cheque" />
                <input type="text" class="input input-sm input-bordered max-w-xs w-40" placeholder="Orden de Pago" />
            </div>

            <textarea placeholder="Observaciones" class="textarea textarea-bordered mt-3"></textarea>

            <div class="divider divider-primary mt-5">o</div>

            <div class="flex justify-between">
                <button class="btn btn-primary" onclick="my_modal_4.showModal()">Nuevo Proveedor</button>
                <button class="btn btn-accent">Guardar</button>


                
                <dialog id="my_modal_4" class="modal">
                    <div class="modal-box max-w-6xl">
                        <h3 class="font-bold text-lg">Proveedor</h3>

                        <div class="card-body card-bordered">
                            <div class="grid grid-cols-4 gap-2">
                                <input type="text" placeholder="ID" class="input input-sm input-bordered w-full"
                                    value="BUE001" />


                                <input type="text" placeholder="DESCRIPCION"
                                    class="input input-sm input-bordered w-full" required />
                                <input type="text" placeholder="RUBRO"
                                    class="input input-sm input-bordered w-full" required />
                                <input type="tel" placeholder="TEL" class="input input-sm input-bordered w-full"
                                    required />
                                <input type="text" placeholder="PROVEEDOR"
                                    class="input input-sm input-bordered w-full" required />
                                <input type="text" placeholder="CONTACTO"
                                    class="input input-sm input-bordered w-full" required />
                                <input type="email" placeholder="CORREO"
                                    class="input input-sm input-bordered w-full" required />
                            </div>
                            <div class="flex justify-start items-center">
                                <select name="" id=""
                                    class="select select-bordered select-sm max-w-xs w-full text-xs">
                                    <option value="">Cuenta Contable</option>
                                    <option value="5,1420006">5,1420006</option>
                                    <option value="5,1420007">5,1420007</option>
                                    <option value="5,1510003">5,1510003</option>
                                    <option value="5,1520003">5,1520003</option>
                                    <option value="11130001">11130001</option>
                                    <option value="11130002">11130002</option>
                                    <option value="11130003">11130003</option>
                                    <option value="11130016">11130016</option>
                                    <option value="11130017">11130017</option>
                                    <option value="11130018">11130018</option>
                                    <option value="12130001">12130001</option>
                                    <option value="12140001">12140001</option>
                                    <option value="12150001">12150001</option>
                                    <option value="12170001">12170001</option>
                                    <option value="41110001">41110001</option>
                                    <option value="41110008">41110008</option>
                                    <option value="41120002">41120002</option>
                                    <option value="41130003">41130003</option>
                                    <option value="41210008">41210008</option>
                                    <option value="41210009">41210009</option>
                                    <option value="41210015">41210015</option>
                                    <option value="41210016">41210016</option>
                                    <option value="41410001">41410001</option>
                                    <option value="41420001">41420001</option>
                                    <option value="41420002">41420002</option>
                                    <option value="51110001">51110001</option>
                                    <option value="51110002">51110002</option>
                                    <option value="51110004">51110004</option>
                                    <option value="51110006">51110006</option>
                                    <option value="51110007">51110007</option>
                                    <option value="51210001">51210001</option>
                                    <option value="51210002">51210002</option>
                                    <option value="51210003">51210003</option>
                                    <option value="51210004">51210004</option>
                                    <option value="51210005">51210005</option>
                                    <option value="51210006">51210006</option>
                                    <option value="51310001">51310001</option>
                                    <option value="51310002">51310002</option>
                                    <option value="51310003">51310003</option>
                                    <option value="51310004">51310004</option>
                                    <option value="51320001">51320001</option>
                                    <option value="51410001">51410001</option>
                                    <option value="51410002">51410002</option>
                                    <option value="51410003">51410003</option>
                                    <option value="51410004">51410004</option>
                                    <option value="51410005">51410005</option>
                                    <option value="51410006">51410006</option>
                                    <option value="51410008">51410008</option>
                                    <option value="51410009">51410009</option>
                                    <option value="51420001">51420001</option>
                                    <option value="51420002">51420002</option>
                                    <option value="51420003">51420003</option>
                                    <option value="51420004">51420004</option>
                                    <option value="51420005">51420005</option>
                                    <option value="51420006">51420006</option>
                                    <option value="51420007">51420007</option>
                                    <option value="51420008">51420008</option>
                                    <option value="51420009">51420009</option>
                                    <option value="51420010">51420010</option>
                                    <option value="51420011">51420011</option>
                                    <option value="51510001">51510001</option>
                                    <option value="51510003">51510003</option>
                                    <option value="51510004">51510004</option>
                                    <option value="51510005">51510005</option>
                                    <option value="51510006">51510006</option>
                                    <option value="51510008">51510008</option>
                                    <option value="51510010">51510010</option>
                                    <option value="51510012">51510012</option>
                                    <option value="51510013">51510013</option>
                                    <option value="51610001">51610001</option>
                                    <option value="51710001">51710001</option>
                                    <option value="51810006">51810006</option>
                                    <option value="51920001">51920001</option>
                                    <option value="51920002">51920002</option>
                                    <option value="41110002">41110002</option>
                                    <option value="41110004">41110004</option>
                                </select>

                                <div class="border rounded-lg border-gray-700 flex justify-start items-center mx-3 px-3 ">
                                    <button class="btn btn-square btn-sm inline btn-primary mr-3"
                                        onclick="my_modal_5.showModal()">CC</button>
                                    <span>Crear cuenta contable</span>
                                </div>
                            </div>

                            <div class="card-actions justify-start py-3">
                                <button class="btn btn-sm btn-primary">Modificar</button>
                                <button class="btn btn-sm btn-secondary">Agregar</button>
                            </div>
                        </div>

                        <!-- tabla dentro del modal ↓ -->
                        <div class="mt-2">
                            <table class="table" id="myTable" style="width:100%;">
                                <!-- head -->
                                <thead class="">
                                    <tr>
                                        <th></th>
                                        <th class="">ID</th>
                                        <th class="">CC</th>
                                        <th class="">DESCRIPCION</th>
                                        <th class="">RUBRO</th>
                                        <th class="">TEL</th>
                                        <th class="">PROVEEDOR</th>
                                        <th class="">CONTACTO</th>
                                        <th class="">CORREO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>BUE001</td>
                                        <td>51420003</td>
                                        <td>REFRIGERIOS</td>
                                        <td>MATERIALES Y SUMINISTROS</td>
                                        <td>1125-037551</td>
                                        <td>AQUALINE 00</td>
                                        <td>PEDRO DUARTE</td>
                                        <td>AQUALINE@MAIL.COM</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>BUE002</td>
                                        <td>73542005</td>
                                        <td>SNACKS</td>
                                        <td>MATERIALES Y SUMINISTROS</td>
                                        <td>1125-059873</td>
                                        <td>SNACKDELIGHT 02</td>
                                        <td>JUAN PEREZ</td>
                                        <td>JUAN.PEREZ@MAIL.COM</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>BUE003</td>
                                        <td>84653006</td>
                                        <td>ALMUERZOS</td>
                                        <td>MATERIALES Y SUMINISTROS</td>
                                        <td>1125-070984</td>
                                        <td>LUNCHBOX 03</td>
                                        <td>ANA GARCIA</td>
                                        <td>ANA.GARCIA@MAIL.COM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- tabla dentro del modal ↑ -->
                        <div class="modal-action">
                            <form method="dialog">
                                <button class="btn">Cancelar</button>
                            </form>
                        </div>
                        <!-- MODAL BODY ENDS -->
                    </div>
                </dialog>
            </div>
        </div>
    </div>


    
    <dialog id="my_modal_5" class="modal">
        <div class="card bg-base-100 w-96 shadow-xl">
            <figure class="px-10 pt-10">
                <p>Nueva Cuenta Contable</p>
            </figure>
            <div class="card-body items-center text-center">

                <div class="card-actions">
                    <button class="btn btn-primary">Crear</button>
                </div>
            </div>
        </div>
    </dialog>
    
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
<?php /**PATH C:\Users\G14\Documents\MEGA_G14\VSCode\WWW\laravel\sebapp\resources\views/general.blade.php ENDPATH**/ ?>