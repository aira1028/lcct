<div>

    <div x-data="{ showModal: <?php if ((object) ('editModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('editModal'->value()); ?>')<?php echo e('editModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('editModal'); ?>')<?php endif; ?> }" class="mb-6">
        

        <div class="flex gap-4 items-center">
            <div>
                <input
                    type="text"
                    wire:model.debounce.300ms="search"
                    placeholder="Search "
                    class="border rounded-md p-2"
                />
                <button wire:click="ser" class="bg-green-500 hover:bg-green-600 p-1 w-32 text-white rounded h-10">
                    Search
                </button>
            </div>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700" @click="showModal = true">
                Add Treatment
            </button>
        </div>



        <div
            x-show="showModal"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
            x-transition:enter="transition ease-out duration-300"
            x-transition:leave="transition ease-in duration-200"
        >
            <div
                class="bg-white rounded-lg shadow-xl w-3/4 max-w-md"
                @click.away="showModal = false"
            >
                <div class="flex justify-between items-center p-4 border-b">
                    <h2 class="text-lg font-semibold"><?php echo e($treatmentId ? 'Edit Treatment' : 'Add Treatment'); ?></h2>
                    <button
                        class="text-gray-600 hover:text-gray-900"
                        @click="showModal = false">
                        &times;
                    </button>
                </div>

                <form wire:submit.prevent="save">
                    <div class="p-4 space-y-4">
                        <div>
                            <label for="treatmentName" class="block text-sm font-medium">Treatment Name</label>
                            <input type="text" id="treatmentName" wire:model="treatmentName" class="w-full p-2 border rounded-md" />
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['treatmentName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <div>
                            <label for="description" class="block text-sm font-medium">Description</label>
                            <textarea id="description" wire:model="description" class="w-full p-2 border rounded-md"></textarea>
                            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>

                    <div class="flex justify-end p-4 border-t">
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                            <?php echo e($treatmentId ? 'Update' : 'Save'); ?>

                        </button>
                        <button
                            type="button"
                            class="ml-2 px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700"
                            @click="showModal = false; window.Livewire.find('<?php echo e($_instance->getId()); ?>').resetForm()">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="overflow-x-auto">
        <table id="printPage"  class="min-w-full bg-white border border-gray-300 rounded-md shadow-md">
            <thead class="bg-gray-200">
                <tr class="text-left text-sm font-medium text-gray-700">
                    <th class="py-3 px-4 border-b">Name</th>
                    <th class="py-3 px-4 border-b">Description</th>
                    <th class="py-3 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $treatments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treatment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4 border-b"><?php echo e($treatment->name); ?></td>
                        <td class="py-3 px-4 border-b"><?php echo e($treatment->description); ?></td>
                        <td class="py-3 px-4 border-b space-x-2">
                            <button wire:click="edit(<?php echo e($treatment->id); ?>)" class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">
                                Edit
                            </button>
                            <button wire:click="delete(<?php echo e($treatment->id); ?>)" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition">
                                Delete
                            </button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>

        <div class="flex justify-end mt-4">
            <button  onclick="printOnlyTable()" class="bg-gray-500 w-64 text-white px-4 py-2 rounded-lg">Print</button>
        </div>
    </div>

    <style>
        @media print {

            body * {
                visibility: hidden;
            }


            #printPage, #printPage * {
                visibility: visible;
            }


            #printPage {
                width: 100%;
                margin: 0 auto;
                border-collapse: collapse;
            }


            h2 {
                text-align: center;
                font-size: 20px;
                font-weight: bold;
                margin-bottom: 20px;
                visibility: visible;
            }

            @page {
                margin: 1cm;
            }


            body {
                margin: 0;
                padding: 0;
            }
        }
    </style>
    <script>
        function printOnlyTable() {

            const originalContent = document.body.innerHTML;


            const printContent = document.getElementById('printPage').outerHTML;


            const header = "<h2>Treatments</h2>";


            document.body.innerHTML = header + printContent;


            window.print();


            window.onafterprint = () => {
                document.body.innerHTML = originalContent;
            };
        }
    </script>
</div>
<?php /**PATH C:\Users\asus\Desktop\lcct\resources\views/livewire/staff/treatments.blade.php ENDPATH**/ ?>