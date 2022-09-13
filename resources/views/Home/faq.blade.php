@extends('Home.layouts.template')
@section('content1')

<div id="animation-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-40 overflow-hidden md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="img/wig1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-200 ease-linear absolute inset-0 transition-all transform -translate-x-full z-10"
            data-carousel-item="">
            <img src="img/wig2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-200 ease-linear absolute inset-0 transition-all transform translate-x-0 z-20"
            data-carousel-item="active">
            <img src="img/wig3.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev="">
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next="">
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

@endsection
@section('content2')
<div class="container mx-auto my-4">

    <div id="accordion-open" data-accordion="collapse">
        <h2 id="accordion-open-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white"
                data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                aria-controls="accordion-open-body-1">
                <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd"></path>
                    </svg> What is Flowbite?</span>
                <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-open-body-1" class="" aria-labelledby="accordion-open-heading-1">
            <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                    components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                        href="/docs/getting-started/introduction/"
                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
                    websites even faster with components on top of Tailwind CSS.</p>
            </div>
        </div>
        <h2 id="accordion-open-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                aria-controls="accordion-open-body-2">
                <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd"></path>
                    </svg>Is there a Figma file available?</span>
                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
            <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the
                    Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the
                    utility classes from Tailwind CSS and components from Flowbite.</p>
            </div>
        </div>
        <h2 id="accordion-open-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                aria-controls="accordion-open-body-3">
                <span class="flex items-center"><svg class="w-5 h-5 mr-2 shrink-0" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                            clip-rule="evenodd"></path>
                    </svg> What are the differences between Flowbite and Tailwind UI?</span>
                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
            <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from
                    Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                    difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                    sections of pages.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                    Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best
                    of two worlds.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                    <li><a href="https://flowbite.com/pro/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection