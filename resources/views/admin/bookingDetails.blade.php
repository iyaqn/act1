@extends('layouts.admin')

@section('admin-content')
<div class="container mt-4">
    <h1 class="mb-4">Booking Details</h1>

    <!-- Customer Information -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Customer Information</h5>
        </div>
        <div class="card-body">
            <p><strong>Name: </strong>{{ $details['name'] }}</p>
            <p><strong>Booking ID: </strong>{{ $details['id'] }}</p>
            <p><strong>Email: </strong>{{ $details['email'] ?? 'N/A' }}</p>
            <p><strong>Phone: </strong>{{ $details['phone'] ?? 'N/A' }}</p>
        </div>
    </div>

    <!-- Trip Information -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Trip Information</h5>
        </div>
        <div class="card-body">
            <p><strong>Destination: </strong>{{ $details['dest'] }}</p>
            <p><strong>Booking Date: </strong>{{ $details['date'] }}</p>
            <p><strong>Booking Time: </strong>{{ $details['time'] }}</p>
            <p><strong>Status: </strong>
                @if($details['status'] === 'Pending')
                    <span class="badge bg-warning">{{ $details['status'] }}</span>
                @elseif($details['status'] === 'Cancelled')
                    <span class="badge bg-danger">{{ $details['status'] }}</span>
                @elseif($details['status'] === 'Confirmed')
                    <span class="badge bg-success">{{ $details['status'] }}</span>
                @endif
            </p>
        </div>
    </div>

    <!-- Payment Information -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Payment Information</h5>
        </div>
        <div class="card-body">
            <p><strong>Total Amount: </strong>{{ $details['amount'] ?? 'N/A' }}</p>
            <p><strong>Payment Status: </strong>{{ $details['status'] ?? 'Pending' }}</p>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="mt-4">
        @if($details['status'] === 'Pending')
            <button class="btn btn-success">Confirm Booking</button>
        @endif
        <a href="{{ route('admin.page1') }}" class="btn btn-secondary">Back to Bookings</a>
    </div>
</div>
@endsection
