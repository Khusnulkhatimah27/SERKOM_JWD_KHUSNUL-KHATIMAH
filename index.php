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
    <title>Program Beasiswa</title>
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
    <nav class="grid grid-cols-3 justify-center text-center py-2 px-8 gap-10 bg-red-500">
        <a href="index.php" class="hover:bg-red-600 bg-red-700 text-white font-semibold py-2 rounded-2xl">Pilihan Beasiswa</a>
        <a href="daftar.php" class="hover:bg-red-600 bg-red-500 text-white font-semibold py-2 rounded-2xl">Daftar</a>
        <a href="hasil.php" class="hover:bg-red-600 bg-red-500 text-white font-semibold py-2 rounded-2xl">Hasil</a>
    </nav>
  
  <section class="home">
  <h1 class="site-heading text-center text-white d-none d-lg-block $zindex-dropdown:">
    <span class="site-heading-upper text-white mb-3 ">Website Pendaftaran</span>
    <span class="site-heading-lower">BEASISWA</span>
  </h1>

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
<div class="flex items-center justify-center gap-3 px-14 mt-10 pb-14">
  <div class="p-6 border-2 rounded-lg bg-red-700 text-white">
      <h1 class="font-semibold underline mb-4 text-xl text-center"> Beasiswa Djarum</h1>
      <p>Sedang menempuh pendidikan Strata 1 (S1) atau Diploma 4 (D4) di semester IV dari semua disiplin
      ilmu.
      Indek Prestasi Kumulatif (IPK) minimum 3.00 pada semester III, serta dapat mempertahankan IPK
      minimum 3.00 hingga akhir semester IV.
      Aktif mengikuti kegiatan organisasi baik di dalam maupun luar kampus. Tidak sedang menerima beasiswa dari pihak lain.</p>
      <div class="flex items-center justify-center mt-5">
        <div class="px-4 py-3  bg-white font-semibold text-slate-800 w-fit flex items-center justify-center rounded-md text-lg"><a href="daftar.php">Daftar</a>
      </div>
    </div>
  </div>
  <div class="p-6 border-2 rounded-lg bg-white text-black">
      <h1 class="font-semibold underline mb-4 text-xl text-center">Beasiswa Prestasi</h1>
      <p>Mempunyai sertifikat prestasi akademik atau non akademik skala nasional/internasional diutamakan
      Tidak sedang mendapat beasiswa dari pihak lain. Mahasiswa di perguruan tinggi di Indonesia dan prodi yang terakreditasi minimal B/Baik Sekali
      atau perguruan tinggi luar negeri yang diakui Kemendikbudristek.
      persyaratan akademik tertentu seperti GPA (Grade Point Average) tinggi atau memiliki prestasi akademik lainnya. </p>
      <div class="flex items-center justify-center mt-5">
        <div class="px-4 py-3 bg-slate-800 font-semibold text-white w-fit flex items-center justify-center rounded-md text-lg"><a href="daftar.php">Daftar</a>
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