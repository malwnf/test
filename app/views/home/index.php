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

<link rel='stylesheet' href='<?= BASEURL; ?>/css/owl.css'>


<style>
    .owl-stage {
        padding: 0;
    }

    .uk-card-blue {
        background-color: #3182ce;
    }

    .uk-card-blue {
        background: #3182ce;
        color: #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .08)
    }

    .uk-card-blue .uk-card-title {
        color: #fff
    }

    .uk-card-blue.uk-card-hover:hover {
        background-color: #4299e1;
        box-shadow: 0 14px 25px rgba(0, 0, 0, .16)
    }

    .uk-section {
        padding-top: 0;
        padding-bottom: 1rem;

    }

    .owl-carousel {
        position: relative;
        margin-top: 30px;
    }

    .owl-nav {
        margin-right: -0.3125rem;
        position: absolute;
        bottom: 10;
        right: 0;
    }

    .owl-theme .owl-nav [class*="owl-"]:hover {
        background: #4299e1;
        color: #fff;
        text-decoration: none;
    }

    .uk-card-blue {
        border-radius: 8px;
    }

    h3 {
        margin-top: 10px
    }

    .uk-card> :last-child {
        margin-top: 0;
        margin-bottom: 10px
    }


    .owl-next {
        background: #3286f0;
    }

    .owl-theme .owl-nav [class*='owl-'] {
        background: #3182ce;
    }

    .owl-dots {
        display: none;
        margin-top: 30px;
    }

    .uk-card-title {
        padding-bottom: 20px
    }
</style>

<main class="py-10 sm:py-12 md:py-16 lg:py-20 xl:py-28 bg-transparent">
    <div class="container mx-auto px-4 sm:text-center md:text-left">
        <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:w-3/4 xl:w-2/4">
            Data to enrich your
            <br class="lg:hidden">
            <span class="text-blue-600">online business</span>
        </h2>
        <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-lg sm:max-w-xl  md:mt-5 md:text-xl lg:mx-0 ">
            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
        </p>
        <div class="mt-5 sm:mt-8 md:flex md:justify-center mx-auto lg:justify-start">
            <div class="mt-3 sm:mt-0 md:w-full ">
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full lg:w-1/3 xl:w-1/4 px-3 lg:px-auto mb-6 lg:mb-0">
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none  focus:bg-white border border-gray-200 focus:border-gray-500 font-medium" id="search_job" type="text" placeholder="Try “Software Developer”">
                    </div>
                    <div class="w-full lg:w-1/4 xl:w-1/6 px-3 mb-6 lg:mb-0">
                        <div class="inline-flex items-center w-full bg-gray-200 rounded relative">
                            <svg class="h-5 w-5 text-gray-500 absolute left-0 ml-3 flex items-center pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 pl-10 pr-4 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500 font-medium " id="search_loc" type="text" placeholder="Location">
                        </div>

                    </div>
                    <div class="w-full lg:w-40 xl:w-40 px-3 mb-6 lg:mb-0"><a href="<?= BASEURL; ?>/explore">
                            <button class="appearance-none block w-full bg-blue-600 text-white font-medium rounded py-3 px-4 leading-tight focus:outline-none focus:bg-blue-500 hover:bg-blue-500" id="grid-zip">Search Job</button></a>

                    </div>
                </div>
            </div>
        </div>


    </div>



</main>

<div class="py-10 sm:py-12 md:py-16 lg:py-20 xl:py-28 bg-white">
    <div class="container mx-auto px-4 sm:text-left md:text-left lg:text-left flex flex-wrap ">




        <!-- ... -->
        <div class="w-full lg:w-4/12 px-auto lg:px-0 md:mb-3 sm:mb-2 lg:mb-0 ">
            <h2 class="text-3xl tracking-tight leading-10 font-bold text-gray-900 sm:text-4xl sm:leading-none md:text-5xl">
                Find the right Job for you
            </h2>
        </div>
        <!-- ... -->
        <div class="w-full lg:w-8/12 px-auto lg:pl-32 mb-6 lg:mb-0 ">
            <p class=" text-base text-gray-600 mb-5 lg:mt-3 sm:text-md sm:max-w-xl mx-0 md:text-lg sm:mx-0 md:mx-0 lg:mx-0 ">
                Suggested Searches
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Software Development
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Engineering
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Business Development
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Finance
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Administrative Assistant
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Retail Associate
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Customer Service
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Operations
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Marketing
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Information Technology
                </a>
                <a href="" class="bg-blue-100 hover:bg-blue-200 text-gray-900 font-semibold py-2 px-4 rounded-full lg:text-base md:text-base text-sm">
                    Human Resource
                </a>
            </div>
        </div>

    </div>
</div>




<main class="py-10 sm:py-12 md:py-16 lg:py-20 xl:py-28 mb-5">
    <div class="container mx-auto px-4">

        <div class="flex flex-wrap w-full block flex-grow mb-0">
            <div class="px-auto lg:px-0 md:mb-3 sm:mb-2 lg:mb-0 flex-grow">
                <h2 class="text-3xl tracking-tight leading-10 font-bold text-gray-900 sm:text-4xl sm:leading-none md:text-5xl">Recommended Jobs</h2>
            </div>
            <div class="px-auto lg:px-0 mb-0 lg:mb-0"><a href="<?= BASEURL; ?>/explore">
                    <button class="appearance-none block w-full bg-blue-600 text-white font-medium rounded py-3 px-4 leading-tight focus:outline-none focus:bg-blue-500 hover:bg-blue-500">
                        See More
                    </button></a>
            </div>
        </div>

        <div class="uk-section bg-transparent py-0 ">
            <div class="owl-carousel owl-theme">

                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="shadow-sm border border-gray-200 bg-white rounded-md p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-base text-gray-500 flex items-center font-normal mb-4">
                                <svg class="text-gray-500 w-4 h-4 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                Surakarta
                            </p>
                            <div class="text-gray-900 font-semibold mb-2 text-2xl"><a href="">Java Software Developer</a> </div>
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400">Full-time</p>
                        </div>
                        <div class="flex items-center">
                            <a href=""><img class="w-10 h-10 rounded-full mr-4" src="https://tailwindcss.com/img/jonathan.jpg" alt="Avatar of Jonathan Reinink"></a>

                            <div class="">
                                <p class="text-gray-700 leading-none text-md font-semibold">
                                    <a href="">Jonathan Reinink</a> </p>
                                <p class="text-gray-500 text-sm">Aug 18</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="shadow-sm border border-gray-200 bg-white rounded-md p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-base text-gray-500 flex items-center font-normal mb-4">
                                <svg class="text-gray-500 w-4 h-4 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                Surakarta
                            </p>
                            <div class="text-gray-900 font-semibold mb-2 text-2xl"><a href="">Java Software Developer</a> </div>
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-orange-100 text-orange-400">Part-time</p>
                        </div>
                        <div class="flex items-center">
                            <a href=""><img class="w-10 h-10 rounded-full mr-4" src="https://tailwindcss.com/img/jonathan.jpg" alt="Avatar of Jonathan Reinink"></a>

                            <div class="">
                                <p class="text-gray-700 leading-none text-md font-semibold">
                                    <a href="">Jonathan Reinink</a> </p>
                                <p class="text-gray-500 text-sm">Aug 18</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="shadow-sm border border-gray-200 bg-white rounded-md p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-base text-gray-500 flex items-center font-normal mb-4">
                                <svg class="text-gray-500 w-4 h-4 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                Surakarta
                            </p>
                            <div class="text-gray-900 font-semibold mb-2 text-2xl"><a href="">Java Software Developer</a> </div>
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400">Full-time</p>
                        </div>
                        <div class="flex items-center">
                            <a href=""><img class="w-10 h-10 rounded-full mr-4" src="https://tailwindcss.com/img/jonathan.jpg" alt="Avatar of Jonathan Reinink"></a>

                            <div class="">
                                <p class="text-gray-700 leading-none text-md font-semibold">
                                    <a href="">Jonathan Reinink</a> </p>
                                <p class="text-gray-500 text-sm">Aug 18</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="shadow-sm border border-gray-200 bg-white rounded-md p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-base text-gray-500 flex items-center font-normal mb-4">
                                <svg class="text-gray-500 w-4 h-4 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                Surakarta
                            </p>
                            <div class="text-gray-900 font-semibold mb-2 text-2xl"><a href="">Java Software Developer</a> </div>
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400">Full-time</p>
                        </div>
                        <div class="flex items-center">
                            <a href=""><img class="w-10 h-10 rounded-full mr-4" src="https://tailwindcss.com/img/jonathan.jpg" alt="Avatar of Jonathan Reinink"></a>

                            <div class="">
                                <p class="text-gray-700 leading-none text-md font-semibold">
                                    <a href="">Jonathan Reinink</a> </p>
                                <p class="text-gray-500 text-sm">Aug 18</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="shadow-sm border border-gray-200 bg-white rounded-md p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-base text-gray-500 flex items-center font-normal mb-4">
                                <svg class="text-gray-500 w-4 h-4 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                Surakarta
                            </p>
                            <div class="text-gray-900 font-semibold mb-2 text-2xl"><a href="">Java Software Developer</a> </div>
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400">Full-time</p>
                        </div>
                        <div class="flex items-center">
                            <a href=""><img class="w-10 h-10 rounded-full mr-4" src="https://tailwindcss.com/img/jonathan.jpg" alt="Avatar of Jonathan Reinink"></a>

                            <div class="">
                                <p class="text-gray-700 leading-none text-md font-semibold">
                                    <a href="">Jonathan Reinink</a> </p>
                                <p class="text-gray-500 text-sm">Aug 18</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="shadow-sm border border-gray-200 bg-white rounded-md p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-base text-gray-500 flex items-center font-normal mb-4">
                                <svg class="text-gray-500 w-4 h-4 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                Surakarta
                            </p>
                            <div class="text-gray-900 font-semibold mb-2 text-2xl"><a href="">Java Software Developer</a> </div>
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400">Full-time</p>
                        </div>
                        <div class="flex items-center">
                            <a href=""><img class="w-10 h-10 rounded-full mr-4" src="https://tailwindcss.com/img/jonathan.jpg" alt="Avatar of Jonathan Reinink"></a>

                            <div class="">
                                <p class="text-gray-700 leading-none text-md font-semibold">
                                    <a href="">Jonathan Reinink</a> </p>
                                <p class="text-gray-500 text-sm">Aug 18</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="shadow-sm border border-gray-200 bg-white rounded-md p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-base text-gray-500 flex items-center font-normal mb-4">
                                <svg class="text-gray-500 w-4 h-4 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                Surakarta
                            </p>
                            <div class="text-gray-900 font-semibold mb-2 text-2xl"><a href="">Java Software Developer</a> </div>
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400">Full-time</p>
                        </div>
                        <div class="flex items-center">
                            <a href=""><img class="w-10 h-10 rounded-full mr-4" src="https://tailwindcss.com/img/jonathan.jpg" alt="Avatar of Jonathan Reinink"></a>

                            <div class="">
                                <p class="text-gray-700 leading-none text-md font-semibold">
                                    <a href="">Jonathan Reinink</a> </p>
                                <p class="text-gray-500 text-sm">Aug 18</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-sm w-full lg:max-w-full lg:flex">
                    <div class="shadow-sm border border-gray-200 bg-white rounded-md p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8">
                            <p class="text-base text-gray-500 flex items-center font-normal mb-4">
                                <svg class="text-gray-500 w-4 h-4 mr-1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                Surakarta
                            </p>
                            <div class="text-gray-900 font-semibold mb-2 text-2xl"><a href="">Java Software Developer</a> </div>
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-100 text-green-400">Full-time</p>
                        </div>
                        <div class="flex items-center">
                            <a href=""><img class="w-10 h-10 rounded-full mr-4" src="https://tailwindcss.com/img/jonathan.jpg" alt="Avatar of Jonathan Reinink"></a>

                            <div class="">
                                <p class="text-gray-700 leading-none text-md font-semibold">
                                    <a href="">Jonathan Reinink</a> </p>
                                <p class="text-gray-500 text-sm">Aug 18</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </div>
    </div>



</main>

<div class="py-10 sm:py-12 md:py-16 lg:py-20 xl:py-28 bg-white">
    <div class="container mx-auto px-4 max-w-8xl">

        <p class="text-base leading-6 font-semibold text-blue-600 uppercase tracking-wide lg:text-center">Experience Tailwind UI</p>
        <h2 class="mt-2 max-w-3xl text-2xl leading-8 font-semibold font-display text-gray-900 sm:text-3xl sm:leading-9 lg:max-w-4xl lg:text-4xl lg:leading-10 lg:mx-auto lg:text-center ">
            Get familiar with how Tailwind UI works by exploring some free sample components.
        </h2>
        <div class="mt-8 space-y-6 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8 lg:mt-16">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <span class="h-10 w-10 pt-0.5 bg-blue-600 flex items-center justify-center rounded-full text-lg leading-10 font-display font-bold text-white">01</span>
                </div>
                <div class="ml-4">
                    <p class="text-lg leading-6 font-medium text-gray-900">Find the perfect component</p>
                    <p class="mt-1 max-w-xl text-base leading-6 text-gray-500 lg:mt-2">
                        Every component is embedded live directly on the page, and you can even see what they look like at different breakpoints by dragging the slider on the right.
                    </p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <span class="h-10 w-10 pt-0.5 bg-blue-600 flex items-center justify-center rounded-full text-lg leading-10 font-display font-bold text-white">02</span>
                </div>
                <div class="ml-4">
                    <p class="text-lg leading-6 font-medium text-gray-900">Copy the snippet</p>
                    <p class="mt-1 max-w-xl text-base leading-6 text-gray-500 lg:mt-2">
                        Click the "Code" tab to see the code for a component and grab the part that you need, or click the clipboard button to quickly copy the entire snippet in one step.
                    </p>
                </div>
            </div>
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <span class="h-10 w-10 pt-0.5 bg-blue-600 flex items-center justify-center rounded-full text-lg leading-10 font-display font-bold text-white">03</span>
                </div>
                <div class="ml-4">
                    <p class="text-lg leading-6 font-medium text-gray-900">Make it yours</p>
                    <p class="mt-1 max-w-xl text-base leading-6 text-gray-500 lg:mt-2">
                        Every component is built entirely out of Tailwind utility classes, so you can easily dive in and adjust anything you want to better fit your use case.
                    </p>
                </div>
            </div>



        </div>
    </div>



</div>

<div class="py-4 sm:py-6 md:py-10 lg:py-14 xl:py-22">
    <div class="container mx-auto px-4 max-w-8xl">
        <div class="bg-gray-50">
            <div class="max-w-screen-xl mx-auto lg:flex lg:items-center lg:justify-between">
                <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Ready to dive in?
                    <br>
                    <span class="text-blue-600">Start your free trial today.</span>
                </h2>
                <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0 gap-4 md:gap-0 lg:gap-0 xl:gap-0">
                    <div class="w-full md:w-32 md:h-12 lg:w-40 xl:w-40 inline-flex rounded-md shadow">
                        <a href="#" class="w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:shadow-none transition duration-150 ease-in-out">
                            Get started
                        </a>
                    </div>
                    <div class="w-full md:w-32 md:h-12 md:ml-3 lg:w-40 xl:w-40 lg:ml-3 xl:ml-3 sm:ml-0 inline-flex rounded-md shadow">
                        <a href="#" class="w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-600 bg-white hover:text-blue-500 focus:outline-none focus:shadow-none transition duration-150 ease-in-out">
                            Learn more
                        </a>
                    </div>
                </div>
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

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script> -->
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