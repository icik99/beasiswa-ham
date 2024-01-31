<?php
require_once 'koneksi.php';

// // jika tombol daftar ditekan, ambil data dari form dan simpan ke database
if (isset($_POST['daftar'])) {
    // mengambil data yang diinputkan pada form pendaftaran
    $nim = $_POST['nim'];
    $nama = $_POST['namamhs'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $jenis_beasiswa = $_POST['jenis_beasiswa'];
    $berkas = $_FILES['berkas']['name'];
    $status_ajuan = "belum di verifikasi";

    //folder tujuan upload file
    $target_dir = "data/";

    // nama file yang diupload beserta path-nya
    $target_file = $target_dir . basename($_FILES["berkas"]["name"]);

    // ekstensi file yang diupload
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //  simpan file ke folder tujuan upload
    move_uploaded_file($_FILES["berkas"]["tmp_name"], $target_file);

    //  query untuk memasukkan data ke database
    $query = "INSERT INTO pendaftar (nim, nama, email, hp, semester, ipk, jenis_beasiswa, berkas, status_ajuan) 
	          VALUES ('$nim', '$nama', '$email', '$hp', $semester, $ipk, '$jenis_beasiswa', '$berkas', '$status_ajuan')";

    //jalankan query dan simpan hasilnya
    $result = mysqli_query($sat, $query);

    // cek apakah query berhasil dijalankan atau tidak
    if ($result) {
        echo "<script>alert('Pendaftaran berhasil!');</script>";
    } else {
        echo "<script>alert('Pendaftaran gagal!');</script>";
    }
}

// menutup koneksi database
mysqli_close($sat);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Mengatur karakter encoding menjadi UTF-8 -->
  <meta charset="UTF-8">
    <!-- Konfigurasi viewport untuk desain responsif -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Menyertakan Tailwind CSS dari CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Menyertakan jQuery dari CDN untuk penggunaan AJAX -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
  <!-- link css -->

  <link rel="stylesheet" href="CSS/home.css" />
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>

<body class="bg-white flex flex-col min-h-screen">
     <!-- Bagian navigasi -->
     <nav class="flex items-center justify-between text-center py-2 px-20 gap-10 w-full bg-blue-500">
        <a href="index.php" class="text-white font-semibold py-2 font-bold text-lg">Pilihan Beasiswa</a>
        <a href="daftar.php" class="text-white font-semibold py-2 font-bold text-lg">Daftar</a>
        <a href="hasil.php" class="text-white font-semibold py-2 font-bold text-lg">Hasil</a>
    </nav>
    <div class="h-10"></div>
    <div class="h-10"></div>
    <div class="h-10"></div>
    <div class="h-10"></div>

    <div class='flex items-center justify-center'>
        <div>
            <h1 class='text-8xl font-medium mb-3'>Data Berhasil Dikirim!</h1>
            <p class="text-center text-black mb-6"> Untuk melihat data, dan status pengecekan beasiswa anda, klik tombol dibawah!</p>
            <div class='flex items-center justify-center'>
                <a href='hasil.php' class='px-4 py-2 rounded-lg bg-red-500 text-white font-medium text-lg'>Lihat Data dan Status Beasiswa</a>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>