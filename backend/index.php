<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nullablenone</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    .sidebar {
      min-height: 100vh;
      height: 100%;
      background-color: hsl(210, 93%, 27%);
      position: sticky;
      top: 0;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
      padding: 10px 15px;
      display: block;
    }

    .sidebar a:hover {
      background-color: #0f5296;
    }

    .content {
      padding: 20px;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 sidebar p-0">
        <div class="d-flex flex-column">
          <div class="p-3 text-white text-center">
            <h5>nullablenone</h5>
          </div>
          <a href="#"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
          <a href="#"><i class="bi bi-people me-2"></i> Pengguna</a>
          <a href="#"><i class="bi bi-box me-2"></i> Produk</a>
          <a href="#"><i class="bi bi-cart me-2"></i> Pesanan</a>
          <a href="#"><i class="bi bi-graph-up me-2"></i> Laporan</a>
          <a href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-10 content">
        <!-- Navbar -->
        <?php require_once 'components/navbar.php' ?>
        <!-- title -->
        <div class="row mb-4">
          <div class="col-md-12">
            <h2 class="">Dashboard</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero incidunt delectus omnis nobis ipsum
              maiores praesentium iste autem. Fugit voluptatum iusto nemo dolor porro.
            </p>
          </div>
        </div>

        <!-- Cards -->
        <?php require_once 'components/card.php' ?>

        <!-- Table -->
        <?php require_once 'components/table.php' ?>


        <!-- Form -->
        <?php require_once 'components/form.php' ?>



      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>