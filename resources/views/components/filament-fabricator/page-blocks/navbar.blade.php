@props(['company_name', 'nav_links', 'phone_number', 'company_logo'])
@aware(['page'])
<div class="container mx-auto">
    <nav class="flex justify-between items-center py-6">
        <x-curator-glider 
            class="w-auto h-10" 
            media={{$company_logo}} 
        />
        
        <div class="lg:hidden">
            <button
                class="navbar-burger flex items-center py-2 px-3 text-gray-100 hover:text-gray-200 rounded border border-gray-200 hover:border-gray-300">
                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-12">
            @foreach ($nav_links as $link)
                <li>
                    <a class="text-sm text-gray-800 hover:" href="{{$link['url']}}">{{ $link['name'] }}</a>
                </li>
            @endforeach
        </ul>
        <div class="hidden lg:block">
            <a class="flex items-center gap-1 px-4 py-3 text-xs font-semibold leading-none bg-orange-500 hover:bg-orange-700 text-white rounded-xl"
                href="#">
                <svg class="h-4 inline-block" aria-hidden="true" fill="white" viewBox="0 0 448 512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                    </path>
                </svg>
                WhatsApp
            </a>
        </div>
    </nav>
</div>

<div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="relative flex flex-col py-6 px-6 w-full h-full bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-semibold leading-none" href="#">
                <x-curator-glider 
                    class="w-auto h-10" 
                    media={{$company_logo}} 
                />
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                @foreach ($nav_links as $link)
                <li class="mb-1">
                    <a class="block p-4 text-sm text-gray-500 hover:bg-orange-50 hover:text-orange-600"
                    href"{{$link['url']}}">{{ $link['name'] }}</a>
                </li>
                @endforeach
            </ul>
            <div class="mt-4 pt-6 border-t border-gray-100">
                <a class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-orange-600 hover:bg-orange-700 text-white rounded"
                    href="#">Sign Up</a><a
                    class="block px-4 py-3 mb-2 text-xs text-center text-orange-600 hover:text-orange-700 font-semibold leading-none border border-orange-200 hover:border-orange-300 rounded"
                    href="#">Log In</a>
            </div>
        </div>
        <div class="mt-auto">
            <p class="my-4 text-xs text-gray-400">
                <span>Get in Touch</span>
                <a class="text-orange-600 hover:text-orange-600 underline" href="#">info@example.com</a>
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


<script>
    // Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});

</script>