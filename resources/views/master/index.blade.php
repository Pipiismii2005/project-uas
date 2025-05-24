<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dealer Motor - Beranda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      background: #f9fafc;
      color: #222;
      margin: 0;
      padding: 0;
    }

    nav {
      background-color: #0d3b66;
    }
    nav .navbar-brand {
      font-weight: 700;
      color: #f4d35e;
      font-size: 1.8rem;
    }
    nav .nav-link {
      color: white;
      font-weight: 600;
      margin-left: 1.2rem;
      transition: color 0.3s;
    }
    nav .nav-link:hover {
      color: #f4d35e;
    }

    .hero {
      background: url('https://images.unsplash.com/photo-1519648023493-d82b5f8d7b9a?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
      height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      position: relative;
    }
    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(13, 59, 102, 0.75);
      z-index: 0;
    }
    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 720px;
      padding: 0 1rem;
    }
    .hero-content h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 0 2px 8px rgba(0,0,0,0.7);
    }
    .hero-content p {
      font-size: 1.4rem;
      margin-bottom: 2rem;
      text-shadow: 0 1px 6px rgba(0,0,0,0.6);
    }
    .btn-primary-custom {
      background-color: #f4d35e;
      color: #073b4c;
      font-weight: 700;
      padding: 0.85rem 2.5rem;
      border-radius: 50px;
      border: none;
      box-shadow: 0 4px 12px rgba(244, 211, 94, 0.6);
      transition: background-color 0.3s ease;
    }
    .btn-primary-custom:hover {
      background-color: #ee6c4d;
      color: white;
      box-shadow: 0 6px 15px rgba(238, 108, 77, 0.75);
    }

    .features {
      padding: 5rem 1rem;
      background: white;
      text-align: center;
    }
    .features h2 {
      font-weight: 700;
      color: #0d3b66;
      margin-bottom: 3rem;
      font-size: 2.8rem;
    }
    .feature-item {
      padding: 1.5rem;
      border-radius: 1rem;
      box-shadow: 0 12px 30px rgb(13 59 102 / 0.1);
      background: #f9fafc;
      transition: transform 0.3s ease;
    }
    .feature-item:hover {
      transform: translateY(-15px);
      box-shadow: 0 15px 35px rgb(238 108 77 / 0.3);
    }
    .feature-icon {
      font-size: 3.5rem;
      color: #ee6c4d;
      margin-bottom: 1rem;
    }
    .feature-title {
      font-weight: 600;
      font-size: 1.3rem;
      margin-bottom: 0.8rem;
      color: #073b4c;
    }
    .feature-desc {
      font-size: 1rem;
      color: #555;
    }

    .cta-section {
      background: #ee6c4d;
      color: white;
      padding: 4rem 1rem;
      text-align: center;
      border-radius: 1rem 1rem 0 0;
      margin-top: 4rem;
    }
    .cta-section h2 {
      font-weight: 700;
      font-size: 2.8rem;
      margin-bottom: 1rem;
    }
    .cta-section p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
      max-width: 620px;
      margin-left: auto;
      margin-right: auto;
    }
    .btn-cta {
      background: #f4d35e;
      color: #073b4c;
      font-weight: 700;
      padding: 0.85rem 3rem;
      border-radius: 50px;
      border: none;
      transition: background 0.3s ease;
    }
    .btn-cta:hover {
      background: #073b4c;
      color: #f4d35e;
    }

    footer {
      background-color: #0d3b66;
      color: #f4d35e;
      text-align: center;
      padding: 1rem 0;
      font-weight: 600;
      margin-top: 4rem;
    }

    /* Katalog */
    #katalog h2,
    #kontak h2 {
      color: #0d3b66;
      font-weight: 700;
      margin-bottom: 2rem;
      font-size: 2.5rem;
      text-align: center;
    }
    #katalog .card {
      border-radius: 1rem;
      overflow: hidden;
    }
    #katalog .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2.2rem;
      }
      .features .row > div {
        margin-bottom: 2rem;
      }
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a href="#" class="navbar-brand">DealerMotor</a>
    <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#beranda" class="nav-link">Beranda</a></li>
        <li class="nav-item"><a href="#katalog" class="nav-link">Katalog</a></li>
        <li class="nav-item"><a href="#kontak" class="nav-link">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<section id="beranda" class="hero">
  <div class="hero-content">
    <h1>Temukan Motor Impianmu dengan Mudah</h1>
    <p>Dealer terpercaya dengan pilihan motor terbaik dan harga bersaing. Mulai perjalananmu hari ini!</p>
    <a href="#katalog" class="btn btn-primary-custom">Lihat Katalog</a>
  </div>
</section>

<section class="features container my-5">
  <h2>Mengapa Memilih Kami?</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="feature-item">
        <div class="feature-icon"><i class="bi bi-speedometer2"></i></div>
        <div class="feature-title">Performa Terbaik</div>
        <div class="feature-desc">Motor-motor kami sudah melalui uji kualitas ketat dan siap memberikan performa maksimal.</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-item">
        <div class="feature-icon"><i class="bi bi-shield-lock"></i></div>
        <div class="feature-title">Garansi Resmi</div>
        <div class="feature-desc">Nikmati garansi resmi untuk semua pembelian motor dari dealer kami demi ketenangan hati Anda.</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="feature-item">
        <div class="feature-icon"><i class="bi bi-cash-stack"></i></div>
        <div class="feature-title">Harga Kompetitif</div>
        <div class="feature-desc">Kami menawarkan harga terbaik dengan berbagai promo menarik dan kemudahan pembayaran.</div>
      </div>
    </div>
  </div>
</section>

<section id="katalog" class="container my-5">
  <h2>Katalog Motor Terbaru</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1504215680853-026ed2a45def?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Motor Sport">
        <div class="card-body">
          <h5 class="card-title">Motor Sport X1</h5>
          <p class="card-text">Performa tinggi, desain agresif, cocok untuk pecinta kecepatan.</p>
          <a href="#" class="btn btn-primary-custom">Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1549924231-f129b911e442?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Motor Matic">
        <div class="card-body">
          <h5 class="card-title">Motor Matic Z2</h5>
          <p class="card-text">Praktis dan stylish untuk penggunaan sehari-hari di kota.</p>
          <a href="#" class="btn btn-primary-custom">Detail</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Motor Bebek">
        <div class="card-body">
          <h5 class="card-title">Motor Bebek S3</h5>
          <p class="card-text">Efisien dan mudah dikendarai, cocok untuk perjalanan jauh.</p>
          <a href="#" class="btn btn-primary-custom">Detail</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="kontak" class="container my-5">
  <h2>Kontak Kami</h2>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Alamat Email</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com" />
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Pesan</label>
          <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda"></textarea>
        </div>
        <button type="submit" class="btn btn-primary-custom">Kirim Pesan</button>
      </form>
    </div>
  </div>
</section>

<section class="cta-section">
  <h2>Siap untuk Motor Baru?</h2>
  <p>Hubungi kami sekarang dan dapatkan penawaran terbaik serta layanan konsultasi gratis untuk memilih motor yang tepat untuk Anda.</p>
  <a href="#kontak" class="btn btn-cta">Hubungi Kami</a>
</section>

<footer>
  &copy; 2025 DealerMotor. Semua hak cipta dilindungi.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
