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

    <div class="container-md mt-5 col-8 d-grid gap-4">
        @foreach ($pelanggan as $p)
            <button class="btn btn-primary btn btn-outline-warning d-flex" data-bs-toggle="modal"
                data-bs-target="#dataPelanggan" style="background-color: #2F2A2A" type="button">
                <div class="me-auto"> {{ $p->nama }} </div>
                <div class="me-0"> show </div>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="dataPelanggan" tabindex="-1" aria-labelledby="dataPelanggan"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content border border-warning" style="background-color: #2F2A2A">
                        <div class="ms-3 mt-1">
                            <h1 class="modal-title fs-5 text-white p-1" id="namaModal">Nama : {{ $p->nama }}</h1>
                            <h1 class="modal-title fs-5 text-white p-1" id="emailModal">Email : {{ $p->email }}</h1>
                            <h1 class="modal-title fs-5 text-white p-1" id="jadwalModal">Jadwal : {{ $p->jadwal }}
                            </h1>
                            <h1 class="modal-title fs-5 text-white p-1" id="waktuModal">Waktu : {{ $p->start }} -
                                {{ $p->end }}</h1>
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
                            @foreach ($p->order as $order)
                                <div class="row text-center">
                                    <div class="col-4">
                                        <h4>{{ $order->menu->namaMenu }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <h4>{{ $order->jumlah }}</h4>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="d-inline-block">Rp.</h4>
                                        <h4 id="harga" class="d-inline-block">{{ $order->menu->harga }}</h4>
                                        <h4 class="d-inline-block">,-</h4>
                                    </div>
                                </div>
                            @endforeach
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
                                    <h4 id="total">Rp.0,-</h4>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse p-3 gap-3 mb-1">
                            <button type="button" class="btn text-white" style="background-color: #FC7D08"
                                data-bs-dismiss="modal">Decline</button>
                            <button type="button" class="btn text-white"
                                style="background-color: #FC7D08">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <br><br><br><br><br>

    <footer class="fixed-bottom text-center text-lg-start text-muted" style="background-color: #FC7D08">
        <div class="text-center p-4 text-black">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://www.instagram.com/kara.cr/?hl=en">KARA.cr</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
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
