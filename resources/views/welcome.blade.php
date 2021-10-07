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
                <form id="graph-data" action="/graph" method="GET">
                    <div class="d-flex">
                        <div class="form-group w-50 px-3">
                            <label for="x-axis-property">X Axis</label>
                            <select id="x-axis-property" class="form-control" name="x_axis_property" onchange="updateGraph()">
                                @foreach ($props as $prop)
                                    <option>{{ $prop }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group w-50 px-3">
                            <label for="y-axis-property">Y Axis</label>
                            <select id="y-axis-property" class="form-control" name="y_axis_property" onchange="updateGraph()">
                                @foreach ($props as $i => $prop)
                                    <option @if($i == 1) selected @endif>{{ $prop }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
                <div class="d-flex">
                    <div id="y-axis-high-label" class="mx-auto my-2 badge bg-danger">
                        High general priority
                    </div>
                </div>
                <div class="d-flex" style="width: 900px; height: 700px">
                    <div class="d-flex" style="width: 100px; height: 700px">
                        <div id="x-axis-low-label" class="my-auto badge bg-success">
                            Low aggression
                        </div>
                    </div>
                    <div class="d-flex border-2 rounded"
                         style="
                            width: 700px;
                            height: 700px;
                            background: linear-gradient(235deg, #a0101460, #08b0a060)
                        ">
                        <div id="graph-container" class="d-flex m-auto position-relative" style="width: 640px; height: 620px; top: -30px">

                        </div>
                    </div>
                    <div class="d-flex" style="width: 100px; height: 700px">
                        <div id="x-axis-high-label" class="my-auto badge bg-danger">
                            High aggression
                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <div id="y-axis-low-label" class="mx-auto my-2 badge bg-success">
                        Low general priority
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        $('document').ready(function(){
            updateGraph()
        });

        function updateGraph()
        {
            let url = '/graph';
            let data = $('#graph-data').serialize()

            console.log('Updating graph')

            $.ajax({
                url: url,
                data: data,
                success: function (res) {
                    $('#graph-container').html(res)

                    let xAxisLabel = $('#x-axis-property').val()
                    let yAxisLabel = $('#y-axis-property').val()

                    $('#x-axis-low-label').html('Low ' + xAxisLabel)
                    $('#x-axis-high-label').html('High ' + xAxisLabel)

                    $('#y-axis-low-label').html('Low ' + yAxisLabel)
                    $('#y-axis-high-label').html('High ' + yAxisLabel)

                    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl)
                    })
                }
            })
        }
    </script>
</html>
