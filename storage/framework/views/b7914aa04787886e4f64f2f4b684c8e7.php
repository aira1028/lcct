<div>

    <div x-data="{ showModal: <?php if ((object) ('editModal') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('editModal'->value()); ?>')<?php echo e('editModal'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('editModal'); ?>')<?php endif; ?> }" class="flex items-start justify-end">

        <div class="flex gap-4 items-center">
            <div>
                <input
                    type="text"
                    wire:model.debounce.300ms="search"
                    placeholder="Search by Student Number or Name"
                    class="border rounded-md p-2"
                />
                <button wire:click="ser" class="bg-green-500 hover:bg-green-600 p-1 w-32 text-white rounded h-10">
                    Search
                </button>
            </div>
            <button
                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700"
                @click="showModal = true"
            >
                Add Patient
            </button>
        </div>

        <div
            x-show="showModal"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">

            <div
                class="bg-white rounded-lg shadow-xl w-3/4 max-w-xl"
                @click.away="showModal = false">
                <div class="flex justify-between items-center p-4 border-b">
                    <h2 class="text-lg font-semibold"><?php echo e($patientId ? 'Edit Patient' : 'Add Patient'); ?></h2>
                    <button
                        class="text-gray-600 hover:text-gray-900"
                        @click="showModal = false">
                        &times;
                    </button>
                </div>

                <div>
                    <div>
                        <form wire:submit.prevent="save">
                            <div class="p-4 space-y-4">
                                <!-- Student Number Field -->
                                <div>
                                    <label for="studentNumber" class="block text-sm font-medium">Student Number</label>
                                    <input
                                        type="text"
                                        id="studentNumber"
                                        wire:model="studentNumber"
                                        wire:keyup="fetchStudentDetails"
                                        class="w-full p-2 border rounded-md"
                                    />
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['studentNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>

                                <!-- Name Field -->
                                <div>
                                    <label for="name" class="block text-sm font-medium">Name</label>
                                    <input
                                        type="text"
                                        id="name"
                                        wire:model="name"
                                        class="w-full p-2 border rounded-md"
                                        readonly
                                    />
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>


                                <!-- Grade/Section Field -->
                                <div>
                                    <label for="gradeSection" class="block text-sm font-medium">Grade/Section</label>
                                    <input
                                        type="text"
                                        id="gradeSection"
                                        wire:model="gradeSection"
                                        class="w-full p-2 border rounded-md"
                                        readonly
                                    />
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['gradeSection'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>

                                <!-- Diagnose Field -->
                                <div>
                                    <label for="diagnose" class="block text-sm font-medium">Diagnose</label>
                                    <textarea id="diagnose" wire:model="diagnose" class="w-full p-2 border rounded-md"></textarea>
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['diagnose'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                                </div>

                                <!-- Treatment Dropdown -->
                                <div>
                                    <label for="treatment" class="block text-sm font-medium">Treatment</label>
                                    <select id="treatment" wire:model="treatment" class="w-full p-2 border rounded-md text-black bg-white">
                                        <option value="" disabled>Select a treatment</option>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $treatments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $treatment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option  value="<?php echo e($treatment->id); ?>"><?php echo e($treatment->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    </select>
                                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['treatment'];
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
                                    <?php echo e($patientId ? 'Update' : 'Save'); ?>

                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="mt-6 overflow-x-auto">
        <table id="printPage" class="min-w-full bg-white border border-gray-300 rounded-md shadow-md">
            <thead class="bg-gray-200">
                <tr class="text-left text-sm font-medium text-gray-700">
                    <th class="py-3 px-4 border-b">Student Number</th>
                    <th class="py-3 px-4 border-b">Name</th>
                    <th class="py-3 px-4 border-b">Grade/Section</th>
                    <th class="py-3 px-4 border-b">Date</th>
                    <th class="py-3 px-4 border-b">Diagnose</th>
                    <th class="py-3 px-4 border-b">Treatment</th>
                    <th class="py-3 px-4 border-b">Time In</th>
                    <th class="py-3 px-4 border-b">Time Out</th>
                    <th class="py-3 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4 border-b"><?php echo e($patient->student_number); ?></td>
                        <td class="py-3 px-4 border-b">
                            <?php echo e($patient->user ? $patient->user->name : 'N/A'); ?>

                        </td>
                        <td class="py-3 px-4 border-b">
                            <?php echo e($patient->user ? $patient->user->grade_section : 'N/A'); ?>

                        </td>
                        <td class="py-3 px-4 border-b"><?php echo e(\Carbon\Carbon::parse($patient->date)->format('M d, Y')); ?></td>
                        <td class="py-3 px-4 border-b"><?php echo e($patient->diagnose ?? 'No complain'); ?></td>
                        <td class="py-3 px-4 border-b">
                            <?php echo e($patient->treatment ? $patient->treatment->name : 'No treatment assigned'); ?>

                        </td>

                        <td class="py-3 px-4 border-b">
                            <?php echo e($patient->time_in ? \Carbon\Carbon::createFromFormat('H:i:s', $patient->time_in)->setTimezone('Asia/Manila')->format('h:i A') : '-'); ?>

                        </td>
                        <td class="py-3 px-4 border-b">
                            <?php echo e($patient->time_out ? \Carbon\Carbon::createFromFormat('H:i:s', $patient->time_out)->setTimezone('Asia/Manila')->format('h:i A') : 'Pending'); ?>

                        </td>

                        <td class="py-3 px-4 border-b space-x-2">
                            <!--[if BLOCK]><![endif]--><?php if($patient->time_out): ?>
                                <span class="px-3 py-1 bg-gray-200 text-gray-600 rounded-md">Done</span>
                            <?php else: ?>
                                <button
                                    wire:click="timeout(<?php echo e($patient->id); ?>)"
                                    class="px-3 py-1 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition">
                                    Time Out
                                </button>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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


            const header = "<h2>Patients</h2>";


            document.body.innerHTML = header + printContent;


            window.print();


            window.onafterprint = () => {
                document.body.innerHTML = originalContent;
            };
        }
    </script>
</div>
<?php /**PATH C:\Users\asus\Desktop\lcct\resources\views/livewire/staff/patient.blade.php ENDPATH**/ ?>