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
            background-color: #FC7D08;
        }

        ::placeholder {
            color: black;
            font-weight: bold;
        }

        option,
        h1 {
            color: white;
            background-color: #2F2A2A;
        }

        .card {
            background-color: #FC7D08;
        }

        .btn {
            background-color: #FC7D08;
        }
    </style>
</head>

<body style="background-color: #2F2A2A">

    {{-- Header --}}

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
            <a class="nav-link text-black" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="menu">Menu</a>
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
    {{-- End Header --}}

    {{-- List Menu --}}
    <div class="container h-100">
        <div class="row">
            <div class="col-4">
                <select id="menu" class="form-select m-3 rounded-2" aria-label="Default select example"
                    style="background-color: #FC7D08">
                    <option selected>MENU</option>
                    <option value="SIGNATURE">SIGNATURE</option>
                    <option value="BLACK COFFEE">BLACK COFFEE</option>
                    <option value="FLAVOURED">FLAVOURED</option>
                    <option value="WHITE COFFEE">WHITE COFFEE</option>
                </select>
            </div>
        </div>
        <div class="row">
            <h1 id="judul"></h1>
        </div>
    </div>

    <div class="container">
        @for ($i = 0; $i < 2; $i++)
            <div class="row my-3 justify-content-around">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-3 ">
                        <div class="card" style="width: 18rem;">
                            <img src="img/americano.webp" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h3 class="card-title">Americano</h1>
                                    <h5>Rp. 20.000,-</h5>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        @endfor
    </div>
    <div class="container-fluid text-center">
        <div class="row justify-content-between text-light">
            <div class="col-2">
                <h5>Rp. 0,-</h5>
            </div>
            <div class="col-2">
                <h5>0/20</h5>
            </div>
        </div>
    </div>
    {{-- End List Menu --}}

    <div class="row justify-content-between text-center my-3">
        <div class="col-2">
            <button type="button" class="btn w-6">Prev</button>
        </div>
        <div class="col-2">
            <button type="button" class="btn w-6">Next</button>
        </div>
    </div>

    {{-- <div class="container-fluid" style="background-color: #FC7D08">
        <div class="row ">
            <div class="col-1"></div>
            <div class="col-3">
                <i class="cib-whatsapp"></i>
                <p>0858-6593-0419</p>
                <i class="cib-instagram"></i>
                <p>@rhobith</p>
            </div>
            <div class="col-3">

            </div>
            <div class="col-1"></div>
        </div>
    </div> --}}

    <script>
        const menu = document.querySelector('#menu');
        const judul = document.querySelector('#judul');

        menu.addEventListener('change', function() {
            judul.innerHTML = menu.value;
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

<br><br><br>

<footer class="text-center text-lg-start text-muted" style="background-color: #FC7D08">
    <div class="text-center p-4 text-black">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="https://www.instagram.com/kara.cr/?hl=en">KARA.cr</a>
    </div>
</footer>

</body>

</html>
