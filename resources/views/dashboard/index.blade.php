@extends('layouts.LayoutDefault')
@section('content')
    <div class="dashboard">
        <div class="dashboard__item">
            <div class="container text-center">
                <div class="row g-3 align-items-center">
                    <div class="col-3">
                        <div class="inner">
                            
                    KPI money today 
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="inner">
                            order history
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="inner">
                            employer
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="inner">
                            product
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard__best">
            <div class="products__best">
                top
                 san phẩm bán chạy
                 bar
            </div>
            <div class="order__history-best">
                top category bán 
                pie
            </div>
        </div>
        <div class="dashboard__revenua">
            <div class="products__revenua">
                biểu đồ doanh thu theo thời gian (có 7d / 30d / 90d)
                line
            </div>
        </div>
    </div>
    <div style="width: 500px">
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
        if (ctx) {
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1
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
        }
    </script>
@endsection