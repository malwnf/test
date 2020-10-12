<style>
    .autocomplete-suggestion {
        padding: 1rem 1rem;
        white-space: nowrap;
        overflow: hidden;
        font-weight: 300;
        color: #71809d;
        background-color: #ffffff;
    }

    .autocomplete-selected {
        background: #edf2f7;
    }

    .autocomplete-suggestions strong {
        font-weight: 500;
        color: #4f5568;
    }

    .autocomplete-group {
        background-color: #ffffff;
        font-weight: 500;
        padding: 2px 5px;
    }

    .autocomplete-group strong {
        display: block;
        border-bottom: 1px solid #000;
    }
</style>

<div class="py-10 sm:py-12 md:py-16 lg:py-20 xl:py-28 bg-white">
    <div class="container mx-auto px-4 sm:text-left md:text-left lg:text-left flex flex-wrap ">




        <!-- ... -->
        <div class="w-full lg:w-4/12 px-auto lg:px-0 md:mb-3 sm:mb-2 lg:mb-0 ">
            <p class="text-gray-600">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <h2 class="text-3xl tracking-tight leading-10 font-bold text-gray-900 sm:text-4xl sm:leading-none md:text-5xl">
                Explore Jobs
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

<div class="py-10 sm:py-12 md:py-16 lg:py-20 xl:py-28 bg-transparent">
    <div class="container mx-auto px-4 sm:text-left md:text-left lg:text-left flex flex-wrap ">




        <!-- ... -->
        <div class="w-full lg:w-2/12 px-auto lg:px-0 md:mb-3 sm:mb-2 lg:mb-0 ">
            <div class="mb-5">
                <h2 class="text-sm tracking-tight leading-10 font-bold text-gray-900 sm:text-base sm:leading-none md:text-base">
                    Search Keywords
                </h2>
                <div class="w-full block px-0 mb-6 lg:mb-0 mt-2">
                    <div class="inline-flex items-center w-full bg-white rounded relative">
                        <svg class="h-5 w-5 text-gray-500 absolute right-0 mr-3 flex items-center pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />


                        </svg>
                        <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 pl-4 pr-10 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500 font-medium text-sm" id="keywords" type="text" placeholder="e.g. web design">
                    </div>

                </div>
            </div>
            <div class="mb-5">
                <h2 class="text-sm tracking-tight leading-10 font-bold text-gray-900 sm:text-base sm:leading-none md:text-base">
                    Search Locations
                </h2>
                <div class="w-full block px-0 mb-6 lg:mb-0 mt-2">
                    <div class="inline-flex items-center w-full bg-white rounded relative">
                        <svg class="h-5 w-5 text-gray-500 absolute right-0 mr-3 flex items-center pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 pl-4 pr-10 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500 font-medium text-sm" id="search_loc" type="text" placeholder="Location">
                    </div>

                </div>
            </div>
            <div class="mb-5">
                <h2 class="text-sm tracking-tight leading-10 font-bold text-gray-900 sm:text-base sm:leading-none md:text-base">
                    Categories
                </h2>
                <div class="w-full block px-0 mb-6 lg:mb-0 mt-2">

                    <button class="bg-white hover:bg-gray-100 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center w-full bg-white rounded relative focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500">
                        <span class="text-gray-500 font-medium text-sm">Download</span>
                        <svg class="h-5 w-5 text-gray-500 absolute right-0 mr-3 flex items-center" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>

                    </button>

                </div>
            </div>
            <div class="mb-5">
                <h2 class="text-sm tracking-tight leading-10 font-bold text-gray-900 sm:text-base sm:leading-none md:text-base">
                    Date Posted
                </h2>
                <div class="block">
                    <div class="mt-2">
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="radio" class="form-radio" name="radio" value="1">
                                <span class="ml-2">Last Hour</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="radio" class="form-radio" name="radio" value="2">
                                <span class="ml-2">Last 24 Hours</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="radio" class="form-radio" name="radio" value="3">
                                <span class="ml-2">Last 7 Days</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="radio" class="form-radio" name="radio" value="3">
                                <span class="ml-2">Last 14 Days</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="radio" class="form-radio" name="radio" value="3">
                                <span class="ml-2">Last 30 Days</span>
                            </label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h2 class="text-sm tracking-tight leading-10 font-bold text-gray-900 sm:text-base sm:leading-none md:text-base">
                    Job Type
                </h2>
                <div class="block">
                    <div class="mt-2 text-gray-600">
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="checkbox" class="form-checkbox">
                                <span class="ml-2">Fixed Term</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="checkbox" class="form-checkbox">
                                <span class="ml-2">Flexible Hours</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="checkbox" class="form-checkbox">
                                <span class="ml-2">Full Time</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="checkbox" class="form-checkbox">
                                <span class="ml-2">Part Time</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center text-gray-600 text-sm">
                                <input type="checkbox" class="form-checkbox">
                                <span class="ml-2">Temporary</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <!-- ... -->
        <div class="w-full lg:w-10/12 px-auto lg:pl-5 mb-6 lg:mb-0">
            <div class="mb-2">
                <h2 class="text-sm tracking-tight leading-10 font-bold text-gray-900 sm:text-base sm:leading-none md:text-base ">
                    Your Selected
                </h2>
                <div class="flex flex-auto bg-blue-100 py-2 px-3 gap-2 rounded-sm mt-2">

                    <button class="bg-white  text-gray-600 font-medium text-xs py-1 px-2 rounded-md     inline-flex items-center focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500">
                        <svg class="w-4 h-4 mr-2 text-gray-600 hover:text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span>All Locations</span>
                    </button>


                    <button class="bg-white  text-gray-600 font-medium text-xs py-1 px-2 rounded-md inline-flex items-center focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500">
                        <svg class="w-4 h-4 mr-2 text-gray-600 hover:text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span>All Categories</span>
                    </button>

                    <div class="flex-grow"></div>

                    <button class="bg-transparent hover:text-gray-700 text-gray-500 font-medium text-xs py-1 px-2 rounded-md inline-flex items-center focus:outline-none focus:bg-transparent border-none focus:border-none inset-y-0.right-0">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        <span>Clear All</span>
                    </button>

                </div>
            </div>


            <div class="mb-5 flex flex-auto items-center gap-4 p-0">
                <h2 class="text-sm tracking-tight leading-10 font-bold text-gray-900 sm:text-base sm:leading-none md:text-base">
                    Showing 1-10 of 1150 Jobs
                </h2>
                <div class="flex-grow"></div>
                <p class="text-xs tracking-tight leading-10 font-medium text-gray-500 sm:text-sm sm:leading-none md:text-sm">
                    Sort By:
                </p>
                <div class="inline-flex">

                    <button class=" bg-white hover:bg-gray-100 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center w-full bg-white rounded relative focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500">
                        <span class="text-gray-500 font-medium text-sm mr-6">Newest</span>
                        <svg class="h-4 w-4 text-gray-500 absolute right-0 mr-3 flex items-center" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>

                    </button>
                </div>

            </div>



            <div class="mb-5 space-y-5">
                <div class="w-full block items-center">
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
                                        <button class="bg-blue-100 hover:text-blue-400 text-blue-500 transition-all duration-150 text-base font-semibold py-1 px-2 rounded-sm w-full">
                                            Add to Bookmark
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

                <div class="w-full block items-center">
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
                                        <button class="bg-blue-100 hover:text-blue-400 text-blue-500 transition-all duration-150 text-base font-semibold py-1 px-2 rounded-sm w-full">
                                            Add to Bookmark
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


                <div class="w-full block items-center">
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
                                        <button class="bg-blue-100 hover:text-blue-400 text-blue-500 transition-all duration-150 text-base font-semibold py-1 px-2 rounded-sm w-full">
                                            Add to Bookmark
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




<script src="<?= BASEURL; ?>/js/jquery-min.js"></script>
<script src="<?= BASEURL; ?>/js/jquery-auto.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Data yang ditamilkan pada autocomplete.
        var jateng = [{
                value: 'Banjarnegara',
                data: 'Banjarnegara'
            },
            {
                value: 'Banyumas',
                data: 'Banyumas'
            },
            {
                value: 'Batang',
                data: 'Batang'
            },
            {
                value: 'Blora',
                data: 'Blora'
            },
            {
                value: 'Boyolali',
                data: 'Boyolali'
            },
            {
                value: 'Brebes',
                data: 'Brebes'
            },
            {
                value: 'Cilacap',
                data: 'Cilacap'
            },
            {
                value: 'Demak',
                data: 'Demak'
            },
            {
                value: 'Grobogan',
                data: 'Grobogan'
            },
            {
                value: 'Jepara',
                data: 'Jepara'
            },
            {
                value: 'Karanganyar',
                data: 'Karanganyar'
            },
            {
                value: 'Kebumen',
                data: 'Kebumen'
            },
            {
                value: 'Kendal',
                data: 'Kendal'
            },
            {
                value: 'Klaten',
                data: 'Klaten'
            },
            {
                value: 'Kudus',
                data: 'Kudus'
            },
            {
                value: 'Magelang',
                data: 'Magelang'
            },
            {
                value: 'Pati',
                data: 'Pati'
            },
            {
                value: 'Pekalongan',
                data: 'Pekalongan'
            },
            {
                value: 'Pemalang',
                data: 'Pemalang'
            },
            {
                value: 'Purbalingga',
                data: 'Purbalingga'
            },
            {
                value: 'Purworejo',
                data: 'Purworejo'
            },
            {
                value: 'Rembang',
                data: 'Rembang'
            },
            {
                value: 'Semarang',
                data: 'Semarang'
            },
            {
                value: 'Sragen',
                data: 'Sragen'
            },
            {
                value: 'Sukoharjo',
                data: 'Sukoharjo'
            },
            {
                value: 'Tegal',
                data: 'Tegal'
            },
            {
                value: 'Temanggung',
                data: 'Temanggung'
            },
            {
                value: 'Wonogiri',
                data: 'Wonogiri'
            },
            {
                value: 'Wonosobo',
                data: 'Wonosobo'
            },
            {
                value: 'Salatiga',
                data: 'Salatiga'
            },
            {
                value: 'Surakarta',
                data: 'Surakarta'
            },
            {
                value: 'All Locations',
                data: ''
            },

        ];

        // Selector input yang akan menampilkan autocomplete.
        $("#search_loc").autocomplete({
            lookup: jateng
        });
    })
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js'></script>

<script id="rendered-js">
    $('.owl-carousel').owlCarousel({
        loop: false,
        stagePadding: 15,
        margin: 10,
        nav: true,
        navText: ['<span class="uk-margin-small-right uk-icon" uk-icon="icon: chevron-left"></span>', '<span class="uk-margin-small-left uk-icon" uk-icon="icon: chevron-right"></span>'],
        responsive: {
            0: {
                items: 1
            },

            640: {
                items: 2
            },

            960: {
                items: 3
            },

            1200: {
                items: 4
            }
        }
    });
</script>