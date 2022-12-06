<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>CSKC | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

    <head>
        <div class="container-fluid text-center bg-image h-fit"
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

    <div class="container my-5 rounded" style="background-color: #FC7D08">
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

    <div class="container">
        <div class="row justify-content-center text-light">
            <h1 class="col-8 text-center mt-5 mb-4">Peminjaman Coworking Space</h1>
            <form action="" method="post" class="col-8">
                <div class="mb-3">
                    <input type="text" class="form-control" id="nama" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" id="jadwal" placeholder="Jadwal">
                </div>
                <div class="mb-3">
                    <label for="start" class="form-label">Start</label>
                    <input type="time" class="form-control" id="start" placeholder="Start">
                </div>
                <div class="mb-3">
                    <label for="end" class="form-label">End</label>
                    <input type="time" class="form-control" id="end" placeholder="End">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Pemakai">
                </div>
                <div class="mb-3 d-flex flex-row-reverse">
                    <button type="submit" class="btn " style="background-color: #FC7D08">Next</button>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
