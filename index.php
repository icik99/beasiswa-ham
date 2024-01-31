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
    <title>Beasiswa  HAM x ITTP</title>
  <!-- link css -->

  <link rel="stylesheet" href="CSS/home.css" />
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>

<body class="bg-white  flex flex-col min-h-screen">
     <!-- Bagian navigasi -->
    <nav class="flex items-center justify-between text-center py-2 px-20 gap-10 w-full bg-blue-500">
        <a href="index.php" class="text-white font-semibold py-2 font-bold text-lg">Pilihan Beasiswa</a>
        <a href="daftar.php" class="text-white font-semibold py-2 font-bold text-lg">Daftar</a>
        <a href="hasil.php" class="text-white font-semibold py-2 font-bold text-lg">Hasil</a>
    </nav>
  
  <div class="text-center text-black mt-12">
    <h1 class="text-6xl font-bold ">Beasiswa</h1>
    <h1 class="text-6xl font-bold ">Himpunan Aku Mencintaimu X ITTP</h1>
    <h1 class="text-2xl mt-4 px-10">Beasiswa Himpunan Aku Mencintaimu adalah program beasiswa yang diselenggarakan oleh para petinggi HAM dalam rangka mencerdaskan anak bangsa. Segera daftarkan diri kalian untuk mendapatkan beasiswa ini!</h1>
</div>

  <!-- Navbar Strat -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active  px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Pilihan Beasiswa</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-dark" href="daftar.php">Daftar
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-dark" href="hasil.php">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </section>
  <!-- Navbar END -->
<!-- card start -->
<div class="flex items-center justify-center gap-3 w-full px-14 mt-10 pb-14">
  <div class="p-6 border-2 rounded-lg bg-blue-700 text-white">
    <h1 class="font-semibold underline mb-4 text-xl text-center"> Beasiswa Anggota HAM</h1>
    <div class="flex items-center justify-center">
      <img src="image/anggota.JPG" class="rounded-full object-contain mb-4 w-[400px] h-[400px]" alt="gambar anggota">
    </div>
      <p>Beasiswa yang diadakan khusus untuk para anggota, serta keluarga anggota Himpunan Aku Mencintaimu. Sedang menempuh pendidikan minimal SMA Sederajat atau sedang berkuliah.</p>
      <div class="flex items-center justify-center mt-5">
        <div class="px-4 py-3  bg-white font-semibold text-slate-800 w-fit flex items-center justify-center rounded-md text-lg"><a href="daftar.php">Daftar Beasiswa Anggota</a>
      </div>
    </div>
  </div>
  <div class="p-6 border-2 rounded-lg bg-white text-black">
    <h1 class="font-semibold underline mb-4 text-xl text-center">Beasiswa Prestasi HAM</h1>
    <div class="flex items-center justify-center ">
      <img src="image/prestasi.JPG" class="rounded-full object-contain mb-4 w-[400px] h-[400px]" alt="gambar prestasi">
    </div>

      <p>Mempunyai sertifikat prestasi akademik atau non akademik skala nasional/internasional diutamakan atau perguruan tinggi luar negeri yang diakui Kemendikbudristek. persyaratan akademik tertentu seperti GPA (Grade Point Average) tinggi atau memiliki prestasi akademik lainnya. </p>
      <div class="flex items-center justify-center mt-5">
        <div class="px-4 py-3 bg-slate-800 font-semibold text-white w-fit flex items-center justify-center rounded-md text-lg"><a href="daftar.php">Daftar Beasiswa Prestasi</a>
      </div>
    </div>
  </div>

</div>
<!-- card end -->
<script src="JS/jquery.min.js"></script>
  <script src="JS/bootstrap.bundle.min.js"></script>
  <script src="JS/script.js"></script>
</body>
</html>