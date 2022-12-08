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

    <style>
        .form-control {
            background-color: #2F2A2A;
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

    <div class="container-md mt-5 col-8 d-grid gap-4">
        <button class="btn btn-primary btn btn-outline-warning d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #2F2A2A" type="button">
            <div class="me-auto"> Muhammad Rhobith </div>
            <div class="me-0"> show </div>
        </button>
        <button class="btn btn-primary btn btn-outline-warning d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #2F2A2A" type="button">
            <div class="me-auto"> Dian Ayu </div>
            <div class="me-0"> show </div>
        </button>
        <button class="btn btn-primary btn btn-outline-warning d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #2F2A2A" type="button">
            <div class="me-auto"> David Johan </div>
            <div class="me-0"> show </div>
        </button>
        <button class="btn btn-primary btn btn-outline-warning d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #2F2A2A" type="button">
            <div class="me-auto"> Jordy Cahya Buana </div>
            <div class="me-0"> show </div>
        </button>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content border border-warning" style="background-color: #2F2A2A">
        <div class="ms-3 mt-1">
          <h1 class="modal-title fs-5 text-white p-1" id="namaModal">Nama : Muhammad Rhobith</h1>
          <h1 class="modal-title fs-5 text-white p-1" id="emailModal">Email : support@gmail.com</h1>
          <h1 class="modal-title fs-5 text-white p-1" id="jadwalModal">Jadwal : 2022-11-31</h1>
          <h1 class="modal-title fs-5 text-white p-1" id="waktuModal">Waktu : 06.30PM - 09.30PM</h1>
        </div>
        <div class="container rounded text-white my-3 col-11 modal-body border border-warning">
            {{-- Head --}}
        <div class="row text-center">
            <div class="col-4">
                <h4>Items</h4>
            </div>
            <div class="col-4">
                <h4>Amount</h4>
            </div>
            <div class="col-4">
                <h4>Price</h4>
            </div>
        </div>
        {{-- Isi --}}
        @for ($i = 0; $i < 3; $i++)
            <div class="row text-center">
                <div class="col-4">
                    <h4>Americano</h4>
                </div>
                <div class="col-4">
                    <h4>5</h4>
                </div>
                <div class="col-4">
                    <h4>Rp.80.000,-</h4>
                </div>
            </div>
        @endfor
        <div class="row justify-content-center">
            <div class="col-11">
                <br>
            </div>
        </div>
        {{-- Total --}}
        <div class="row text-center">
            <div class="col-4">
                <h4>Total</h4>
            </div>
            <div class="col-4">

            </div>
            <div class="col-4">
                <h4>Rp.240.000,-</h4>
            </div>
        </div>
        </div>
        <div class="d-flex flex-row-reverse p-3 gap-3 mb-1">
          <button type="button" class="btn text-white" style="background-color: #FC7D08" data-bs-dismiss="modal">Decline</button>
          <button type="button" class="btn text-white" style="background-color: #FC7D08">Accept</button>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

<br><br><br><br><br>

<footer class="text-center text-lg-start text-muted" style="background-color: #FC7D08">
    <div class="text-center p-4 text-black">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="https://www.instagram.com/kara.cr/?hl=en">KARA.cr</a>
    </div>
</footer>

</body>

</html>
