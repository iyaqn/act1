@extends('layouts.admin')

@section('admin-content')
<div class="container mt-4">
    <h1 class="mb-4">Admin Dashboard</h1>

    <!-- Summary Cards -->
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Bookings</h5>
                    <p class="card-text fs-2">1,245</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Revenue</h5>
                    <p class="card-text fs-2">$58,760</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">New Users</h5>
                    <p class="card-text fs-2">135</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pending Issues</h5>
                    <p class="card-text fs-2">5</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Bookings Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Recent Bookings</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Customer Name</th>
                                <th>Destination</th>
                                <th>Booking Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BK1254</td>
                                <td>John Doe</td>
                                <td>Paris, France</td>
                                <td>2024-08-20</td>
                                <td><span class="badge bg-success">Confirmed</span></td>
                            </tr>
                            <tr>
                                <td>BK1253</td>
                                <td>Jane Smith</td>
                                <td>New York, USA</td>
                                <td>2024-08-18</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>BK1252</td>
                                <td>Mike Brown</td>
                                <td>Tokyo, Japan</td>
                                <td>2024-08-17</td>
                                <td><span class="badge bg-danger">Cancelled</span></td>
                            </tr>
                            <tr>
                                <td>BK1251</td>
                                <td>Emily Davis</td>
                                <td>London, UK</td>
                                <td>2024-08-15</td>
                                <td><span class="badge bg-success">Confirmed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Information -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Top Destinations</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Paris, France
                            <span class="badge bg-primary rounded-pill">256 bookings</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tokyo, Japan
                            <span class="badge bg-primary rounded-pill">210 bookings</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            New York, USA
                            <span class="badge bg-primary rounded-pill">190 bookings</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            London, UK
                            <span class="badge bg-primary rounded-pill">175 bookings</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Customer Feedback</h5>
                </div>
                <div class="card-body">
                    <p>"Had an amazing time in Paris! Thanks for organizing everything perfectly!" - John Doe</p>
                    <hr>
                    <p>"The Tokyo trip was fantastic, but the flight was delayed." - Mike Brown</p>
                    <hr>
                    <p>"Loved my experience in New York! Will definitely book again." - Jane Smith</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
