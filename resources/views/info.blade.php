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
        .container {
            border: 1px solid #FC7D08;
        }
    </style>
</head>

<body style="background-color: #2F2A2A">

    <div class="container rounded-3 my-5 text-light">
        {{-- Head --}}
        <div class="row text-center">
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
        @for ($i = 0; $i < 3; $i++)
            <div class="row text-center">
                <div class="col-6">
                    <h4>Americano</h4>
                </div>
                <div class="col-3">
                    <h4>5</h4>
                </div>
                <div class="col-3">
                    <h4>Rp.80.000,-</h4>
                </div>
            </div>
        @endfor
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
                <h4>Rp.240.000,-</h4>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
