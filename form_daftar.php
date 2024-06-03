<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Cisarua</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="form_daftar.php">Pendaftaran</a>
        <a class="nav-link" href="form_daftar_guru.php">Data Guru</a>
      </div>
    </div>

<h2>Formulir Pendaftaran</h2>

<form action="proses_pendaftaran.php" method="post">
    <label for="nomorTelepon">Nomor Telepon:</label>
    <input type="tel" id="nomorTelepon" name="nomorTelepon" placeholder="Masukkan nomor telepon" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Masukkan alamat email" required>
    <br>

    <label for="jurusan1">Pilihan Jurusan 1:</label>
    <select id="jurusan1" name="jurusan1" required>
        <option value="to">Teknik Otomotif</option>
        <option value="rpl">Rekayasa Perangkat Lunak</option>
        <option value="ph">Perhotelan</option>
        <option value="mp">Manajemen Perkantoran</option>
    </select>
    <br>

    <label for="jurusan2">Pilihan Jurusan 2:</label>
    <select id="jurusan2" name="jurusan2" required>
        <option value="to">Teknik Otomotif</option>
        <option value="rpl">Rekayasa Perangkat Lunak</option>
        <option value="ph">Perhotelan</option>
        <option value="mp">Manajemen Perkantoran</option>
    </select>
    <br>

    <input type="submit" value="Daftar">
</form>

</body>
</html>
