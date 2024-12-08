@props(['services_slider'])
@aware(['page'])
<section class="h-screen relative container mx-auto bg-no-repeat bg-cover" style="background-image: url('https://e1.pxfuel.com/desktop-wallpaper/379/331/desktop-wallpaper-company-profile.jpg');">
    <div class="w-full h-full absolute left-0 right-0 top-0 bottom-0" style="background-color: rgba(0, 0, 0, 0.8);"></div>
    <div class="flex items-center justify-center text-center gap-4 h-full max-w-[600px] mx-auto relative z-10">
        @foreach ($services_slider as $index => $item)
            <div class="slide space-y-4" style="{{ $index == 0 ? 'display: block;' : 'display: none;' }}"> <!-- Tambahkan kelas 'slide' di sini -->
                <h3 class="text-4xl font-bold text-white">{{ $item['title'] }}</h3>
                <p style="color: rgba(255, 255, 255, 0.8);">{{ $item['desc'] }}</p>
            </div>
        @endforeach
    </div>
        <div class="btn btn-circle cursor-pointer bg-white w-12 h-12 rounded-full left absolute left-20 top-1/2 grid place-content-center">
            <a class="btn btn-circle">❮</a>
        </div>
        <div class="btn btn-circle cursor-pointer bg-white w-12 h-12 rounded-full right absolute right-20 top-1/2 grid place-content-center">
            <a class="btn btn-circle">❯</a>
        </div>
    </div>
</section>

<script>
    // script.js
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide'); // Pastikan setiap slide memiliki kelas 'slide'
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = (i === index) ? 'block' : 'none'; // Tampilkan slide yang sesuai
        });
        // Update konten berdasarkan slide yang aktif
        const currentContent = slidesContent[index];
        document.querySelector('.text-4xl').textContent = currentContent.title;
        document.querySelector('p').textContent = currentContent.description;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides; // Pindah ke slide berikutnya
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides; // Pindah ke slide sebelumnya
        showSlide(currentSlide);
    }

    // Event listeners untuk tombol navigasi
    document.querySelector('.btn-circle.left').addEventListener('click', (e) => {
        e.preventDefault(); // Mencegah perilaku default anchor
        prevSlide();
    });
    document.querySelector('.btn-circle.right').addEventListener('click', (e) => {
        e.preventDefault(); // Mencegah perilaku default anchor
        nextSlide();
    });

    // Tampilkan slide pertama saat halaman dimuat
    showSlide(currentSlide);
</script>