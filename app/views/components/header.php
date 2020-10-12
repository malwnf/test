<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/min.css">
    <link rel="shortcut icon" href="https://tailwindcss.com/favicon-16x16.png" type="image/x-icon">
    <script type="text/javascript" src="<?= BASEURL; ?>/js/alpine.js"></script>
    
</head>

<body class="antialiased bg-gray-100">
    <nav class=" bg-white py-3 z-50">
        <div x-data="{ open: false }" class="container mx-auto px-4 flex items-center justify-between flex-wrap">
            <a href="<?= BASEURL; ?>" class="flex items-center flex-shrink-0 text-blue-600 mr-6">
                <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" /></svg>
                <span class="font-semibold text-xl tracking-tight">JobsFinder</span>
            </a>
            <div class="block lg:hidden">
                <button x-on:click="{ open = !open }" class="transition duration-300 flex items-center px-3 py-2 text-blue-600 hover:text-blue-400 focus:outline-none focus:shadow-none">
                    <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path class="transition-transform ease-out" x-bind:class="{ 'hidden' : open === true }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />


                        <path class="transition-transform ease-out" x-bind:class="{ 'hidden' : open === false }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />

                    </svg>
                </button>
            </div>
            <div x-bind:class="{ 'hidden' : open === false }" class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                <a href="<?= BASEURL; ?>/explore" class="transition-all duration-300 ease-in-out block mt-4 lg:text-left lg:inline-block lg:mt-0 px-2 py-2  text-sm font-semibold bg-transparent rounded-lg hover:text-gray-900 focus:text-gray-900 lg:hover:text-gray-500 lg:hover:bg-transparent hover:bg-gray-200 focus:outline-none focus:shadow-none">
                        Explore Jobs
                    </a>
                    <a href="<?= BASEURL; ?>/post" class="transition-all duration-300 ease-in-out block mt-4 lg:text-lef lg:inline-block lg:mt-0  px-2 py-2 text-sm font-semibold bg-transparent rounded-lg hover:text-gray-900 lg:hover:text-gray-500 lg:hover:bg-transparent focus:text-gray-900 hover:bg-gray-200 focus:outline-none focus:shadow-none">
                        Post a Job
                    </a>
                    <a href="#" class="transition-all duration-300 ease-in-out block mt-4 lg:text-lef lg:inline-block lg:mt-0   px-2 py-2 text-sm font-semibold bg-transparent rounded-lg hover:text-gray-900 lg:hover:text-gray-500 lg:hover:bg-transparent focus:text-gray-900 hover:bg-gray-200 focus:outline-none focus:shadow-none">
                        Blog
                    </a>
                </div>
                <div class="">
                    
                    <a href="#" class="transition-all duration-500 ease-in-out lg:w-24 lg:text-center block mt-4 lg:inline-block lg:mt-0   px-2 py-2 text-sm font-semibold lg:border lg:border-transparent lg:hover:border-blue-600 lg:text-blue-600 bg-transparent rounded-sm hover:text-gray-900 lg:hover:bg-white focus:text-gray-900 lg:hover:text-blue-600 hover:bg-gray-200 focus:outline-none focus:shadow-none">
                        Login
                    </a>
                    <a href="#" class="transition-all duration-500 ease-in-out lg:w-24 lg:text-center block mt-4 lg:inline-block lg:mt-0   px-2 py-2 text-sm font-semibold lg:border lg:border-blue-600 lg:text-white lg:bg-blue-600 bg-transparent rounded-sm hover:text-gray-900 focus:text-gray-900 lg:hover:bg-white lg:hover:text-blue-600 hover:bg-gray-200 focus:outline-none focus:shadow-none">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </nav>