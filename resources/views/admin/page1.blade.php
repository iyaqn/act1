@extends('layouts.admin')

@section('admin-content')
<div class="container mt-4">
    <h1 class="mb-4">Booking Management</h1>

    <!-- Filter Options -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Filter Bookings</h5>
        </div>
        <div class="card-body">
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="destination" class="form-label">Destination</label>
                    <input type="text" class="form-control" id="destination" placeholder="Enter destination">
                </div>
                <div class="col-md-4">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status">
                        <option selected>Choose...</option>
                        <option value="1">Confirmed</option>
                        <option value="2">Pending</option>
                        <option value="3">Cancelled</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="date" class="form-label">Booking Date</label>
                    <input type="date" class="form-control" id="date">
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Booking List -->
    <div class="card">
        <div class="card-header">
            <h5>All Bookings</h5>
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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BK1254</td>
                        <td>John Doe</td>
                        <td>Paris, France</td>
                        <td>2024-08-20</td>
                        <td><span class="badge bg-success">Confirmed</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-danger">Cancel</button>
                            <button class="btn btn-sm btn-outline-primary">View Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td>BK1253</td>
                        <td>Jane Smith</td>
                        <td>New York, USA</td>
                        <td>2024-08-18</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-success">Confirm</button>
                            <button class="btn btn-sm btn-outline-primary">View Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td>BK1252</td>
                        <td>Mike Brown</td>
                        <td>Tokyo, Japan</td>
                        <td>2024-08-17</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">View Details</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
