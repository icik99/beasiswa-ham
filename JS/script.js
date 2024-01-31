// Script dijalankan saat halaman sudah siap ditampilkan.
$(document).ready(function () {
  // Menangani input dari user pada elemen dengan id 'nim' ketika terjadi event 'input'
  $("#nim").on("input", function () {
    // Mengambil nilai input dari elemen dengan id 'nim' yang diinputkan oleh user.
    var nim = $(this).val();

    // Melakukan ajax request ke server menggunakan fungsi ajax() dengan mengirim data berupa nim yang diinputkan oleh user pada form pendaftaran.
    $.ajax({
      url: "ipk.php",
      type: "post",
      data: {
        nim: nim,
      },

      // Ketika ajax request sukses, script akan mengambil nilai ipk yang diterima dari server dan memasukkan nilai tersebut ke dalam elemen dengan id 'ipk'. Jika nilai ipk kurang dari 3, maka tombol 'jenis_beasiswa', 'berkas', dan 'daftar' akan dinonaktifkan dengan menggunakan fungsi prop(). Jika nilai ipk lebih atau sama dengan 3, maka tombol-tombol tersebut akan diaktifkan kembali.
      success: function (response) {
        $("#ipk").val(response);
        if (response < 3) {
          $("#jenis_beasiswa").prop("disabled", true);
          $("#berkas").prop("disabled", true);
          $("#daftar").prop("disabled", true);
        } else {
          $("#jenis_beasiswa").prop("disabled", false);
          $("#berkas").prop("disabled", false);
          $("#daftar").prop("disabled", false);
        }
      },
    });
  });

  // Menangani input dari user pada elemen dengan id 'ipk' ketika terjadi event 'input'.
  $("#ipk").on("input", function () {
    // Mengambil nilai input dari elemen dengan id 'ipk' yang diinputkan oleh user.
    var ipk = $(this).val();

    // Jika nilai ipk kurang dari 3, maka tombol 'jenis_beasiswa', 'berkas', dan 'daftar' akan dinonaktifkan dengan menggunakan fungsi prop(). Jika nilai ipk lebih atau sama dengan 3, maka tombol-tombol tersebut akan diaktifkan kembali.
    if (ipk < 3) {
      $("#jenis_beasiswa").prop("disabled", true);
      $("#berkas").prop("disabled", true);
      $("#daftar").prop("disabled", true);
    } else {
      $("#jenis_beasiswa").prop("disabled", false);
      $("#berkas").prop("disabled", false);
      $("#daftar").prop("disabled", false);
    }
  });
});

// ambil elemen input file
var input = document.getElementById("berkas");

// tambahkan event listener pada input file
input.addEventListener("change", function () {
  // ambil nama file yang dipilih
  var namaFile = input.value.split("\\").pop();

  // ubah warna dan isi teks pada elemen p dengan id 'nama-file'
  var namaFileElement = document.getElementById("nama-file");
  namaFileElement.style.color = "white";
  namaFileElement.textContent = namaFile;
});
