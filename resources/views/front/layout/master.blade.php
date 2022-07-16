<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valhut</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,700;1,700&display=swap"
          rel="stylesheet">
</head>

<body class="max-w-7xl mx-auto space-y-20 py-10 px-4 xl:px-0">

<!-- nav -->
<div class="flex justify-start sm:justify-between flex-col sm:flex-row">
    <div><p class="text-3xl font-bold">Va<span class="text-green-800">lh</span>ut</p></div>
    <div>
        <ul class="flex flex-row space-x-4 justify-start sm:justify-center items-center">
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">About Us</a></li>
            <li>
                <a href="#"
                   class="bg-gray-200 text-gray-900 py-2 inline-flex justify-center items-center px-4 rounded-lg hover:bg-gray-300 hover:text-gray-800">
                    Create
                    Account</a>
            </li>
        </ul>
    </div>
</div>

<!-- hero -->
<div class="bg-green-50 flex items-center justify-between rounded-2xl p-16 grid grid-cols-1 sm:grid-cols-3">

    <div class="sm:col-span-2 flex flex-col justify-start items-center space-y-8">

        <div class="flex flex-row justify-start items-start w-full">
            <div class="bg-gray-900 text-white py-1 px-4">50%</div>
            <div class="bg-gray-200 text-gray-900 py-1 px-4">for any online order</div>
        </div>

        <div class="flex justify-start items-start w-full">
            <p class="text-gray-900 text-6xl tracking-wider font-bold">
                Order Food anywhere anytime.
            </p>
        </div>

        <div class="flex justify-start items-start w-full">
            <p class="text-gray-400">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            </p>
        </div>

        <div class="flex justify-start items-start w-full">

            <div class="drop-shadow-2xl rounded-full flex space-x-2 bg-white py-2 px-4">
                <input
                        class="focus:outline-none focus:ring-0"
                        placeholder="Enter your location"
                />
                <button class="rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full"
                        type="submit"/>
                Search
                </button>
            </div>

        </div>

    </div>

    <div class="hidden sm:block">
        <img src="images/food-2.png">
    </div>

</div>

<!-- items -->
<div class="space-y-8">

    <h1 class="text-4xl tracking-wider font-bold">
        <span class="border-b-4 border-orange-400">Featured</span> items
    </h1>

    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4 sm:gap-2">

        <div class="space-y-4 bg-gradient-to-b from-white to-green-100 rounded-3xl flex items-center justify-center pt-4 flex-col">

            <div class="flex relative">
                <img src="images/food-3.jpg" class="rounded-full h-48"/>

                <span class="absolute bottom-4 right-0 inline-flex items-center justify-center h-14 w-14 rounded-full bg-green-800 text-white border border-2">
                    <span class="font-medium leading-none text-white">$5</span>
                </span>
            </div>

            <div class="flex flex-row items-center justify-center space-x-2">
                <div class="flex -space-x-2 relative z-0 overflow-hidden">
                    <img class="relative z-30 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-1.jpeg"
                         alt="">
                    <img class="relative z-20 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-2.jpeg"
                         alt="">
                    <img class="relative z-10 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-3.jpeg"
                         alt="">
                    <img class="relative z-0 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-4.jpeg"
                         alt="">
                </div>

                <div>
                    <span class="text-orange-400 text-sm">(5.00)</span>
                </div>
            </div>

            <div>
                <span class="text-green-900 font-bold">Pizza Hut</span>
            </div>

            <div class="">
                <p class="text-gray-400 px-4 text-center">
                    Pellentesque habitant morbi tristique senectus et.
                </p>
            </div>

            <div class="">
                <a href="#" class="mt-8 rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full">
                    Order Now
                </a>
            </div>
        </div>

        <div class="space-y-4 bg-gradient-to-b from-white to-green-100 rounded-3xl flex items-center justify-center pt-4 flex-col">

            <div class="flex relative">
                <img src="images/food-4.jpg" class="rounded-full h-48"/>

                <span class="absolute bottom-4 right-0 inline-flex items-center justify-center h-14 w-14 rounded-full bg-green-800 text-white border border-2">
                    <span class="font-medium leading-none text-white">$5</span>
                </span>
            </div>

            <div class="flex flex-row items-center justify-center space-x-2">
                <div class="flex -space-x-2 relative z-0 overflow-hidden">
                    <img class="relative z-30 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-1.jpeg"
                         alt="">
                    <img class="relative z-20 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-2.jpeg"
                         alt="">
                    <img class="relative z-10 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-3.jpeg"
                         alt="">
                    <img class="relative z-0 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-4.jpeg"
                         alt="">
                </div>

                <div>
                    <span class="text-orange-400 text-sm">(5.00)</span>
                </div>
            </div>

            <div>
                <span class="text-green-900 font-bold">Pizza Hut</span>
            </div>

            <div class="">
                <p class="text-gray-400 px-4 text-center">
                    Pellentesque habitant morbi tristique senectus et.
                </p>
            </div>

            <div class="-mt-8">
                <a href="#" class="mt-8 rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full">
                    Order Now
                </a>
            </div>
        </div>

        <div class="space-y-4 bg-gradient-to-b from-white to-green-100 rounded-3xl flex items-center justify-center pt-4 flex-col">

            <div class="flex relative">
                <img src="images/food-5.jpg" class="rounded-full h-48"/>

                <span class="absolute bottom-4 right-0 inline-flex items-center justify-center h-14 w-14 rounded-full bg-green-800 text-white border border-2">
                    <span class="font-medium leading-none text-white">$5</span>
                </span>
            </div>

            <div class="flex flex-row items-center justify-center space-x-2">
                <div class="flex -space-x-2 relative z-0 overflow-hidden">
                    <img class="relative z-30 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-1.jpeg"
                         alt="">
                    <img class="relative z-20 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-2.jpeg"
                         alt="">
                    <img class="relative z-10 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-3.jpeg"
                         alt="">
                    <img class="relative z-0 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-4.jpeg"
                         alt="">
                </div>

                <div>
                    <span class="text-orange-400 text-sm">(5.00)</span>
                </div>
            </div>

            <div>
                <span class="text-green-900 font-bold">Pizza Hut</span>
            </div>

            <div class="">
                <p class="text-gray-400 px-4 text-center">
                    Pellentesque habitant morbi tristique senectus et.
                </p>
            </div>

            <div class="-mt-8">
                <a href="#" class="mt-8 rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full">
                    Order Now
                </a>
            </div>
        </div>

        <div class="space-y-4 bg-gradient-to-b from-white to-green-100 rounded-3xl flex items-center justify-center pt-4 flex-col">

            <div class="flex relative">
                <img src="images/food-6.jpg" class="rounded-full h-48"/>

                <span class="absolute bottom-4 right-0 inline-flex items-center justify-center h-14 w-14 rounded-full bg-green-800 text-white border border-2">
                    <span class="font-medium leading-none text-white">$5</span>
                </span>
            </div>

            <div class="flex flex-row items-center justify-center space-x-2">
                <div class="flex -space-x-2 relative z-0 overflow-hidden">
                    <img class="relative z-30 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-1.jpeg"
                         alt="">
                    <img class="relative z-20 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-2.jpeg"
                         alt="">
                    <img class="relative z-10 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-3.jpeg"
                         alt="">
                    <img class="relative z-0 inline-block h-8 w-8 rounded-full ring-2 ring-white"
                         src="images/person-4.jpeg"
                         alt="">
                </div>

                <div>
                    <span class="text-orange-400 text-sm">(5.00)</span>
                </div>
            </div>

            <div>
                <span class="text-green-900 font-bold">Pizza Hut</span>
            </div>

            <div class="">
                <p class="text-gray-400 px-4 text-center">
                    Pellentesque habitant morbi tristique senectus et.
                </p>
            </div>

            <div class="-mt-8">
                <a href="#" class="mt-8 rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full">
                    Order Now
                </a>
            </div>
        </div>

    </div>

</div>

<!-- about -->
<div class="flex grid grid-cols-1 sm:grid-cols-3 justify-center items-center">
    <div class="hidden sm:block col-span-2 flex justify-start items-start">
        <img src="images/dish-1.png">
    </div>

    <div class="space-y-8">
        <h1 class="text-4xl tracking-wider font-bold">
            <span class="border-b-4 border-green-800">About</span> Foodie
        </h1>

        <p class="text-gray-400 text-left">
            Pellentesque habitant morbi tristique senectus et.
            morbi tristique senectus et.
        </p>

        <div>
            <ul class="space-y-4 flex flex-col items-start justify-start">
                <li class="inline-flex items-center justify-center space-x-4">
                    <div class="bg-gray-200 p-6 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-8 w-8 text-gray-700"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col items-start justify-start">
                        <p class="text-gray-900 text-left font-bold">Pellentesque</p>
                        <p class="text-gray-400 text-sm text-left">
                            Pellentesque habitant morbi tristique senectus et.
                        </p>
                    </div>
                </li>
                <li class="inline-flex items-center justify-center space-x-4">
                    <div class="bg-gray-200 p-6 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-8 w-8 text-gray-700"
                             fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col items-start justify-start">
                        <p class="text-gray-900 text-left font-bold">Consectetur adipisicing</p>
                        <p class="text-gray-400 text-sm text-left">
                            Consectetur adipisicing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </li>
            </ul>
        </div>

        <div>
            <div class="">
                <a href="#"
                   class="inline-flex justify-between items-center rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full">
                    See More

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-3 w-3 text-white ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- chef -->
<div class="flex grid grid-cols-1 sm:grid-cols-3 justify-center items-center">

    <div class="col-span-2 space-y-8">
        <h1 class="text-4xl tracking-wider font-bold">
            <span class="border-b-4 border-green-800">About</span> Our Chef
        </h1>

        <p class="text-gray-400 text-left">
            Pellentesque habitant morbi tristique senectus et.
            morbi tristique senectus et.
        </p>

        <div>
            <ul class="space-y-4 flex flex-col items-start justify-start">
                <li class="inline-flex items-center justify-center space-x-4">
                    <div class="bg-gray-200 p-6 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-8 w-8 text-gray-700"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col items-start justify-start">
                        <p class="text-gray-900 text-left font-bold">Pellentesque</p>
                        <p class="text-gray-400 text-sm text-left">
                            Pellentesque habitant morbi tristique senectus et.
                        </p>
                    </div>
                </li>
                <li class="inline-flex items-center justify-center space-x-4">
                    <div class="bg-gray-200 p-6 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-8 w-8 text-gray-700"
                             fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col items-start justify-start">
                        <p class="text-gray-900 text-left font-bold">Consectetur adipisicing</p>
                        <p class="text-gray-400 text-sm text-left">
                            Consectetur adipisicing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </li>
                <li class="inline-flex items-center justify-center space-x-4">
                    <div class="bg-gray-200 p-6 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-8 w-8 text-gray-700"
                             fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col items-start justify-start">
                        <p class="text-gray-900 text-left font-bold">Consectetur adipisicing</p>
                        <p class="text-gray-400 text-sm text-left">
                            Consectetur adipisicing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </li>
            </ul>
        </div>

        <div>
            <div class="">
                <a href="#"
                   class="inline-flex justify-between items-center rounded-lg bg-green-800 hover:bg-green-900 text-white py-2 px-8 rounded-full">
                    See More

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-3 w-3 text-white ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="hidden sm:block flex justify-start items-start">
        <img src="images/chef-1.png">
    </div>


</div>

<!-- footer -->
<div class="text-gray-700">
    <div class="justify-start flex flex-col items-center py-8 mx-auto max-w-7xl sm:flex-row">
        <a href="#_" class="text-xl font-black leading-none text-gray-900 select-none logo">Foodie<span
                class="text-green-800">.</span></a>
        <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">© 2022 Foodie - The
            Best Restaurant Template
        </p>

        <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>
        </span>
    </div>
</div>


</body>
</html>
