<script>
    window.console = window.console || function(t) {};
</script>



<script>
    if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
    }
</script>

<div class="py-4 sm:py-12 md:py-16 lg:py-20 xl:py-28 ">
    <div class="container mx-auto px-4 sm:text-left md:text-left lg:text-left flex flex-wrap ">




        <!-- ... -->
        <div class="w-full lg:w-2/12 px-auto lg:px-0 mb-8 md:mb-3 sm:mb-2 lg:mb-0 space-y-4   sm:space-y-4 md:space-y-4 lg:space-y-4 xl:space-y-4">
            <a href="<?= BASEURL; ?>/company"><img class="rounded-full w-48 h-48" src="https://cdn.shopify.com/s/files/1/1025/6479/products/CentralLandclearing_700x700.jpg?v=1587164577" alt="Avatar of Company Name"></a>

            <div class="">
                <h2 class="text-2xl tracking-tight leading-10 font-bold text-gray-900 sm:text-3xl sm:leading-none md:text-4xl">
                    Central Landclearing
                </h2>
                <div class="flex flex-wrap space-x-4 sm:space-x-4 md:space-x-0 lg:space-x-0 xl:space-x-0 mt-0 sm:mt-2 md:mt-2 lg:mt-2 xl:mt-2 mb-4  ">
                    <p class="text-base text-gray-500 flex items-center font-semibold inline-flex mt-2">
                        <svg class="text-gray-500 w-5 h-5 mr-2 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        Surakarta
                    </p>
                    <p class="text-base text-gray-500 flex items-center font-semibold inline-flex mt-2">
                        <svg class="text-gray-500 w-5 h-5 mr-2 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>

                        Plant engineering
                    </p>
                </div>
                <div class="object-right">
                    <button class="bg-blue-100 hover:text-blue-400 text-blue-500 transition-all duration-150 text-base font-semibold py-2 px-3 rounded-sm inline-flex items-center ">
                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        <span>
                            Follow
                        </span>
                    </button>

                </div>
            </div>



        </div>
        <!-- ... -->
        <div class="w-full lg:w-10/12 px-auto lg:pl-32 mb-6 lg:mb-0 ">
            <div x-data="{
                    openTab: 1,
                    activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
                    inactiveClasses: 'text-blue-500 hover:text-blue-800'
                }" class="">
                <ul class="flex border-b">
                    <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                        <a :class="openTab === 1 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                            General
                        </a>
                    </li>
                    <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                        <a :class="openTab === 2 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Jobs</a>
                    </li>
                    <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                        <a :class="openTab === 3 ? activeClasses : inactiveClasses" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Contact</a>
                    </li>
                </ul>
                <div class="w-full pt-4 sm:pt-5 md:pt-5 lg:pt-8 xl:pt-8">
                    <div x-show="openTab === 1" class="space-y-4 sm:space-y-4 md:space-y-4 lg:space-y-5 xl:space-y-5">
                        <div class="">
                            <h2 class="text-xl tracking-tight leading-10 font-semibold text-gray-900 sm:text-2xl sm:leading-none md:text-2xl mb-0 lg:mb-2 xl:mb-2">
                                Info
                            </h2>
                            <p class="text-gray-600 text-sm sm:text-sm md:text-sm lg:text-base xl:text-base">
                                Bereits seit 1904 ist die Bosch-Gruppe in der Schweiz präsent. Inzwischen sind es in der Schweiz bereits 7 Rechtseinheiten an 18 Standorten, die mit schweizerischem Qualitätsdenken und –handeln zum Welterfolg von Bosch beitragen.
                            </p>
                        </div>
                        <div class="">
                            <h2 class="text-xl tracking-tight leading-10 font-semibold text-gray-900 sm:text-2xl sm:leading-none md:text-2xl mb-0 lg:mb-2 xl:mb-2">
                                About
                            </h2>
                            <p class="text-gray-600 text-sm sm:text-sm md:text-sm lg:text-base xl:text-base">
                                Autos fahren von ganz alleine, Maschinen kommunizieren und Häuser werden smart. Bei Bosch lassen wir diese Visionen wahr werden – und verbessern damit die Lebensqualität von Menschen auf der ganzen Welt. Starten Sie etwas Grosses und werden Sie Teil eines globalen Netzwerks aus Vordenkern und Wegbereitern, in dem Sie Bemerkenswertes schaffen können: Technik fürs Leben.
                            </p>
                        </div>

                    </div>
                    <div x-show="openTab === 2">
                        <div class="w-full block items-center">
                            <div class=" border border-gray-200 bg-white rounded-md p-5 flex flex-auto justify-between leading-normal gap-5 items-center">

                                <div class="p-4 w-32">
                                    <div class="items-center shadow-sm rounded-full">
                                        <a href="<?= BASEURL; ?>/company"><img class="rounded-full w-auto" src="https://cdn.shopify.com/s/files/1/1025/6479/products/CentralLandclearing_700x700.jpg?v=1587164577" alt="Avatar of OC Consultancy"></a>
                                    </div>
                                </div>

                                <div class="flex flex-auto items-center">

                                    <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 items-center">
                                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400 ">Full-time</p>

                                        <div class="text-gray-900 font-bold mb-0 text-2xl"><a href="<?= BASEURL; ?>/details">Java Software Developer</a> </div>
                                        <p class=" inline-flex text-xs leading-5 font-semibold text-gray-500">Posted 5 hours ago by</p>
                                        <a href="<?= BASEURL; ?>/company">
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


                                </div>

                            </div>
                        </div>
                    </div>
                    <div x-show="openTab === 3">
                    <div class="">
                            <h2 class="text-md tracking-tight leading-10 font-semibold text-gray-900 sm:text-base sm:leading-none md:text-base mb-0 lg:mb-2 xl:mb-2">
                            Kontakt Personalabteilung
                            </h2>
                            <p class="text-gray-600 text-lg sm:text-lg md:text-lg lg:text-lg xl:text-lg">
                            Lorem Ipsum , Tel: +62 (32) 686-3613
                            </p>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>