<!-- Sidebar starts -->
            <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
            <div class="w-64 absolute min-h-screen sm:relative bg-gray-800 shadow md:h-full flex-col justify-between hidden sm:flex">
                <div class="px-8">
                    <div class="h-16 w-full flex items-center">
                        <h1 class="text-white text-2xl font-semibold tracking-wide"><a href="/">{{ config('app.name') }}</a></h1>
                    </div>
                    <ul class="mt-2">
                        <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                            <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                <span class="text-sm ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                            <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                <span class="text-sm ml-2">Kandidatat</span>
                            </a>
                        </li>
                        <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                            <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                <span class="text-sm ml-2">Pemilih</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="px-8 border-t border-gray-700">
                    <ul class="w-full flex items-center justify-between bg-gray-800">
                        <li class="cursor-pointer text-white pt-5 pb-3">
                            {{-- <button aria-label="open logs" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50"><path d="M9 42q-1.2 0-2.1-.9Q6 40.2 6 39V9q0-1.2.9-2.1Q7.8 6 9 6h14.55v3H9v30h14.55v3Zm24.3-9.25-2.15-2.15 5.1-5.1h-17.5v-3h17.4l-5.1-5.1 2.15-2.15 8.8 8.8Z"/></svg>
                            </button> --}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-64 z-40 min-h-screen absolute bg-gray-800 shadow md:h-full flex-col justify-between sm:hidden transition duration-150 ease-in-out" id="mobile-nav">
                <button aria-label="toggle sidebar" id="openSideBar" class="h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 rounded focus:ring-gray-800" onclick="sidebarHandler(true)">
                    <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="6" cy="10" r="2" />
                        <line x1="6" y1="4" x2="6" y2="8" />
                        <line x1="6" y1="12" x2="6" y2="20" />
                        <circle cx="12" cy="16" r="2" />
                        <line x1="12" y1="4" x2="12" y2="14" />
                        <line x1="12" y1="18" x2="12" y2="20" />
                        <circle cx="18" cy="7" r="2" />
                        <line x1="18" y1="4" x2="18" y2="5" />
                        <line x1="18" y1="9" x2="18" y2="20" />
                    </svg>
                </button>
                <button aria-label="Close sidebar" id="closeSideBar" class="hidden h-10 w-10 bg-gray-800 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white" onclick="sidebarHandler(false)">
                    <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
                <div class="px-8">
                    <div class="h-16 w-full flex items-center">
                        <h1 class="text-white text-2xl font-semibold tracking-wide"><a href="/">{{ config('app.name') }}</a></h1>
                    </div>
                    <ul class="mt-5">
                        <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                            <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                <span class="text-sm ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                            <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                <span class="text-sm ml-2">Kandidat</span>
                            </a>
                        </li>
                        <li class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                            <a href="javascript:void(0)" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                <span class="text-sm ml-2">Pemilih</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="px-8 border-t border-gray-700">
                    <ul class="w-full flex items-center justify-between bg-gray-800">
                        <li class="cursor-pointer text-white pt-5 pb-3">
                            <button aria-label="open logs" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-300">
                                <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <rect x="3" y="4" width="18" height="4" rx="2"></rect>
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
                                    <line x1="10" y1="12" x2="14" y2="12"></line>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar ends -->
            <script>
                var sideBar = document.getElementById("mobile-nav");
                var openSidebar = document.getElementById("openSideBar");
                var closeSidebar = document.getElementById("closeSideBar");
                sideBar.style.transform = "translateX(-260px)";

                function sidebarHandler(flag) {
                    if (flag) {
                        sideBar.style.transform = "translateX(0px)";
                        openSidebar.classList.add("hidden");
                        closeSidebar.classList.remove("hidden");
                    } else {
                        sideBar.style.transform = "translateX(-260px)";
                        closeSidebar.classList.add("hidden");
                        openSidebar.classList.remove("hidden");
                    }
                }
            </script>
