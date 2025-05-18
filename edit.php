<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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
      position: relative;
      color: white;
    }

    .sidebar::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 0;
    }

    .sidebar>* {
      position: relative;
      z-index: 1;
    }

    .main-content {
      flex-grow: 1;
      padding: 40px;
      background: url('Digital Cyberspace Particles Digital Data Network Stock Footage Video (100_ Royalty-free) 1059112805 _ Shutterstock.jpeg') no-repeat center center;
      background-size: cover;
      min-height: 100vh;
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
      max-width: 700px;
      margin: auto;
    }

    h2 {
      font-weight: bold;
      margin-bottom: 20px;
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

  include("koneksi.php");
  $x = $_GET['nim'];
  $sql = "SELECT * FROM tbmahasiswa WHERE nim='$x'";
  $exe = $conn->query($sql);
  $data = $exe->fetch_assoc();
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
          <a href="read.php" class="nav-link active text-white">
            <i class="bi bi-table me-2"></i> Mahasiswa
          </a>
        </li>
        <li>
          <a href="read2.php" class="nav-link text-white">
            <i class="bi bi-table me-2"></i> Dosen
          </a>
        </li>
      </ul>
      <hr>
      <a href="logout.php" class="btn btn-outline-light">
        <i class="bi bi-box-arrow-right me-1"></i> Logout
      </a>
    </div>

    <div class="main-content">
      <div class="form-container">
        <h2><i class="bi bi-pencil-square me-2"></i> Edit Data Mahasiswa</h2>
        <form action="update.php" method="POST">
          <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" value="<?= $data['nim'] ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
          </div>
          <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select name="jk" class="form-select" required>
              <option value="Laki-laki" <?= $data['jk'] === 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
              <option value="Perempuan" <?= $data['jk'] === 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>" required>
          </div>
          <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" class="form-control" name="nohp" value="<?= $data['nohp'] ?>" required pattern="\d+"
              title="Hanya angka yang diperbolehkan">
          </div>
          <button type="submit" class="btn btn-success"><i class="bi bi-save me-1"></i> Update</button>
          <a href="read.php" class="btn btn-secondary ms-2"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>