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

    <head>
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
    </head>
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
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Company name
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
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
</body>

</html>
