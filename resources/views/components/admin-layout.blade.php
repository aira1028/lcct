<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @wireUiScripts
    @livewireStyles
</head>

<body class="font-sans antialiased bg-white">
    <x-notifications position="top-right" />

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
                <a href="{{ route('Admindashboard') }}">
                    <div class="flex  flex-col items-center h-full px-3  overflow-y-auto  rounded-lg">
                        <div class="">
                         <img src="{{ asset('images/lcct.png') }}" alt="Violation Photo" class="w-16 h-16">
                        </div>
                          <div class="text-center mt-2">
                             <label for="" class="font-black text-white text-xl " id="logo">LCCT</label>
                          </div>
                     </div>
                </a>
                {{-- <li>
                    <a href="Admindashboard"
                        class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="ri-dashboard-fill"></i>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li> --}}

                 <li>
                    <a href="{{ route('Admindashboard') }}"   class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="ri-dashboard-fill"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>

                    </a>
                 </li>

                 {{-- <li class="relative">
                    <!-- Dropdown Toggle Button -->
                    <button
                        onclick="toggleDropdown(this)"
                        class="flex items-center w-full p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <i class="ri-group-3-fill"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Patients</span>
                        <svg class="w-4 h-4 ml-2 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>


                    <ul class="absolute left-0 z-10 hidden w-full mt-2 bg-white rounded-lg shadow-lg dark:bg-gray-800" style="display: none;">
                        <li>
                            <a href="{{ route('admin.add-patient') }}"
                               class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                               Add Patient
                            </a>
                        </li>



                        <li>
                            <a href="{{ route('admin.prescription') }}"
                               class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                               Prescription
                            </a>
                        </li>
                        <li>
                            <a href="/patient-history"
                               class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                               Patient History
                            </a>
                        </li>
                    </ul>
                </li> --}}

                <li>
                    <a href="{{ route('admin.user') }}"   class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="ri-group-fill"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">User</span>

                    </a>
                 </li>
                {{-- <li>
                    <a href="{{ route('admin.add-medicine') }}"   class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="ri-capsule-fill"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">Add Medicines</span>

                    </a>
                 </li> --}}

                 <li>
                    <a href="{{ route('admin.history') }}"   class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="ri-nurse-fill"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">Patient History</span>

                    </a>
                 </li> 

                 {{-- <li>
                    <a href=""   class="flex items-center p-2 text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="ri-user-star-fill"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">User</span>

                    </a>
                 </li> --}}
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
            {{-- <img src="{{ asset('images/sksu1.png') }}" alt="" class="h-32 w-32"> --}}
        </div>
        <div>
           <span class="text-green-600 font-bold"> {{ Auth::user()->name }}</span>
          <x-dropdown>
              <x-dropdown.item label="Logout" class=""  href="{{  route('logout') }}"/>
          </x-dropdown>
        </div>
      </div>
    <div class="p-4 sm:ml-64">
        <div class="p-4  border-gray-200  rounded-lg dark:border-gray-700 ">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>



</body>

</html>
