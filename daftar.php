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
  <title>Program Beasiswa</title>
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

<body class="bg-gradient-to-br from-red-100 to-red-300 flex flex-col min-h-screen"> <!--ganti bg-->
    <!-- Bagian navigasi -->
    <nav class="grid grid-cols-3 justify-center text-center py-2 px-8 gap-10 bg-red-500">
        <a href="index.php" class="hover:bg-red-600 bg-red-500 text-white font-semibold py-2 rounded-2xl">Pilihan Beasiswa</a>
        <a href="daftar.php" class="hover:bg-red-600 bg-red-700 text-white font-semibold py-2 rounded-2xl">Daftar</a>
        <a href="hasil.php" class="hover:bg-red-600 bg-red-500 text-white font-semibold py-2 rounded-2xl">Hasil</a>
    </nav>

    <!-- Jarak antara navigasi dan judul -->
    <div class="h-10"></div>

   <!-- membuat form perndaftaran beasiswa -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="mb-5">
        <h2 class="text-center mt-4 mb-4 text-dark">Form Pendaftaran Beasiswa</h2>
          <div class="form-group">
            <label for="nama" class="text-dark">NIM</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="namamhs" class="text-dark">Nama</label>
            <input type="text" class="form-control" id="namamhs" name="namamhs" required>
          </div>
          <div class="form-group">
            <label for="email" class="text-dark">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="hp" class="text-dark">Nomor HP</label>
            <input type="number" class="form-control" id="hp" name="hp" pattern="[0-9]+" required>
          </div>
          <div class="form-group">
            <label for="semester" class="text-dark">Semester Saat Ini</label>
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
          </div>
          <div class="form-group">
            <label for="ipk" class="text-dark">IPK</label>
            <input type="number" step="0.1" class="form-control ipk" id="ipk" name="ipk" readonly>
          </div>
          <div class="form-group">
            <label for="jenis_beasiswa" class="text-dark">Pilihan Beasiswa</label>
            <select class="form-control pilih" id="jenis_beasiswa" name="jenis_beasiswa" required>
              <option value="" selected>-- Pilih Beasiswa --</option>
              <option value="Djarum">Beasiswa Djarum</option>
              <option value="Prestasi">Beasiswa Prestasi</option>
             
            </select>
          </div>
          <div class="form-group">
            <label for="berkas" class="text-dark"> Upload Berkas Syarat</label>
            <div class="col-sm-10">
              <input type="file" class="form-control-file berkas" id="berkas" name="berkas" accept=".pdf,.jpg,.jpeg,.png,.zip"
                required>
              <p id="nama-file" class="text-dark"></p>
            </div>
          </div>

          <button type="submit" class="btn btn-success daftar" id="daftar" style="background: green"  name="daftar">Daftar</button>
          <button type="reset" class="btn btn-danger" name="batal" style="background: red" id="batal">Batal</button>
          
        </form>
      </div>
    </div>
  </div>
  <!-- Form END -->

  <!-- Bootstrap core JavaScript -->
  <script src="JS/jquery.min.js"></script>
  <script src="JS/bootstrap.bundle.min.js"></script>
  <script src="JS/script.js"></script>

  <div class="h-10"></div>

    <footer class="bg-red-700 text-white py-2 text-center">
        <p>&copy; Khusnul Khatimah. All rights reserved.</p>
    </footer>
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