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
   
  <!-- Mengatur karakter encoding menjadi UTF-8 -->
  <meta charset="UTF-8">
    <!-- Konfigurasi viewport untuk desain responsif -->
    
     <!-- Menyertakan Tailwind CSS dari CDN -->
     <script src="https://cdn.tailwindcss.com"></script>
    <!-- Menyertakan jQuery dari CDN untuk penggunaan AJAX -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Daftar Beasiswa</title>
  <!-- link css -->
  <link rel="stylesheet" href="CSS/style.css" />
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body class="bg-blue-500 min-h-screen">
    <!-- Bagian navigasi -->
    <nav class="flex items-center justify-between text-center py-2 px-20 gap-10 w-full bg-blue-500">
        <a href="index.php" class="text-white font-semibold py-2 font-bold text-lg">Pilihan Beasiswa</a>
        <a href="daftar.php" class="text-white font-semibold py-2 font-bold text-lg">Daftar</a>
        <a href="hasil.php" class="text-white font-semibold py-2 font-bold text-lg">Hasil</a>
    </nav>


   <!-- membuat form perndaftaran beasiswa -->
  
    <div class="bg-white border">
      <div class="col-lg-8 mx-auto">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="mb-5">
        <h2 class="text-center mt-4 mb-4 text-lg font-medium  underline text-dark mt-15">Form Pendaftaran Beasiswa</h2>
            <div class="space-y-2">

              <label for="nim" class="text-black font-medium">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" required>
            
            
              <label for="namamhs" class="text-black font-medium">Nama</label>
              <input type="text" class="form-control" id="namamhs" name="namamhs" required>
            
            
              <label for="email" class="text-black font-medium">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            
            
              <label for="hp" class="text-black font-medium">Nomor HP</label>
              <input type="number" class="form-control" id="hp" name="hp" pattern="[0-9]+" required>
            
            
              <label for="semester" class="text-black font-medium">Semester Saat Ini</label>
              <select class="form-control" id="semester" name="semester" required>
                <option value="" disabled selected>-- Pilih Semester --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            
            
              <label for="ipk" class="text-black font-medium">IPK</label>
              <input type="number" step="0.1" class="form-control ipk" id="ipk" name="ipk" readonly>
            
            
              <label for="jenis_beasiswa" class="text-black font-medium">Pilihan Beasiswa</label>
              <select class="form-control pilih" id="jenis_beasiswa" name="jenis_beasiswa" required>
                <option value="" selected>-- Pilih Beasiswa --</option>
                <option value="Anggota HAM">Beasiswa Anggota HAM</option>
                <option value="Prestasi HAM">Beasiswa Prestasi HAM</option>
               
              </select>
            
            
              <label for="berkas" class="text-black font-medium"> Upload Berkas Syarat</label>
              <div class="col-sm-10">
                <input type="file" class="form-control-file berkas" id="berkas" name="berkas" accept=".pdf,.jpg,.jpeg,.png,.zip"
                  required>
                <p id="nama-file" class="text-black font-medium"></p>
              </div>
            </div>
          
          <div class="mt-4">
              <button type="submit" class="px-5 py-2 text-white rounded-lg shadow " id="daftar" style="background: blue"  name="daftar">Daftar</button>
              <button type="reset" class="px-5 py-2 text-white rounded-lg shadow " name="batal" style="background: red" id="batal">Batal</button>
          </div>
          
        </form>
      </div>
    </div>
  <!-- Form END -->

  <!-- Bootstrap core JavaScript -->
  <script src="JS/jquery.min.js"></script>
  <script src="JS/bootstrap.bundle.min.js"></script>
  <script src="JS/script.js"></script>

  <div class="h-10"></div>
</body>

<script>
    let output = document.querySelector(".ipk");
    let tombol = document.querySelector(".daftar");
    let berkas = document.querySelector(".berkas");
    let pilih = document.querySelector(".pilih");

    tombol.disabled = true;
    berkas.disabled = true; 
    pilih.disabled = true;//setting button state to disabled
    output.addEventListener("change", stateHandle);

    function stateHandle() {
        if (document.querySelector(".ipk").value < 3) {
            tombol.disabled = true;
            berkas.disabled = true; 
            pilih.disabled = true; //button remains disabled
        } else {
            tombol.disabled = false;
            berkas.disabled = false; 
            pilih.disabled = false; //button is enabled
        }
    }
</script>



</html>