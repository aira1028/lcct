<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>LCCT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
    rel="stylesheet"/>

    <style>
        [x-cloak] {
            display: none;
        }

        #logo{
 font-family: "Anton", sans-serif;
  font-weight: 600;
  font-size: 30px;
  font-style: normal;
        }
    </style>


    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo WireUi::directives()->scripts(attributes: []); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body class="font-sans antialiased bg-white">
    <?php if (isset($component)) { $__componentOriginal10717d162484e57a570d6d2cc4597545 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10717d162484e57a570d6d2cc4597545 = $attributes; } ?>
<?php $component = WireUi\View\Components\Notifications::resolve(['position' => 'top-right'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notifications'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Notifications::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10717d162484e57a570d6d2cc4597545)): ?>
<?php $attributes = $__attributesOriginal10717d162484e57a570d6d2cc4597545; ?>
<?php unset($__attributesOriginal10717d162484e57a570d6d2cc4597545); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10717d162484e57a570d6d2cc4597545)): ?>
<?php $component = $__componentOriginal10717d162484e57a570d6d2cc4597545; ?>
<?php unset($__componentOriginal10717d162484e57a570d6d2cc4597545); ?>
<?php endif; ?>

    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="sidebar-multi-level-sidebar"
        class="border fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-cyan-500 ">
            <ul class="space-y-2 font-medium ">
                <a href="<?php echo e(route('Admindashboard')); ?>">
                    <div class="flex  flex-col items-center h-full px-3  overflow-y-auto  rounded-lg">
                        <div class="">
                         <img src="<?php echo e(asset('images/lcct.png')); ?>" alt="Violation Photo" class="w-16 h-16">
                        </div>
                          <div class="text-center mt-2">
                             <label for="" class="font-black text-white text-xl " id="logo">LCCT</label>
                          </div>
                     </div>
                </a>
                

                 <li>
                    <a href="<?php echo e(route('Admindashboard')); ?>"   class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="ri-dashboard-fill"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>

                    </a>
                 </li>

                 

                <li>
                    <a href="<?php echo e(route('admin.user')); ?>"   class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="ri-group-fill"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">User</span>

                    </a>
                 </li>
                

                 <li>
                    <a href="<?php echo e(route('admin.history')); ?>"   class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="ri-nurse-fill"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">Patient History</span>

                    </a>
                 </li> 

                 
                <script>
                    function toggleDropdown(button) {
                        const dropdown = button.nextElementSibling;
                        const isVisible = dropdown.style.display === "block";


                        document.querySelectorAll('ul[style]').forEach(el => el.style.display = 'none');


                        dropdown.style.display = isVisible ? "none" : "block";
                    }


                    document.addEventListener('click', function (e) {
                        if (!e.target.closest('li.relative')) {
                            document.querySelectorAll('ul[style]').forEach(el => el.style.display = 'none');
                        }
                    });
                </script>


            </ul>


        </div>
    </aside>

    <div class="flex justify-between text-black p-10">
        <div class="ml-72">
            
        </div>
        <div>
           <span class="text-green-600 font-bold"> <?php echo e(Auth::user()->name); ?></span>
          <?php if (isset($component)) { $__componentOriginal89c056f45462358edf1d624257ccfb3f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89c056f45462358edf1d624257ccfb3f = $attributes; } ?>
<?php $component = WireUi\View\Components\Dropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Dropdown::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
              <?php if (isset($component)) { $__componentOriginal0dfa9bc3fdfc23d5909c03c26aad9268 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0dfa9bc3fdfc23d5909c03c26aad9268 = $attributes; } ?>
<?php $component = WireUi\View\Components\Dropdown\DropdownItem::resolve(['label' => 'Logout'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Dropdown\DropdownItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '','href' => ''.e(route('logout')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0dfa9bc3fdfc23d5909c03c26aad9268)): ?>
<?php $attributes = $__attributesOriginal0dfa9bc3fdfc23d5909c03c26aad9268; ?>
<?php unset($__attributesOriginal0dfa9bc3fdfc23d5909c03c26aad9268); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0dfa9bc3fdfc23d5909c03c26aad9268)): ?>
<?php $component = $__componentOriginal0dfa9bc3fdfc23d5909c03c26aad9268; ?>
<?php unset($__componentOriginal0dfa9bc3fdfc23d5909c03c26aad9268); ?>
<?php endif; ?>
           <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89c056f45462358edf1d624257ccfb3f)): ?>
<?php $attributes = $__attributesOriginal89c056f45462358edf1d624257ccfb3f; ?>
<?php unset($__attributesOriginal89c056f45462358edf1d624257ccfb3f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89c056f45462358edf1d624257ccfb3f)): ?>
<?php $component = $__componentOriginal89c056f45462358edf1d624257ccfb3f; ?>
<?php unset($__componentOriginal89c056f45462358edf1d624257ccfb3f); ?>
<?php endif; ?>
        </div>
      </div>
    <div class="p-4 sm:ml-64">
        <div class="p-4  border-gray-200  rounded-lg dark:border-gray-700 ">
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>
    </div>



</body>

</html>
<?php /**PATH C:\Users\asus\Desktop\lcct\resources\views/components/admin-layout.blade.php ENDPATH**/ ?>