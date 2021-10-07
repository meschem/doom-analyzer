<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DOOM Analyzer</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        use App\Models\Demon;

        $props = Demon::comparables();
    @endphp

    <body class="antialiased">
        <div class="d-flex mx-auto" style="width: 1200px;">
            <div class="m-auto">
                <div class="mx-auto my-3">
                    <a href="/"><button class="mx-2 btn btn-success">Unit Comparison</button></a>
                    <a href="/vagrant"><button class="mx-2 btn btn-success">Vagrant</button></a>
                    <hr>
                </div>
                <div class="mx-auto my-3">
                    <img src="/images/vagrant/vagrant_1.png">
                </div>
                <div class="mx-auto my-3">
                    <img src="/images/vagrant/vagrant_2.png">
                </div>
                <div class="mx-auto my-3">
                    <img src="/images/vagrant/vagrant_3.png">
                </div>
            </div>
        </div>
    </body>
</html>
