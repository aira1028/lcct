<div>
    <div class=" flex flex-col items-center ">
        <div class="w-full shadow-lg rounded-lg">




            <table id="printPage" class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left text-gray-600">Student Number</th>
                        <th class="px-4 py-2 text-left text-gray-600">Name</th>
                        <th class="px-4 py-2 text-left text-gray-600">Diagnose</th>
                        <th class="px-4 py-2 text-left text-gray-600">Treatment</th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="border-t border-gray-300">
                            <td class="px-4 py-2"><?php echo e($patient->student_number); ?></td>
                            <td class="px-4 py-2"><?php echo e($patient->user->name ?? 'Unknown'); ?></td>
                            <td class="px-4 py-2"><?php echo e($patient->diagnose); ?></td>
                            <td class="px-4 py-2"><?php echo e($patient->treatment->name ?? 'Unknown'); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-center text-gray-500">No patient data available.</td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>

            <div class="flex justify-end mt-4">
                <button  onclick="printOnlyTable()" class="bg-gray-500 w-64 text-white px-4 py-2 rounded-lg">Print</button>
            </div>
            <div class="mt-4">
                <?php echo e($patients->links()); ?>

            </div>
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


            const header = "<h2>History</h2>";


            document.body.innerHTML = header + printContent;


            window.print();

        
            window.onafterprint = () => {
                document.body.innerHTML = originalContent;
            };
        }
    </script>


</div>
<?php /**PATH C:\Users\asus\Desktop\lcct\resources\views/livewire/admin/history.blade.php ENDPATH**/ ?>