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

// Mendapatkan elemen tombol untuk membuka popup
const openPopupBtns = document.querySelectorAll(".open-popup-btn");
// Mendapatkan elemen popup pembelian
const purchasePopup = document.getElementById("purchase-popup");

// Fungsi untuk membuka popup
function openPopup() {
    purchasePopup.style.display = 'flex';
}

// Menambahkan event listener ke setiap tombol yang membuka popup
openPopupBtns.forEach(button => {
    button.addEventListener("click", openPopup);
});

// Fungsi untuk menutup popup
function closePopup() {
    purchasePopup.style.display = 'none';
}

// Fungsi asynchronous untuk mengirim data formulir pembelian
async function submitPurchaseForm(formData) {
    // Simulasikan pengiriman data ke server menggunakan promise (bisa diganti dengan fetch atau XMLHttpRequest)
    return new Promise((resolve, reject) => {
        // Simulasi waktu tunggu pengiriman data (contohnya 2 detik)
        setTimeout(() => {
            // Misalnya pengiriman data berhasil
            const isSuccess = true;

            if (isSuccess) {
                resolve("Pembelian berhasil!");
            } else {
                reject("Pembelian gagal.");
            }
        }, 2000);
    });
}

// Fungsi untuk menangani pengiriman formulir pembelian
async function handlePurchaseFormSubmit(event) {
    event.preventDefault(); // Mencegah pengiriman form standar

    // Dapatkan nilai input dari form
    const metode = document.getElementById("payment-method").value;
    const itemQuantity = document.getElementById("item-quantity").value;
    const shippingAddress = document.getElementById("shipping-address").value;

    // Buat objek formData
    const formData = {
        metode,
        itemQuantity,
        shippingAddress
    };

    try {
        // Kirim data formulir menggunakan fungsi asynchronous
        const result = await submitPurchaseForm(formData);
        
        // Tampilkan hasil yang dikembalikan dari fungsi asynchronous
        alert(result);
        
        // Tutup popup setelah pembelian
        closePopup();
    } catch (error) {
        // Tangani kesalahan jika ada
        alert(`Terjadi kesalahan: ${error}`);
    }
}

// Menambahkan event listener ke form ketika DOM sudah dimuat
document.addEventListener("DOMContentLoaded", function() {
    // Dapatkan elemen form
    const purchaseForm = document.getElementById("purchase-form");

    // Tambahkan event listener untuk pengiriman form
    purchaseForm.addEventListener("submit", handlePurchaseFormSubmit);
});
