<?php
require_once 'koneksi.php'; // mengimpor konfigurasi koneksi database

$query = "SELECT * FROM pendaftar"; // menyimpan query untuk mengambil seluruh data pendaftar
$result = mysqli_query($sat, $query); // mengeksekusi query dan menyimpan hasilnya pada variabel $result
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
    <title>Program Beasiswa</title>
  <!-- link css -->

  <link rel="stylesheet" href="CSS/home.css" />
  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>

<body class="bg-gradient-to-br from-red-100 to-red-300 flex flex-col min-h-screen">
     <!-- Bagian navigasi -->
    <nav class="grid grid-cols-3 justify-center text-center py-2 px-8 gap-10 bg-red-500">
        <a href="index.php" class="hover:bg-red-600 bg-red-500 text-white font-semibold py-2 rounded-2xl">Pilihan Beasiswa</a>
        <a href="daftar.php" class="hover:bg-red-600 bg-red-500 text-white font-semibold py-2 rounded-2xl">Daftar</a>
        <a href="hasil.php" class="hover:bg-red-600 bg-red-700 text-white font-semibold py-2 rounded-2xl">Hasil</a>
    </nav>
  
  <section class="home">
  <h1 class="site-heading text-center text-white d-none d-lg-block $zindex-dropdown:">
    <span class="site-heading-upper text-white mb-3 ">Website Pendaftaran</span>
    <span class="site-heading-lower">BEASISWA</span>
  </h1>

  <!-- Navbar Strat -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-dark font-weight-bold d-lg-none" href="#">SERKOM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  px-lg-4">
            <a class="nav-link text-uppercase text-dark" href="index.php">Pilihan Beasiswa</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-dark" href="daftar.php">Daftar
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="hasil.php">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </section>
  <!-- Navbar END -->
  <div class="container">
        <h1 class="text-center mt-5 mb-5 text-black">Tabel Hasil Pendaftaran</h1>
        <table class="table border-white-700 bg-red-500 text-black">
            <thead class="bg-red-500">
                <tr >
                    <th class="text-center">NIM</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">No. HP</th>
                    <th class="text-center">Semester</th>
                    <th class="text-center">IPK</th>
                    <th class="text-center">Jenis Beasiswa</th>
                    <th class="text-center">Berkas</th>
                    <th class="text-center">Status Ajuan</th>
                </tr>
            </thead>


            <tbody class="bg-white">

                <!-- mengambil data secara berulang dari variabel $result hingga data yang tersedia habis. -->
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <!-- akan ditampilkan data dalam bentuk tabel dengan menggunakan tag <tr> untuk setiap baris data, dan tag <td> untuk setiap kolom data yang diambil dari variabel $row sesuai dengan nama kolom di tabel database. 
                    Nilai dari setiap kolom data tersebut ditampilkan menggunakan fungsi echo untuk mencetak nilainya ke dalam HTML.
                     -->
                    <tr>
                        <td class="text-center">
                            <?php echo $row['nim']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $row['nama']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $row['email']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $row['hp']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $row['semester']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $row['ipk']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $row['jenis_beasiswa']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $row['berkas']; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $row['status_ajuan']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <div class="container" style="position: relative; height: 40vh; width: 80vw;">
        <h1 class="text-center mt-5 mb-5 text-black">Diagram Lingkaran Hasil Pendaftaran</h1>
        <canvas id="myChart" width="500" height="500"></canvas>
        <!-- library -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="JS/bootstrap.bundle.min.js"></script>
  <script src="JS/script.js"></script>
        <script>
            // Membuat koneksi ke database dan mengambil data jenis_beasiswa dan jumlah pendaftar menggunakan query. Hasil query disimpan dalam array $data.
            <?php
            $sat = mysqli_connect('localhost', 'root', '', 'beasiswa_khusnul');
            $query = mysqli_query($sat, "SELECT jenis_beasiswa, COUNT(*) AS jumlah FROM pendaftar GROUP BY jenis_beasiswa");
            $data = array();
            while ($row = mysqli_fetch_assoc($query)) {
                // Mengubah kode jenis_beasiswa menjadi nama jenis_beasiswa, kemudian menyimpan data ke dalam array $data.
                $jenis_beasiswa = '';
                if ($row['jenis_beasiswa'] == 'Djarum') {
                    $jenis_beasiswa = 'Beasiswa Djarum';
                } else if ($row['jenis_beasiswa'] == 'Prestasi') {
                    $jenis_beasiswa = 'Beasiswa Prestasi';
                } 
                $data[] = array(
                    'jenis_beasiswa' => $jenis_beasiswa,
                    'jumlah' => $row['jumlah'],
                );
            }
            ?>
            // Menyiapkan data untuk grafik lingkaran dengan menggunakan objek data. Label jenis_beasiswa dan data jumlah pendaftar dimasukkan ke dalam objek data menggunakan json_encode. Warna untuk setiap bagian grafik lingkaran juga ditentukan di sini.
            var data = {
                labels: <?php echo json_encode(array_column($data, 'jenis_beasiswa')); ?>,
                datasets: [{
                    data: <?php echo json_encode(array_column($data, 'jumlah')); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)', // Merah Muda
                        'rgba(54, 162, 235, 0.7)', // Biru

                    ],
                },],
            };

            // Membuat grafik lingkaran
            // memilih element HTML tempat grafik akan ditampilkan
            var ctx = document.getElementById('myChart').getContext('2d');
            // membuat objek Chart dan menambahkan data dan option
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    // menambahkan judul pada grafik
                    title: {
                        display: true,
                        text: 'Persentase Peminatan Beasiswa',
                        fontColor: 'white',
                        fontSize: 20
                    },
                    // menonaktifkan responsif pada grafik
                    responsive: false,
                    // menonaktifkan pengaturan rasio aspek pada grafik
                    maintainAspectRatio: false,
                    // mengatur padding pada grafik
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },
                    legend: {
                        labels: {
                            fontColor: 'white',
                            fontSize: 14,
                        },
                        // mengatur posisi legenda ke tengah
                        position: 'center',
                    },
                    // menambahkan teks berwarna putih pada label sumbu x dan y
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: 'white',
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Jumlah Pendaftar',
                                fontColor: 'white',
                                fontSize: 14,
                            },
                        },],
                        xAxes: [{
                            ticks: {
                                fontColor: 'white',
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Jenis Beasiswa',
                                fontColor: 'white',
                                fontSize: 14,
                            },
                        },],
                    },
                },
            });
        </script>
    
</body>

</html>

<?php
mysqli_close($sat);
?>