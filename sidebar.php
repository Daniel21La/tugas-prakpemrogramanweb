<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
    }

    .sidebar {
      width: 280px;
      height: 100vh;
      background: url('0k7sVehP.jpeg') no-repeat center center;
      background-size: cover;
      color: white;
      position: relative;
    }

    .sidebar::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.7);
      z-index: 0;
    }

    .sidebar>* {
      position: relative;
      z-index: 1;
    }

    .sidebar a:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar .brand {
      font-size: 1.5rem;
      font-weight: bold;
      display: flex;
      align-items: center;
    }

    .sidebar .brand i {
      margin-right: 10px;
      font-size: 1.8rem;
    }

    .content {
      padding: 40px;
      flex-grow: 1;
      background: url('download (2).jpeg') no-repeat center center;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .welcome-box {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
      max-width: 700px;
    }

    .welcome-box h1 {
      font-size: 2rem;
      font-weight: bold;
    }

    .welcome-box p {
      font-size: 1.2rem;
      color: #555;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location:login.php?pesan=belum_login");
    exit;
  }
  ?>

  <div class="d-flex">

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white sidebar">
      <a href="sidebar.php" class="d-flex align-items-center mb-3 text-white text-decoration-none">
        <i class="bi bi-mortarboard-fill me-2 fs-4"></i>
        <span class="fs-4">Pemrograman Web</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="read.php" class="nav-link text-white">
            <i class="bi bi-table me-1"></i> Mahasiswa
          </a>
        </li>
        <li>
          <a href="read2.php" class="nav-link text-white">
            <i class="bi bi-table me-1"></i> Dosen
          </a>
        </li>
      </ul>
      <hr>
      <a href="logout.php" class="btn btn-outline-light">
        <i class="bi bi-box-arrow-right me-1"></i> Logout
      </a>
    </div>

    <div class="content">
      <div class="welcome-box">
        <h1>👋 Selamat datang, <?= $_SESSION['username']; ?>!</h1>
        <p>Ini adalah halaman utama dari <strong>Pemrograman Web</strong>. Silakan pilih menu di samping untuk mengelola
          data Mahasiswa dan Dosen.</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>