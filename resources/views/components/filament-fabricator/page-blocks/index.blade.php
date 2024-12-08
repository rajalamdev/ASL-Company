@props(['carousel', 'company_logo'])
@aware(['page'])
<section>
    <div>
        <nav class="flex justify-between items-center py-6 fixed top-0 z-50 w-full left-0 right-0 px-20">
            <a class="text-3xl font-semibold leading-none" href="#">
                <x-curator-glider class="w-auto h-10" media={{$company_logo}} />
            </a>

            <!-- <div class="lg:hidden">
            <button class="navbar-burger flex items-center py-2 px-3 text-blue-800 hover:text-blue-700 rounded border border-blue-200 hover:border-blue-300">
              <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
              </svg>
            </button>
          </div> -->
            <div class="flex items-center">
                <div class="lg:block space-y-2">
                    <a href="#" class="block px-4  leading-none"><img src="images/icon/indonesia.png"
                            alt="" class="w-8"></a>
                    <a href="#" class="block px-4  leading-none"><img src="images/icon/united-kingdom.png"
                            alt="" class="w-8"></a>
                </div>
                <!-- <ul class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-12">
              <li><a class="text-sm text-blueGray-400 hover:text-blueGray-500" href="#">Home</a></li>
              <li><a class="text-sm text-blueGray-400 hover:text-blueGray-500" href="#">About Us</a></li>
              <li><a class="text-sm text-blueGray-400 hover:text-blueGray-500" href="#">Services</a></li>
              <li><a class="text-sm text-blueGray-400 hover:text-blueGray-500" href="#">Blog</a></li>
            </ul> -->
                <div class="flex-col gap-1 flex navbar-burger cursor-pointer">
                    <div class="bg-white h-2 w-12 block"></div>
                    <div class="bg-white h-2 w-12 block"></div>
                    <div class="bg-white h-2 w-12 block"></div>
                </div>
            </div>
        </nav>
        <div class="carousel w-full h-screen bg-cover text-white bg-no-repeat flex items-center overflow-hidden">
            @foreach ($carousel as $index => $item)

                <div id="slide{{$index+1}}" class="carousel-item relative w-full text-white h-screen bg-cover bg-no-repeat"
                    style="background-image: url('/images/hero1.jpeg');">
                    <div class="absolute inset-0 bg-black opacity-50 w-full h-screen z-0"></div>
                    <div class="w-full flex flex-col items-center justify-center text-center z-10">
                        <div class="max-w-lg mx-auto mb-8">
                            <h2 class="text-3xl md:text-4xl mb-4 font-bold font-heading">
                                <span>{{$item['title']}}</span>
                            </h2>
                            <p class="text-blueGray-400 leading-relaxed">{{$item['desc']}}</p>
                            <div class="mt-4">
                                <span class="bg-blue-600 rounded-lg text-gray-900 text-sm p-2">#excellentservice</span>
                                <span class="bg-blue-600 rounded-lg text-gray-900 text-sm p-2">#relokasikantor</span>
                                <span
                                    class="bg-blue-600 rounded-lg text-gray-900 text-sm p-2">#pindahanprofesional</span>
                            </div>
                        </div>
                        <div>
                            <a class="block bg-orange-500 sm:inline-block py-4 px-8 text-xs text-blueGray-500 hover:text-blueGray-600 text-center font-semibold leading-nonerounded text-black"
                                href="/index-2.html">More Info</a>
                        </div>
                    </div>
                    <div class="absolute left-20 right-20 top-1/2 flex -translate-y-1/2 transform justify-between z-10">
                      <a href="#slide{{ $index == 0 ? count($carousel) : $index  }}" class="btn btn-circle">❮</a>
                      <a href="#slide{{ $index == count($carousel) - 1 ? 1 : $index + 2 }}" class="btn btn-circle">❯</a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- bottom right button group -->
        <div class="absolute bottom-0 right-0 p-6">
            <div class="flex items-center justify-center space-x-2">
                <!-- whatsapp button -->
                <a href="https://wa.me/6281212121212" class="whatsapp-button">
                    <img src="images/icon/whatsapp.png" alt="whatsapp" class="w-10">
                </a>
                <!-- instagram button -->
                <a href="https://instagram.com/aslmovers" class="instagram-button">
                    <img src="images/icon/instagram.png" alt="instagram" class="w-10">
                </a>
            </div>
        </div>
    </div>
    <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
        <div class="navbar-backdrop fixed inset-0 bg-blueGray-800 opacity-25"></div>
        <nav class="relative flex flex-col py-6 px-6 w-full h-full bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-semibold leading-none" href="#">
                    <img class="h-10" src="logo.png" alt="" width="auto">
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-blueGray-400 cursor-pointer hover:text-blueGray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1"><a
                            class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-800"
                            href="#">Home</a></li>
                    <li class="mb-1"><a
                            class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-800"
                            href="#">About Us</a></li>
                    <li class="mb-1"><a
                            class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-800"
                            href="#">Services</a></li>
                    <li class="mb-1"><a
                            class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-800"
                            href="#">Contact</a></li>
                    <li class="mb-1"><a
                            class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-800"
                            href="#">Blog</a></li>
                </ul>
                <div class="mt-4 pt-6 border-t border-blueGray-100"><a
                        class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-blue-800 hover:bg-blue-700 text-white rounded"
                        href="#">Contact Now</a><a
                        class="block px-4 py-3 mb-2 text-xs text-center text-blue-800 hover:text-blue-700 font-semibold leading-none border border-blue-200 hover:border-blue-300 rounded"
                        href="#">More Info</a></div>
            </div>
            <div class="mt-auto">
                <p class="my-4 text-xs text-blueGray-400">
                    <span>Get in Touch</span>
                    <a class="text-blue-800 hover:text-blue-800 underline" href="#">info@example.com</a>
                </p>
                <a class="inline-block px-1" href="#">
                    <img src="metis-assets/icons/facebook-blue.svg" alt="">
                </a>
                <a class="inline-block px-1" href="#">
                    <img src="metis-assets/icons/twitter-blue.svg" alt="">
                </a>
                <a class="inline-block px-1" href="#">
                    <img src="metis-assets/icons/instagram-blue.svg" alt="">
                </a>
            </div>
        </nav>
    </div>
</section>

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
