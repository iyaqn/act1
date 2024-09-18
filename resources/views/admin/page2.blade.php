@extends('layouts.admin')

@section('admin-content')
<div class="container mt-4">
    <h1 class="mb-4">Reports & Analytics</h1>
    <div class="card mb-4">
        <div class="card-header">
            <h5>Revenue Over Time</h5>
        </div>
        <div class="card-body">
            <canvas id="revenueChart"></canvas>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <h5>Top Destinations</h5>
        </div>
        <div class="card-body">
            <canvas id="topDestinationsChart"></canvas>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <h5>Booking Status Distribution</h5>
        </div>
        <div class="card-body">
            <canvas id="bookingStatusChart"></canvas>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('revenueChart').getContext('2d');
    var revenueChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Revenue',
                data: [12000, 15000, 10000, 20000, 25000, 22000],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
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
    var ctx2 = document.getElementById('topDestinationsChart').getContext('2d');
    var topDestinationsChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Paris', 'Tokyo', 'New York', 'London', 'Rome'],
            datasets: [{
                label: '# of Bookings',
                data: [256, 210, 190, 175, 130],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
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
    var ctx3 = document.getElementById('bookingStatusChart').getContext('2d');
    var bookingStatusChart = new Chart(ctx3, {
        type: 'pie',
        data: {
            labels: ['Confirmed', 'Pending', 'Cancelled'],
            datasets: [{
                label: 'Booking Status',
                data: [60, 25, 15],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
@endsection
