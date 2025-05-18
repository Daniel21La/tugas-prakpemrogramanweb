<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Dosen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
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

    .main-content {
      flex-grow: 1;
      background: url('Digital business image with graphs and diagrams….jpeg') no-repeat center center;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .form-card {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 600px;
    }

    .form-label {
      font-weight: 500;
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
            <i class="bi bi-table me-2"></i> Mahasiswa
          </a>
        </li>
        <li class="nav-item">
          <a href="read2.php" class="nav-link active text-white" aria-current="page">
            <i class="bi bi-table me-2"></i> Dosen
          </a>
        </li>
      </ul>
      <hr>
      <a href="logout.php" class="btn btn-outline-light">
        <i class="bi bi-box-arrow-right"></i> Logout
      </a>
    </div>

    <div class="main-content">
      <div class="form-card">
        <h3 class="mb-4"><i class="bi bi-person-plus-fill me-2"></i> Form Tambah Dosen</h3>
        <form action="simpan2.php" method="POST">
          <div class="mb-3">
            <label for="nidn" class="form-label">NIDN</label>
            <input type="text" class="form-control" id="nidn" name="nidn" required>
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jk" name="jk" required>
              <option value="" disabled selected>Pilih jenis kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
          </div>
          <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="nohp" name="nohp" required>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">
              <i class="bi bi-save-fill me-1"></i> Simpan
            </button>
            <a href="read2.php" class="btn btn-secondary">
              <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
