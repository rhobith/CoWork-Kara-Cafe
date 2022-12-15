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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet">
    <style>
        .form-control {
            background-color: #FC7D08;
        }

        .form-control::placeholder {
            color: black;
            opacity: 1;
        }

        .btn {
            color: black;
        }
    </style>
</head>

<body style="background-color: #2F2A2A">

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

    <div class="container my-5 rounded text-dark" style="background-color: #FC7D08">
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
    <div class="container">
        <div class="row justify-content-center text-light">
            <h1 class="col-8 text-center mt-5 mb-4">Peminjaman Coworking Space</h1>
            <form action="/" method="post" class="col-8 needs-validation">
                @csrf
                <div class="form-floating mb-5">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        id="nama" placeholder="Nama" value="{{ old('nama') }}" autofocus>
                    <label for="nama" class="form-label">Nama</label>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-5">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="email" class="form-label">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="date" class="form-control @error('jadwal') is-invalid @enderror" name="jadwal"
                        id="jadwal" value="{{ old('jadwal') }}">
                    @error('jadwal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="start" class="form-label text-light">Start</label>
                    <input type="time" class="form-control @error('start') is-invalid @enderror" name="start"
                        id="start" value="{{ old('start') }}">
                    @error('start')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="end" class="form-label text-light">End</label>
                    <input type="time" class="form-control @error('end') is-invalid @enderror" name="end"
                        id="end" value="{{ old('end') }}">
                    @error('end')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-5">
                    <input type="number" class="form-control @error('jumlahPemakai') is-invalid @enderror"
                        name="jumlahPemakai" id="jumlah" value="{{ old('jumlahPemakai') }}"
                        placeholder="Jumlah Pemakai">
                    <label for="jumlah" class="from-label" style="color: black">Jumlah Pemakai</label>
                    @error('jumlahPemakai')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                    <p class="text-light">Kapasitas maksimal 15 orang</p>
                </div>
                <div class="mb-3 d-flex flex-row-reverse">
                    <button type="submit" class="btn" style="background-color: #FC7D08">Next</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
