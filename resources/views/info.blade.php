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
        .info {
            border: 1px solid #FC7D08;
        }
    </style>
</head>

<body style="background-color: #2F2A2A">

    <div class="info container rounded-3 my-5 h-auto text-light">
        {{-- Head --}}
        <div class="row my-2 text-center">
            <div class="col-6">
                <h4>Items</h4>
            </div>
            <div class="col-3">
                <h4>Amount</h4>
            </div>
            <div class="col-3">
                <h4>Price</h4>
            </div>
        </div>
        {{-- Isi --}}
        @foreach ($order as $o)
            <div class="row text-center">
                <div class="col-6">
                    <h4>{{ $o->menu->namaMenu }}</h4>
                </div>
                <div class="col-3">
                    <h4>{{ $o->jumlah }}</h4>
                </div>
                <div class="col-3">
                    <h4 class="d-inline-block">Rp.</h4>
                    <h4 class="d-inline-block" id="harga">{{ $o->menu->harga }}</h4>
                    <h4 class="d-inline-block">,-</h4>
                </div>
            </div>
        @endforeach
        <div class="row justify-content-center">
            <div class="col-11">
                <hr>
            </div>
        </div>
        {{-- Total --}}
        <div class="row text-center">
            <div class="col-6">
                <h4>Total</h4>
            </div>
            <div class="col-3">

            </div>
            <div class="col-3">
                <h4 id="total">Rp.0,-</h4>
            </div>
        </div>
    </div>
    {{-- Upload File --}}
    <div class="container text-light fs-4">
        <form action="/info" method="post">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-7 mb-3">
                    <label for="formFile" class="form-label">Upload Checking Account</label>
                    <input class="form-control" name="check" type="file" id="formFile">
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-1">
                    <button type="button" class="btn" style="background-color: #FC7D08" onclick="info()"><a
                            href="/menu" style="text-decoration:none;  color:black">Prev</a></button>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn" style="background-color: #FC7D08; color:black">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        function info() {
            c = confirm('Are you sure back to menu? Your data might be lost');
        }
        const harga = document.querySelectorAll('#harga');
        const total = document.querySelector('#total');

        var tot = 0;
        for (let i = 0; i < harga.length; i++) {
            var h = parseInt(harga[i].innerHTML);
            tot += h;
        }
        total.innerHTML = "Rp." + tot + ",-";
    </script>
</body>

</html>
