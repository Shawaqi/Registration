@extends('layouts.school')

@section('container')

    <div id="layoutSidenav_content"  style="margin-top: 3em">
        <main>
            <div class="container-fluid px-4">
                <h1 style="text-align: center"> Carta  </h1>
                <br>
                <form action="{{ route('search') }}" method="POST">
                    @csrf
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="container-fluid">
                                <div class="form-group row">
                                    <label class="col-form-label col-sm-1">From :</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control input-sm" id="" name="" required>
                                    </div>
                                    <label class="col-form-label col-sm-1">To :</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control input-sm" id="" name="" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary" name="search" title="search"><i class="fa-magnifying-glass-plus"></i></button>
                                    </div>
                                    <br>
                                    <br>
                                    <canvas id="myChart" width="50" height="50"></canvas>
                                        <script>
                                            const ctx = document.getElementById('myChart');
                                            const myChart = new Chart(ctx, {
                                                type: 'pie',
                                                data: {
                                                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                                    datasets: [{
                                                        label: '# of Votes',
                                                        data: [12, 19, 3, 5, 2, 3],
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.2)',
                                                            'rgba(54, 162, 235, 0.2)',
                                                            'rgba(255, 206, 86, 0.2)',
                                                            'rgba(75, 192, 192, 0.2)',
                                                            'rgba(153, 102, 255, 0.2)',
                                                            'rgba(255, 159, 64, 0.2)'
                                                        ],
                                                        borderColor: [
                                                            'rgba(255, 99, 132, 1)',
                                                            'rgba(54, 162, 235, 1)',
                                                            'rgba(255, 206, 86, 1)',
                                                            'rgba(75, 192, 192, 1)',
                                                            'rgba(153, 102, 255, 1)',
                                                            'rgba(255, 159, 64, 1)'
                                                        ],
                                                        borderWidth: 3
                                                    }]
                                                },
                                                options: {
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }
                                                }
                                            });
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <br>

                {{-- <div class="container">
                    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                </div> --}}
            </div>
        </main>
    </div>

    @push('script1')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    // google charts
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    @endpush



@endsection
