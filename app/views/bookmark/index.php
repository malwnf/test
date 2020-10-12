<div class="py-10 sm:py-12 md:py-16 lg:py-20 xl:py-28 bg-white">
    <div class="container mx-auto px-4 sm:text-left md:text-left lg:text-left flex flex-wrap ">




        <!-- ... -->
        <div class="w-full lg:w-4/12 px-auto lg:px-0 md:mb-3 sm:mb-2 lg:mb-0 ">
            <p class="text-gray-600">
                Your saved jobs will show here.
            </p>
            <h2 class="text-3xl tracking-tight leading-10 font-bold text-gray-900 sm:text-4xl sm:leading-none md:text-5xl">
                Bookmark
            </h2>
        </div>
        <!-- ... -->
        <div class="w-full lg:w-8/12 px-auto lg:pl-32 mb-6 lg:mb-0 ">
            <p class="text-gray-600">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio pariatur dolor consequatur voluptatem, fugiat voluptates alias consectetur temporibus facere! Ad corporis rerum explicabo qui corrupti esse voluptate natus, amet reprehenderit!
            </p>
            <p class="text-gray-600 mt-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit, Optio pariatur dolor consequatur voluptatem.
            </p>
        </div>

    </div>
</div>

<div class="py-10 sm:py-12 md:py-16 lg:py-20 xl:py-28">
    <div class="container mx-auto px-4 sm:text-left md:text-left lg:text-left flex flex-wrap ">
        <div class="w-full px-auto mb-6 lg:mb-0">
            <div class="mb-4">

                <div x-data="{ show: true }" x-show="show" class="flex justify-between items-center bg-blue-100 relative text-blue-500 py-1 px-3 rounded-md mb-4">
                    <div class="text-sm">
                        <span class="font-semibold text-blue-600">Successfully</span>
                        <span class="font-normal text-blue-600">
                            Added 3 jobs
                        </span>
                    </div>
                    <div>
                        <button type="button" @click="show = false" class=" text-blue-600 focus:shadow-none focus:outline-none hover:text-blue-500">
                            <span class="text-2xl">&times;</span>
                        </button>
                    </div>
                </div>




                <div class="mb-5 flex flex-auto items-center gap-4 p-0">
                    <h2 class="text-sm tracking-tight leading-10 font-bold text-gray-900 sm:text-base sm:leading-none md:text-base">
                        Showing 3 Jobs
                    </h2>
                    <div class="flex-grow"></div>

                    <div class="inline-flex">
                        <div x-data="{ show: false }" @click.away="show = false" class="relative inline-block text-left">
                            <div>
                                <span class="rounded-md shadow-sm">
                                    <button @click="show = ! show" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-600 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                        Sort By

                                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </div>

                            <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-full rounded-md shadow-lg">
                                <div class="rounded-md bg-white shadow-xs">
                                    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                        <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">Account</a>
                                        <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">Support</a>
                                        <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">License</a>
                                        <form method="POST" action="#">
                                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">
                                                Sign out
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>



                <div class="mb-5 space-y-5">
                    <div x-data="{ show: true }" x-show="show" class="w-full block items-center">
                        <div class=" border border-gray-200 bg-white rounded-md p-5 flex flex-auto justify-between leading-normal gap-5 items-center">

                            <div class="p-4 w-32">
                                <div class="items-center shadow-sm rounded-full">
                                    <a href=""><img class="rounded-full w-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSJFxcFHIau9RLN-noqVmplFZpwXpKu4UlfOw&usqp=CAU" alt="Avatar of OC Consultancy"></a>
                                </div>
                            </div>

                            <div class="flex flex-auto items-center">

                                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 items-center">
                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400 ">Full-time</p>

                                    <div class="text-gray-900 font-bold mb-0 text-2xl"><a href="">Java Software Developer</a> </div>
                                    <p class=" inline-flex text-xs leading-5 font-semibold text-gray-500">Posted 5 hours ago by</p>
                                    <a href="">
                                        <p class="hover:text-blue-400 inline-flex text-xs leading-5 font-bold text-blue-500">OC Constultancy</p>
                                    </a>
                                    <div class="block"></div>

                                </div>
                                <div class="flex-grow"></div>
                                <div class="flex-grow-0 flex-col space-y-4 items-center invisible md:visible lg:visible xl:visible sm:visible w-0 md:w-auto lg:w-auto xl:w-auto sm:w-auto">
                                    <div class="">
                                        <p class="text-base text-gray-500 flex items-center font-semibold">
                                            <svg class="text-gray-500 w-5 h-5 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>

                                            Surakarta
                                        </p>
                                        <p class="text-base text-gray-500 flex items-center font-semibold">
                                            <svg class="text-gray-500 w-5 h-5 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                            </svg>

                                            Sarjana
                                        </p>
                                    </div>

                                    <div class="">
                                        <div class="block">
                                            <button @click="show = false" class="bg-red-100 hover:text-red-400 text-red-500 transition-all duration-150 text-base font-semibold py-1 px-2 rounded-sm w-full">
                                                Remove
                                            </button>
                                        </div>


                                    </div>




                                </div>
                                <div class="flex-grow text-center invisible w-0 lg:w-auto lg:visible xl:w-auto xl:visible">
                                    <a href="">

                                        <p class="px-0 py-0 text-center inline-flex text-base font-semibold text-blue-500 transition-all duration-150  rounded-sm">View Details</p>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div x-data="{ show: true }" x-show="show" class="w-full block items-center">
                        <div class=" border border-gray-200 bg-white rounded-md p-5 flex flex-auto justify-between leading-normal gap-5 items-center">

                            <div class="p-4 w-32">
                                <div class="items-center shadow-sm rounded-full">
                                    <a href=""><img class="rounded-full w-auto" src="https://cms-assets.tutsplus.com/uploads/users/1631/posts/32751/image/HR%20Company%20Logo%20Generator%20copy.jpg" alt="Avatar of NDC"></a>
                                </div>
                            </div>

                            <div class="flex flex-auto items-center">

                                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2  items-center">
                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400 ">Full-time</p>

                                    <div class="text-gray-900 font-bold mb-0 text-2xl"><a href="">Junior Product Designer</a> </div>
                                    <p class=" inline-flex text-xs leading-5 font-semibold text-gray-500">Posted 7 hours ago by</p>
                                    <a href="">
                                        <p class="hover:text-blue-400 inline-flex text-xs leading-5 font-bold text-blue-500">NDC</p>
                                    </a>
                                    <div class="block"></div>

                                </div>
                                <div class="flex-grow"></div>
                                <div class="flex-grow-0 flex-col space-y-4 items-center invisible md:visible lg:visible xl:visible sm:visible w-0 md:w-auto lg:w-auto xl:w-auto sm:w-auto">
                                    <div class="">
                                        <p class="text-base text-gray-500 flex items-center font-semibold">
                                            <svg class="text-gray-500 w-5 h-5 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>

                                            Surakarta
                                        </p>
                                        <p class="text-base text-gray-500 flex items-center font-semibold">
                                            <svg class="text-gray-500 w-5 h-5 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                            </svg>

                                            Sarjana
                                        </p>
                                    </div>

                                    <div class="">
                                        <div class="block">
                                            <button @click="show = false" class="bg-red-100 hover:text-red-400 text-red-500 transition-all duration-150 text-base font-semibold py-1 px-2 rounded-sm w-full">
                                                Remove
                                            </button>
                                        </div>


                                    </div>




                                </div>
                                <div class="flex-grow text-center invisible w-0 lg:w-auto lg:visible xl:w-auto xl:visible">
                                    <a href="">

                                        <p class="px-0 py-0 text-center inline-flex text-base font-semibold text-blue-500 transition-all duration-150  rounded-sm">View Details</p>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div x-data="{ show: true }" x-show="show" class="w-full block items-center">
                        <div class=" border border-gray-200 bg-white rounded-md p-5 flex flex-auto justify-between leading-normal gap-5 items-center">

                            <div class="p-4 w-32">
                                <div class="items-center shadow-sm rounded-full">
                                    <a href=""><img class="rounded-full w-auto" src="https://cdn.shopify.com/s/files/1/1025/6479/products/CentralLandclearing_700x700.jpg?v=1587164577" alt="Avatar of Central Landclearing"></a>
                                </div>
                            </div>

                            <div class="flex flex-auto items-center">

                                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 items-center">
                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400 ">Full-time</p>

                                    <div class="text-gray-900 font-bold mb-0 text-2xl"><a href="">Bussiness Partner Global COO</a> </div>
                                    <p class=" inline-flex text-xs leading-5 font-semibold text-gray-500">Posted 8 hours ago by</p>
                                    <a href="">
                                        <p class="hover:text-blue-400 inline-flex text-xs leading-5 font-bold text-blue-500">Central Landclearing</p>
                                    </a>
                                    <div class="block"></div>

                                </div>
                                <div class="flex-grow"></div>
                                <div class="flex-grow-0 flex-col space-y-4 items-center invisible md:visible lg:visible xl:visible sm:visible w-0 md:w-auto lg:w-auto xl:w-auto sm:w-auto">
                                    <div class="">
                                        <p class="text-base text-gray-500 flex items-center font-semibold">
                                            <svg class="text-gray-500 w-5 h-5 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>

                                            Surakarta
                                        </p>
                                        <p class="text-base text-gray-500 flex items-center font-semibold">
                                            <svg class="text-gray-500 w-5 h-5 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                            </svg>

                                            Sarjana
                                        </p>
                                    </div>

                                    <div class="">
                                        <div class="block">
                                            <button @click="show = false" class="bg-red-100 hover:text-red-400 text-red-500 transition-all duration-150 text-base font-semibold py-1 px-2 rounded-sm w-full">
                                                Remove
                                            </button>
                                        </div>


                                    </div>




                                </div>
                                <div class="flex-grow text-center invisible w-0 lg:w-auto lg:visible xl:w-auto xl:visible">
                                    <a href="">

                                        <p class="px-0 py-0 text-center inline-flex text-base font-semibold text-blue-500 transition-all duration-150  rounded-sm">View Details</p>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>







                </div>



                <div class=" flex flex-auto">
                    <div class="flex-grow"></div>
                    <nav class="relative z-0 inline-flex shadow-sm">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Previous">
                            <!-- Heroicon name: chevron-left -->
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            1
                        </a>
                        <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            2
                        </a>
                        <a href="#" class="hidden md:inline-flex -ml-px relative items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            3
                        </a>
                        <span class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700">
                            ...
                        </span>
                        <a href="#" class="hidden md:inline-flex -ml-px relative items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            8
                        </a>
                        <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            9
                        </a>
                        <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            10
                        </a>
                        <a href="#" class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next">
                            <!-- Heroicon name: chevron-right -->
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                    <div class="flex-grow"></div>

                </div>


            </div>

        </div>
    </div>
</div>