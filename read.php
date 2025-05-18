<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Mahasiswa</title>
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
    }

    .content {
      flex-grow: 1;
      background: url('Digital Cyberspace Particles Digital Data Network Stock Footage Video (100_ Royalty-free) 1059112805 _ Shutterstock.jpeg') no-repeat center center;
      background-size: cover;
      padding: 40px;
      min-height: 100vh;
    }

    .table-container {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .table-container h2 {
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
    <div class="content">
      <div class="table-container">
        <h2>👋 Hai, <?= $_SESSION['username']; ?>! - Data Mahasiswa</h2>
        <a href="add.php" class="btn btn-primary mb-3"><i class="bi bi-plus-circle me-1"></i> Tambah Mahasiswa</a>
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Email</th>
              <th>No HP</th>
              <th>ID User</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include("koneksi.php");
            $sql = "SELECT * FROM tbmahasiswa WHERE iduser='" . $_SESSION['iduser'] . "'";
            $exe = $conn->query($sql);
            while ($data = $exe->fetch_assoc()) { ?>
              <tr>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jk'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['nohp'] ?></td>
                <td><?= $data['iduser'] ?></td>
                <td>
                  <a href="edit.php?nim=<?= $data['nim'] ?>" class="btn btn-sm btn-warning"><i
                      class="bi bi-pencil"></i></a>
                  <a href="hapus.php?nim=<?= $data['nim'] ?>" class="btn btn-sm btn-danger"
                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i
                      class="bi bi-trash"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>