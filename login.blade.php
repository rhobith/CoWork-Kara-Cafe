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

    <div class="my-5 pb-5 col-6 container-md rounded text-light border border-warning position-relative">
        <div class="mb-5 p-5 text-light d-flex justify-content-center fst-italic">
            <h1> Login </h1>
        </div>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" class="form-control border border-warning text-white" style="background-color: #2F2A2A" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control border border-warning text-white" style="background-color: #2F2A2A" id="exampleInputPassword1">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn mt-2" style="background-color: #FC7D08">Login</button>
                </div>
                <div class="mb-3 mt-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
                </div>
          </form>
    </div>

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
