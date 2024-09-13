<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГІС якість земель України</title>

    <!-- Meta SEO -->
    <meta name="title" content="ГІС якість земель України">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Ukraine">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
<header class="fixed w-full">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{asset('pictures/logo_.png')}}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo"/>
            </a>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#home"
                           class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50
                           lg:hover:bg-transparent lg:border-0 hover:text-purple-700 lg:p-0 "
                           aria-current="page">Головна</a>
                    </li>
                    <li>
                        <a href="#datavisual"
                           class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50
                           lg:hover:bg-transparent lg:border-0 hover:text-purple-700 lg:p-0 ">Візуалізація даних</a>
                    </li>
                    <li>
                        <a href="#dataanalytics"
                           class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50
                            lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400
                             lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white
                             lg:dark:hover:bg-transparent dark:border-gray-700">Аналітика даних</a>
                    </li>
                    <li>
                        <a href="#preference"
                           class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Переваги системи</a>
                    </li>
                    <li>
                        <a href="#about"
                           class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Що визначає систему</a>
                    </li>
                    <li>
                        <a href="#contacts"
                           class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Контакти</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Start block -->
<section class="bg-white dark:bg-gray-900" id="home">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-4xl xl:text-5xl dark:text-white">
                ГІС якість земель України
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                Геоінформаційна система агровиробничих
                груп ґрунтів та їх якісних показників на території України. Інструмент для просторової аналітики та
                візуалізації даних щодо земель та ґрунтів України</p>
            <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="https://github.com/themesberg/landwind"
                   class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                    </svg>
                    <span class="px-2"> Перейти </span>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 12H5m14 0-4 4m4-4-4-4"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{ asset('pictures/gr-1.png') }}" alt="hero image">
        </div>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-16">
        <div
            class="grid grid-cols-2 gap-8 text-l text-gray-500 sm:gap-12 sm:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
            <span>PostGis</span> <span>GeoServer</span> <span>Leaflet</span> <span>Tiles</span>
        </div>
    </div>
</section>
<!-- End block -->
<!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-800" id="datavisual">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:pt-16 lg:pb-16 lg:px-6">
        <!-- Row -->
        <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Візуалізація
                    даних</h2>
                <p class="mb-8 font-light lg:text-xl">Відображення геопрсторових даних на картографічній основі</p>
                <!-- List -->
                <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Межі адміністративно-територіальних одиниць</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Природно-сільськогосподарське районування</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Агровиробничі групи ґрунтів</span>
                    </li>
                </ul>
            </div>
            <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('pictures/gr-2.png') }}"
                 alt="dashboard feature image">
        </div>
    </div>
</section>
<!-- End block -->

<!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-800" id="dataanalytics">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:pt-16 lg:pb-16 lg:px-6">
        <!-- Row -->
        <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16" id="dataanalytics">
            <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('pictures/gr-3.png') }}"
                 alt="feature image 2">
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Аналітика щодо
                    земель та ґрунтів</h2>
                <p class="mb-8 font-light lg:text-xl">Багатофакторний аналіз кількісних та якісних даних щодо земель та
                    ґрунтів та пошук складних взаємозв’язків між цими даними.</p>
                <!-- List -->
                <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Аналітика щодо розповсюдженості агрогруп ґрунтів</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Аналітика щодо якісних показників агрогруп ґрунтів</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Аналітика щодо агрогруп ґрунтів у розрізі адміністративно-територіальних одиниць</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Аналітика щодо агрогруп ґрунтів у розрізі природно-сільскогосподарського районування</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End block -->

<!-- Start block -->
<section class="bg-white dark:bg-gray-900" id="preference">
    <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:pt-16 lg:pb-16 lg:px-6">
        <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Переваги
                    (особливості) системи</h2>
                <p class="mb-8 font-light lg:text-xl">Окрім базової аналітика система пропонує додатковий набір
                    класифікаторів та містить повні дані щодо агровиробничих груп ґрунтів</p>
                <!-- List -->
                <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Працює з вичерпним номенклатурним переліком агрогруп ґрунтів</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Пропонує детальну просторову аналітику щодо особливо цінних земель</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Класифікує ґрунти за їх агрохімічними та агрофізичними властивостями (за гранулометричним складом, за ступенем змитості та іншими показниками)</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Забезпечує аналітику щодо агрогруп ґрунтів у розрізі окупованих та деокупованих територій</span>
                    </li>
                </ul>
            </div>
            <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{ asset('pictures/gr-4.png') }}"
                 alt="dashboard feature image">
        </div>
    </div>
</section>
<!-- End block -->

<!-- Start block -->
<section class="bg-white dark:bg-gray-900" id="about">
    <div
         class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:pb-16 lg:pt-20 lg:px-6">
        <div class="col-span-2 mb-8">
            <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">
                Що визначає систему</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Система містить дані агреговані з усієї країни та покриває всю її територію</p>
            <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
                <div>
                    <a href="#"
                       class="inline-flex items-center text-base font-medium text-purple-600 hover:text-purple-800 dark:text-purple-500 dark:hover:text-purple-700">
                        Перейти
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
            <div>
                <svg class="w-10 h-10 mb-2 text-purple-600 md:w-12 md:h-12 dark:text-purple-500" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                          clip-rule="evenodd"></path>
                </svg>
                <h3 class="mb-2 text-2xl font-bold dark:text-white">603.7 тис км<sup>2</sup></h3>
                <p class="font-light text-gray-500 dark:text-gray-400">Площа території України</p>
            </div>
            <div>
                <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" width="60px" height="60px" fill="#7E3AF2">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                    <g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st1{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;} .st2{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:6,6;} .st3{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:4,4;} .st4{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;} .st5{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-dasharray:3.1081,3.1081;} .st6{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:4,3;} </style> <polygon class="st0" points="12,22 3,27 3,5 12,10 "/> <polygon class="st0" points="20,10 29,5 29,27 20,22 "/> <line class="st0" x1="16" y1="3" x2="16" y2="6"/> <line class="st0" x1="16" y1="27" x2="16" y2="30"/> <line class="st0" x1="16" y1="15" x2="16" y2="18"/> <line class="st0" x1="16" y1="9" x2="16" y2="12"/> <line class="st0" x1="16" y1="21" x2="16" y2="24"/> </g>

</svg>
                <h3 class="mb-2 text-2xl font-bold dark:text-white">215 агрогруп</h3>
                <p class="font-light text-gray-500 dark:text-gray-400">Містить унікальних агрогруп</p>
            </div>
            <div>
                <svg width="60px" height="60px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#7E3AF2">

                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                    <g id="SVGRepo_iconCarrier"> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"/> </g> <g id="Medical"> <g> <path d="M12.1,12A5,5,0,1,0,7,7.1,5,5,0,0,0,12.1,12Z"/> <path d="M16,36a2,2,0,0,0-2,2v4H10V32H6V20a2,2,0,0,1,2-2h6a2,2,0,0,0,0-4H8a6,6,0,0,0-6,6V33a2.9,2.9,0,0,0,3,3H6v7a2.9,2.9,0,0,0,3,3h6a2.9,2.9,0,0,0,3-3V38A2,2,0,0,0,16,36Z"/> <path d="M36.1,12A5,5,0,1,0,31,7.1,5,5,0,0,0,36.1,12Z"/> <path d="M40,14H33a2,2,0,0,0,0,4h7a2,2,0,0,1,2,2V32H38V42H34V38a2,2,0,0,0-4,0v5a2.9,2.9,0,0,0,3,3h6a2.9,2.9,0,0,0,3-3V36h1a2.9,2.9,0,0,0,3-3V20A6,6,0,0,0,40,14Z"/> <path d="M31.4,33.4,37.8,27l-6.4-6.4a2,2,0,0,0-2.8,2.8L30.2,25H17.8l1.6-1.6a2,2,0,0,0-2.8-2.8L10.2,27l6.4,6.4a1.9,1.9,0,0,0,2.8,0,1.9,1.9,0,0,0,0-2.8L17.8,29H30.2l-1.6,1.6a1.9,1.9,0,0,0,0,2.8,1.9,1.9,0,0,0,2.8,0Z"/> </g> </g> </g> </g>

                </svg>
                <h3 class="mb-2 text-2xl font-bold dark:text-white">1469 громад</h3>
                <p class="font-light text-gray-500 dark:text-gray-400">Загальна кількість територіальних громад в Україні</p>
            </div>
            <div>
                <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" width="60px" height="60px" fill="#7E3AF2" stroke="#7E3AF2">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                    <g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st1{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;} .st2{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:6,6;} .st3{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:4,4;} .st4{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;} .st5{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-dasharray:3.1081,3.1081;} .st6{fill:none;stroke:#7E3AF2;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:4,3;} </style> <rect x="4" y="4" class="st0" width="24" height="24"/> <path class="st0" d="M4,25l4.9-4c3.1-2.5,7.3-3,11-1.4l0,0c2,0.9,4.2,1.1,6.4,0.7L28,20"/> <path class="st0" d="M4,13l7-3.2c2.6-1.2,5.5-1.3,8.1-0.3l2.1,0.8c1.2,0.4,2.5,0.7,3.7,0.7H28"/> <path class="st0" d="M24,4l-0.8,1.2C18.7,11.9,17.9,20.5,21,28l0,0"/> <path class="st0" d="M14,4L14,4c-4.8,7.3-4.8,16.7,0,24l0,0"/> </g>

</svg>
                <h3 class="mb-2 text-2xl font-bold dark:text-white">45122 полігонів</h3>
                <p class="font-light text-gray-500 dark:text-gray-400">Система містить полігонів агровиробних груп ґрунтів</p>
            </div>
        </div>
    </div>
</section>
<!-- End block -->

<footer class="bg-gray-100 dark:bg-gray-800" id="contacts">
    <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-1 lg:grid-cols-2">
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Адреса</h3>
                <ul class="text-gray-500 dark:text-gray-400">
                    <li class="mb-4">
                        м. Київ, вул. Васильківська, 37
                    </li>
                    <li class="mb-4">
                        Тел.: +380503113667
                    </li>
                    <li class="mb-4">
                        Email: support@ngo-gromada.com.ua
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
        <div class="">
            <span class="block text-sm text-gray-500 dark:text-gray-400">© 2024 ГІС якість земель України™. All Rights Reserved.
                </span>
        </div>
    </div>
</footer>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetElement = document.querySelector(this.getAttribute('href'));
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    const sections = document.querySelectorAll("section");
    const menuItems = document.querySelectorAll("ul li a");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const id = entry.target.getAttribute("id");
            const menuItem = document.querySelector(`a[href="#${id}"]`);
            console.log(menuItem);
            console.log(entry.isIntersecting);

            if (entry.isIntersecting) {
                menuItem.classList.add("active");
            } else {
                menuItem.classList.remove("active");
            }
        });
    }, { threshold: 0.7 });

    sections.forEach(section => {
        observer.observe(section);
    });
</script>
</body>
</html>
