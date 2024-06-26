<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kain - Hikmal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="assets/logo.svg" alt="" width="3%">
                <h1>Toko Kain</h1>
            </div>
            <input type="checkbox" id="btn">
            <label for="btn" id="menu-btn">
                <div id="garis"></div>
            </label>
        </div>
        <nav class="navi" id="hape">
            <ul>
                <li>
                    <a href="#">Beranda</a>
                </li>
                <li>
                    <a href="#" >Produk</a>
                </li>
                <li>
                    <a class="login" href="login.php">Login</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="content" id="banner">
        <img src="assets/beranda.png" alt="">
        <div>
            <h1>Selamat Datang</h1>
            <p>Kualitas terjamin, harga terjangkau, pelayan sangat nyaman.</p>
            <button class="lihat">Lihat Product</button>
        </div>
    </section>
    <h1 class="tengah">Product</h1>
    <div class="carousel" id="produk">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="assets/kain1.jpg" alt="Produk 1">
                <h3>Kain Mantel</h3>
                <p>Harga: $10</p>
                <button class="open-popup-btn">Beli Sekarang</button>
            </div>
            <div class="carousel-item">
                <img src="assets/kain2.webp" alt="Produk 2">
                <h3>Kain Serbet</h3>
                <p>Harga: $15</p>
                <button class="open-popup-btn">Beli Sekarang</button>
            </div>
            <div class="carousel-item">
                <img src="assets/kain3.jpg" alt="Produk 3">
                <h3>Kain Kerudung</h3>
                <p>Harga: $20</p>
                <button class="open-popup-btn">Beli Sekarang</button>
            </div>
            <!-- Tambahkan item lainnya sesuai kebutuhan -->
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>
    <footer>
        <p>&copy; 2024 Toko Kain. hikmal fadhilah.</p>
    </footer>
    <div id="purchase-popup" class="popup">
        <div class="popup-content">
            <h2>Pembelian Barang</h2>
            <form id="purchase-form">
                <div class="input-group">
                    <label for="item-quantity">Jumlah:</label>
                    <input type="number" id="item-quantity" required min="1">
                </div>
                <div class="input-group">
                    <label for="shipping-address">Alamat Pengiriman:</label>
                    <textarea id="shipping-address" required></textarea>
                </div>
                <div class="input-group">
                    <label for="payment-method">Metode Pembayaran:</label>
                    <select id="payment-method" required>
                        <option value="" disabled selected>Pilih metode pembayaran</option>
                        <option value="kartu_kredit">Kartu Kredit</option>
                        <option value="transfer_bank">Transfer Bank</option>
                        <option value="E-Comerce">E-Comerce</option>
                        <!-- Tambahkan opsi lain jika diperlukan -->
                    </select>
                </div>
                <button type="submit">Beli</button>
                <button type="button" class="popup-close" onclick="closePopup()">Batal</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
