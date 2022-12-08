<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>CSKC | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet"
        integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet">
    <style>
        .form-control {
            background-color: #FC7D08;
        }

        ::placeholder {
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body style="background-color: #2F2A2A">

    <header>

        <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white-50 fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link text-white" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="menu">Menu</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
        <div class="container-fluid text-center bg-image"
            style="
      background-image: url('img/Latte_and_dark_coffee.jpg');
      background-size: cover;
      background-position: center;
    ">
            <div class="container d-flex justify-content-center align-items-center">
                <img src="img/KARA.cr.png" class="img-fluid" alt="">
            </div>
        </div>
    </header>

    <div class="container-md my-5 rounded" style="background-color: #FC7D08">
        <p class="text-center fs-4 p-4 fst-italic">Cafe seringkali menjadi tempat untuk mengerjakan tugas atau
            pekerjaan.
            Rata-rata
            cafe menyediakan co-working
            space sebagai yang lebih nyaman dan jauh dari kebisingan. Kara Cafe bertempat di Jalan Cengger Ayam,
            Tulusrejo, Kecamatan Lowokwaru. Kara
            Cafe menyediakan co-working
            space untuk para pekerja, pelajar, atau yang membutuhkan ruang untuk berdiskusi dan menyelesaikan suatu
            pekerjaan. Untuk pemesanan co-working space terdapat minimal order, yaitu dua puluh ribu untuk setiap orang.
            Fasilitas yang disediakan pada co-working space adalah meja, kursi, ac, dan WI-FI.</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-11">
            <hr>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row justify-content-center text-light mt-5 mb-4">
            <h1 class="col-8 text-center">Peminjaman Coworking Space</h1>
            <form action="/menu" method="post" class="col-8">
                <div class="mb-3">
                    <input type="text" class="form-control text-black" id="nama" style="background-color: #FC7D08" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control text-black" id="email" style="background-color: #FC7D08" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control text-black" id="jadwal" style="background-color: #FC7D08" placeholder="Jadwal">
                </div>
                <div class="mb-3">
                    <label for="start" class="form-label">Start</label>
                    <input type="time" class="form-control text-black" id="start" style="background-color: #FC7D08" placeholder="Start">
                </div>
                <div class="mb-3">
                    <label for="end" class="form-label">End</label>
                    <input type="time" class="form-control text-black" id="end" style="background-color: #FC7D08" placeholder="End">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control text-black" id="jumlah" style="background-color: #FC7D08" placeholder="Jumlah Pemakai">
                </div>
                <div class="mb-3 d-flex flex-row-reverse">
                    <button type="submit" class="btn " style="background-color: #FC7D08">Next</button>
                </div>
            </form>

        </div>
    </div>

    {{-- <div class="container-fluid" style="background-color: #FC7D08">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <i class="cib-whatsapp"></i>
                <p>0858-6593-0419</p>
                <i class="cib-instagram"></i>
                <p>@rhobith</p>
            </div>
        </div>
    </div> --}}
    <br><br><br><br><br><br><br><br><br><br><br>

    <footer class="text-center text-lg-start text-muted" style="background-color: #FC7D08">
        <div class="text-center p-4 text-black">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://www.instagram.com/kara.cr/?hl=en">KARA.cr</a>
        </div>
    </footer>

</body>

</html>
