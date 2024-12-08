@props([
    'tagline',
    'title',
    'desc',
    'button_text',
    'image'
])
@aware(['page'])
<section
    class="pb-8 bg-top bg-cover bg-no-repeat relative overflow-hidden">
    <x-curator-glider
        class="object-top absolute -z-10 left-0 right-0 top-0 bottom-0 w-full h-full"
        media={{$image}}
    />
    <div class="container py-16 mx-auto">
        <div class="flex flex-wrap items-center -mx-3">
            <div class="w-full lg:w-1/2 px-3">
                <div class="py-12">
                    <div
                    class="max-w-lg lg:max-w-md mx-auto lg:mx-0 mb-8 text-center lg:text-left">
                    <div class="mt-4">
                        <span class="bg-orange-400 rounded-lg text-black text-sm p-2">{{ $tagline }}</span>
                    </div>
                    <h2
                        class="text-3xl md:text-4xl my-4 font-bold font-heading text-white">
                        <span>{{ $title }}</span>
                        {{-- <span>Solusi Fleksibel untuk Kebutuhan</span>
                        <span class="text-orange-600">Relokasi</span>
                        <span>Anda</span> --}}
                    </h2>
                    <p class="text-gray-400 leading-relaxed">
                        {{ $desc }}
                    </p>
                    </div>
                    <div class="text-center lg:text-left">
                    <a
                        class="block bg-orange-600 hover:bg-orange-400 border-none sm:inline-block py-4 px-8 text-xs text-gray-200 hover:text-gray-50 text-center font-semibold leading-non border rounded-xl"
                        href="#"
                        >{{ $button_text }}
                        <span class="bg-black rounded-2xl px-1 py-2 ml-4">
                            <svg class="inline-block h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                        </a
                    >
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-3 lg:bg-gray-50 mb-12 lg:mb-0">
            <div class="flex items-center justify-center">
                <!-- <img class="lg:max-w-lg" src="/metis-assets/illustrations/working-from-airport.png" alt=""> -->
            </div>
            </div>
        </div>
        <!-- <div
            class="flex flex-wrap items-center justify-center max-w-4xl mx-auto pt-12 pb-4">
            <div class="w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
            <img
                class="mx-auto"
                src="/metis-assets/logos/brands/tesla.svg"
                alt="" />
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
            <img
                class="mx-auto"
                src="/metis-assets/logos/brands/facebook.svg"
                alt="" />
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
            <img
                class="mx-auto"
                src="/metis-assets/logos/brands/marvel.svg"
                alt="" />
            </div>
            <div class="w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
            <img
                class="mx-auto"
                src="/metis-assets/logos/brands/nike.svg"
                alt="" />
            </div>
            <div class="hidden md:block w-1/2 md:w-1/3 lg:w-1/5 px-3 mb-8">
            <img
                class="mx-auto"
                src="/metis-assets/logos/brands/airbnb.svg"
                alt="" />
            </div>
        </div> -->
        </div>
        <div
    class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
    <div
        class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav
        class="relative flex flex-col py-6 px-6 w-full h-full bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
        <a class="mr-auto text-3xl font-semibold leading-none" href="#">
            <img
            class="h-10"
            src="/metis-assets/logos/metis/metis.svg"
            alt=""
            width="auto" />
        </a>
        <button class="navbar-close">
            <svg
            class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        </div>
        <div>
        <ul>
            <li class="mb-1">
            <a
                class="block p-4 text-sm text-gray-500 hover:bg-orange-50 hover:text-orange-600"
                href="#"
                >Product</a
            >
            </li>
            <li class="mb-1">
            <a
                class="block p-4 text-sm text-gray-500 hover:bg-orange-50 hover:text-orange-600"
                href="#"
                >Company</a
            >
            </li>
            <li class="mb-1">
            <a
                class="block p-4 text-sm text-gray-500 hover:bg-orange-50 hover:text-orange-600"
                href="#"
                >About Us</a
            >
            </li>
            <li class="mb-1">
            <a
                class="block p-4 text-sm text-gray-500 hover:bg-orange-50 hover:text-orange-600"
                href="#"
                >Features</a
            >
            </li>
        </ul>
        <div class="mt-4 pt-6 border-t border-gray-100">
            <a
            class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-orange-600 hover:bg-orange-700 text-white rounded"
            href="#"
            >Sign Up</a
            ><a
            class="block px-4 py-3 mb-2 text-xs text-center text-orange-600 hover:text-orange-700 font-semibold leading-none border border-orange-200 hover:border-orange-300 rounded"
            href="#"
            >Log In</a
            >
        </div>
        </div>
        <div class="mt-auto">
        <p class="my-4 text-xs text-gray-400">
            <span>Get in Touch</span>
            <a class="text-orange-600 hover:text-orange-600 underline" href="#"
            >info@example.com</a
            >
        </p>
        <a class="inline-block px-1" href="#">
            <img src="/metis-assets/icons/facebook-orange.svg" alt="" />
        </a>
        <a class="inline-block px-1" href="#">
            <img src="/metis-assets/icons/twitter-orange.svg" alt="" />
        </a>
        <a class="inline-block px-1" href="#">
            <img src="/metis-assets/icons/instagram-orange.svg" alt="" />
        </a>
        </div>
    </nav>
    </div>
</section>
