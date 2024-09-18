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
                @foreach ($booking as $index => $details)
                <tr>
                    <td>{{ $details['id'] }}</td>
                    <td>{{ $details['name'] }}</td>
                    <td>{{ $details['dest'] }}</td>
                    <td>{{ $details['date'] }}</td>
                    <td>
                        @if($details['status'] === 'Pending')
                            <span class="badge bg-warning">{{ $details['status'] }}</span>
                        @elseif($details['status'] === 'Cancelled')
                            <span class="badge bg-danger">{{ $details['status'] }}</span>
                        @elseif($details['status'] === 'Confirmed')
                            <span class="badge bg-success">{{ $details['status'] }}</span>
                        @endif
                    </td>
                    <td>
                    @if($details['status'] === 'Pending')
                    <button class="btn btn-sm btn-outline-success">{{ $details['action'] }}</button>
                    @endif
                         <a href="/admin/page1/{{$index}}" class="btn btn-sm btn-outline-primary">View Details </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
