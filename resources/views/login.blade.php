<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>CSKC | {{ $title }}</title>
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

    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="my-5 pb-5 col-6 container-md rounded text-light border border-warning position-relative">
        <div class="mb-2 p-5 text-light d-flex justify-content-center fst-italic">
            <h1> Login </h1>
        </div>
        <form action="/login" method="POST">
            @csrf
            <div class="form-floating">
                <input type="text"
                    class="mb-1 form-control border border-warning text-white @error('username') is-invalid  @enderror"
                    name="username" style="background-color: #2F2A2A" id="username" placeholder="Username" autofocus>
                <label for="username" class="form-label">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password"
                    class="form-control border border-warning text-white @error('password') is-invalid  @enderror"
                    style="background-color: #2F2A2A" id="password" name="password" placeholder="Password">
                <label for="password" class="form-label">Password</label>
            </div>
            <div class="mt-2 mb-5 d-grid gap-2">
                <button type="submit" class="btn mt-2" style="background-color: #FC7D08; color:black">Login</button>
            </div>
        </form>
    </div>

    <footer class="fixed-bottom text-center text-lg-start text-muted" style="background-color: #FC7D08">
        <div class="text-center p-4 text-black">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://www.instagram.com/kara.cr/?hl=en">KARA.cr</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
