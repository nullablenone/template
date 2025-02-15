<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nullablenone</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">nullablenone</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#beranda"><i class="bi bi-house"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#fitur"><i class="bi bi-grid"></i> Fitur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak"><i class="bi bi-envelope"></i> Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="beranda" class="bg-light py-5 mt-5">
    <div class="container py-5">
      <div class="row justify-content-center text-center">
        <div class="col-md-8">
          <h1 class="display-4 fw-bold mb-4">Selamat Datang</h1>
          <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, quis.</p>
          <button class="btn btn-primary btn-lg px-5">Mulai Sekarang</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="fitur" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Fitur Unggulan</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <i class="bi bi-speedometer2 text-primary fs-1 mb-3"></i>
              <h3 class="h5 card-title">Cepat</h3>
              <p class="card-text">Performa website yang cepat dan responsif.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <i class="bi bi-shield-check text-primary fs-1 mb-3"></i>
              <h3 class="h5 card-title">Aman</h3>
              <p class="card-text">Sistem keamanan yang terjamin dan terpercaya.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <i class="bi bi-phone text-primary fs-1 mb-3"></i>
              <h3 class="h5 card-title">Responsif</h3>
              <p class="card-text">Tampilan yang responsif di semua perangkat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- User Data Section -->
  <section id="data-user" class="py-5 bg-light">
    <?php require_once 'components/table.php' ?>
  </section>

  <!-- Contact Form Section -->
  <section id="form-kontak" class="py-5">
    <?php require_once 'components/form.php' ?>
  </section>

  <!-- Footer -->
  <footer id="kontak" class="bg-dark text-white py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5 class="mb-3">Tentang Kami</h5>
          <p class="mb-0">Kami menyediakan solusi website modern dan profesional untuk kebutuhan Anda.</p>
        </div>
        <div class="col-md-6">
          <h5 class="mb-3">Kontak</h5>
          <p class="mb-0">
            <i class="bi bi-envelope-fill me-2"></i>useryesa9@gmail.com<br>
            <i class="bi bi-telephone-fill me-2"></i>085810116384
          </p>
        </div>
      </div>
      <hr class="my-4">
      <div class="text-center">
        <p class="mb-0">&copy; 2025 nullablenone. Hak Cipta Dilindungi.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>