<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Slider</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
</head>
<body>

<!-- Carousel -->
<div class="relative w-full">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide relative flex items-center">
                <div class="absolute left-6 top-1/2 transform -translate-y-1/2 text-white text-left p-6 bg-black bg-opacity-50 rounded-lg max-w-md">
                    <h1 class="text-4xl font-bold">Sale 20% Off
                        On Everything</h1>
                    <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perspiciatis in reprehenderit quae quasi molestiae, ullam consequatur. Quam, quos cumque? Fugiat quis alias ipsum minus id qui nemo dolore architecto.</p>
                    <a href="/shop" class="mt-4 inline-block bg-white text-blue-600 px-6 py-2 rounded-lg">Belanja Sekarang</a>
                </div>
                <img src="{{ asset('images/motorcycle-with-helmet.jpg') }}" class="w-full h-[400px] object-cover" alt="Sparepart Motor">
            </div>
            

            <!-- Slide 2 -->
            <div class="swiper-slide relative flex items-center">
                <div class="absolute left-6 top-1/2 transform -translate-y-1/2 text-white text-left p-6 bg-black bg-opacity-50 rounded-lg max-w-md">
                    <h1 class="text-4xl font-bold">Sale 20% Off
                        On Everything</h1>
                    <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perspiciatis in reprehenderit quae quasi molestiae, ullam consequatur. Quam, quos cumque? Fugiat quis alias ipsum minus id qui nemo dolore architecto.</p>
                    <a href="/shop" class="mt-4 inline-block bg-white text-blue-600 px-6 py-2 rounded-lg">Belanja Sekarang</a>
                </div>
                <img src="{{ asset('images/motorcycle-with-helmet.jpg') }}" class="w-full h-[400px] object-cover" alt="Sparepart Motor">
            </div>
            

            <!-- Slide 3 -->
            {{-- <div class="swiper-slide">
                <img src="https://source.unsplash.com/1600x700/?helmet,motorcycle" class="w-full h-[500px] object-cover" alt="Helm dan Aksesoris">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white text-center p-6">
                    <h1 class="text-4xl font-bold">Helm & Aksesoris Motor</h1>
                    <p class="mt-2">Kualitas terbaik untuk kenyamanan dan keselamatan Anda</p>
                    <a href="/shop" class="mt-4 bg-white text-blue-600 px-6 py-2 rounded-lg">Lihat Koleksi</a>
                </div>
            </div> --}}
        </div>

        <!-- Tombol Navigasi -->
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-button-prev text-white"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

</body>
</html>
