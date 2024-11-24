@extends('layouts.admin')

@section('admin-content')
<div class="container mt-4">
    <h1 class="mb-4">Edit Booking Details</h1>
    <form action="{{ route('booking.update', $details['id']) }}" method="POST">
        @csrf
        @method('put')
        
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$error}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @elseif (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('status')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-4">
            <div class="card-header">
                <h5>Customer Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label"><strong>Name</strong></label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $details->customer->name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="id" class="form-label"><strong>Booking ID</strong></label>
                    <input type="text" name="id" class="form-control" id="id" value="{{ $details['id'] }}" readonly>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <h5>Trip Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="dest" class="form-label"><strong>Destination</strong></label>
                    <input type="text" name="dest" class="form-control" id="dest" value="{{ $details['destination'] }}" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label"><strong>Booking Date</strong></label>
                    <input type="date" name="date" class="form-control" id="date" value="{{ $details['date'] }}" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label"><strong>Status</strong></label>
                    <select name="status" class="form-select" id="status" required>
                        <option value="Pending" {{ $details['status'] == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Confirmed" {{ $details['status'] == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                        <option value="Cancelled" {{ $details['status'] == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- <div class="card mb-4">
            <div class="card-header">
                <h5>Payment Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="amount" class="form-label"><strong>Total Amount</strong></label>
                    <input type="text" name="amount" class="form-control" id="amount" value="{{ $details['amount'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="payment_status" class="form-label"><strong>Payment Status</strong></label>
                    <select name="payment_status" class="form-select" id="payment_status">
                        <option value="Pending" {{ ($details['payment_status'] ?? '') == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Paid" {{ ($details['payment_status'] ?? '') == 'Paid' ? 'selected' : '' }}>Paid</option>
                        <option value="Cancelled" {{ ($details['payment_status'] ?? '') == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
            </div>
        </div> -->

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="{{ route('admin.page1') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection
