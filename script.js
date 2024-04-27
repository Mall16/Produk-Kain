let slideIndex = 0;

function showSlide() {
    const slides = document.querySelectorAll('.carousel-item');
    const width = slides[0].clientWidth + 10; // Ambil lebar item dan tambahkan margin
    const offset = -slideIndex * width; // Hitung pergeseran berdasarkan index slide
    document.querySelector('.carousel-inner').style.transform = `translateX(${offset}px)`; // Gunakan transform untuk menggeser carousel
}

function nextSlide() {
    slideIndex++;
    const slides = document.querySelectorAll('.carousel-item');
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    showSlide();
}

function prevSlide() {
    slideIndex--;
    const slides = document.querySelectorAll('.carousel-item');
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    showSlide();
}

// Tampilkan slide pertama ketika halaman dimuat
showSlide();

// DOM
document.addEventListener("DOMContentLoaded", function() {
    // Temukan tombol di dalam elemen dengan ID "banner"
    var button = document.getElementById("banner").querySelector("button");

    // Tambahkan event listener untuk klik tombol
    button.addEventListener("click", function() {
        // Dapatkan elemen dengan ID "product" sebagai tujuan berpindah
        var productSection = document.getElementById("produk");

        // Gulir halaman ke bagian tujuan menggunakan smooth scroll behavior
        productSection.scrollIntoView({ behavior: "smooth" });
    });
});
