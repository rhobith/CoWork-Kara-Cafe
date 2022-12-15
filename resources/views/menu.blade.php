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

        .card:hover {
            box-shadow: inset -1px 0px 17px 5px rgb(0 0 0 / 50%);
        }

        .card:active {
            box-shadow: inset -1px 0px 17px 5px rgb(0 0 0 / 50%);
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
    {{-- <div class="container h-100">
        <div class="row">
            <div class="col-4">
                <select id="menu" class="form-select m-3 rounded-2" aria-label="Default select example"
                style="background-color: #FC7D08">
                <option selected>MENU</option>
                <option value="BLACK COFFEE">BLACK COFFEE</option>
                <option value="FLAVOURED">FLAVOURED</option>
            </select>
        </div>
    </div>
    <div class="row">
        <h1 id="judul"></h1>
    </div>
</div> --}}
    @error('idMenu')
        <div class="alert alert-danger alert-dismissible fade show">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror
    <div class="container">
        <div class="row my-3 justify-content-around">
            @foreach ($menus as $m)
                <div class="col-4 my-2">
                    <a style="text-decoration: none; color: #2C384AF2">
                        <div class="card" style="width: 18rem;">
                            <img src={{ $m->foto }} class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{ $m->namaMenu }}</h1>
                                    <h5 id="harga">{{ $m->harga }}</h5>
                                    <p id="id" hidden>{{ $m->id }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- End List Menu --}}

    <form action="/menu" method="post">
        @csrf
        <input type="text" aria-hidden="true" name="pelanggan_id" value="{{ $orders[0]->id }}" hidden required>
        @for ($i = 0; $i < $orders[0]->jumlahPemakai; $i++)
            <input type="text" name="menu_id[{{ $i }}]" id="menu" aria-hidden="true" hidden required>
        @endfor
        <div class="container-fluid text-center" style="margin-top: 850px">
            <div class="row justify-content-between text-light">
                <div class="col-2">
                    <h5 id="total">Rp. 0,-</h5>
                </div>
                <div class="col-2">
                    <h5 id="jumlah" class="d-inline-block">0</h5>
                    <h5 class="d-inline-block">/ {{ $orders[0]->jumlahPemakai }}</h5>
                </div>
            </div>
        </div>
        <div class="row justify-content-between text-center my-3">
            <div class="col-2">
                <button type="button" class="btn w-6"><a href="/"
                        style="text-decoration:none; color:black">Prev</a></button>
            </div>
            <div class="col-2">
                <button type="submit" class="btn w-6" style="color:black">Next</button>
            </div>
        </div>
    </form>
    <script>
        // const opt = document.querySelectorAll('option');
        // const menu = document.querySelector('#menu');

        // for (let i = 0; i < opt.length; i++) {
        //     menu.addEventListener('click', function() {
        //         judul.innerHTML = menu.value;
        //     })
        // }
        const card = document.querySelectorAll('.card');
        const harga = document.querySelectorAll('#harga');
        const total = document.querySelector('#total');
        const jumlah = document.querySelector('#jumlah');
        const input = document.querySelectorAll('#menu');
        const id = document.querySelectorAll('#id');

        for (let j = 0; j < card.length; j++) {
            var i = 0;
            var t = 0;
            card[j].addEventListener('click', function() {
                if (i > input.length - 1) {
                    alert("Jumlah maksimal pemesanan hanya 15");
                }
                input[i].value = id[j].innerHTML;
                i++;
                h = parseInt(harga[j].innerHTML);
                t += h;
                jumlah.innerHTML = i;
                total.innerHTML = "Rp. " + t + ",-";
            })
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
