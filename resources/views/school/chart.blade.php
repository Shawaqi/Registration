@extends('layouts.school')

@section('container')

    <div id="layoutSidenav_content"  style="margin-top: 3em">
        <main>
            <div class="container-fluid px-4">
                <h1 style="text-align: center"> Carta  </h1>
                <br>
                <h4>Sila pilih tarikh berkenaan :</h4>
                <input type="text" class="form-control" name="daterange" value="01/01/2018 - 01/15/2018" />
                <script>
                    $(function() {
                      $('input[name="daterange"]').daterangepicker({
                        opens: 'left'
                      }, function(start, end, label) {
                        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                      });
                    });
                    </script>
                <br>
                <br>
                <canvas id="myChart" width="50" height="50"></canvas>
                <script>
                    const ctx = document.getElementById('myChart');
                    const myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['Red', 'Blue'],
                            datasets: [{
                                label: '# of Votes',
                                data: [30, 70],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
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
        </main>
    </div>

    @push('script1')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    @endpush



@endsection
