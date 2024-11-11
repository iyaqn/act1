@extends('layouts.admin')

@section('admin-content')
<div class="container mt-4">
    <h1 class="mb-4">Booking Management</h1>
    <div class="card mb-4">
        <div class="card-header">
            <h5>Add New Customer</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('customer.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row g-3">

                    @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    @error('id')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror

                    @if (session('customer-success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('customer-success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="col-md-4">
                        <label for="name" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter customer name" required>
                    </div>
                    <div class="col-md-4">
                        <label for="id-img" class="form-label">Customer ID Picture</label>
                        <input type="file" class="form-control" id="id-img" name="id" required>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-success">Add Customer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <h5>Add New Booking</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('booking.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row g-3">

                    @error('dest')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    @error('date')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    @error('status')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror

                    @if (session('booking-success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('booking-success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="col-md-4">
                        <label for="customer" class="form-label">Customer</label>
                        <select name="customer_id" id="customer" class="form-control">
                            @foreach ($customers as $customer)
                                <option value="{{__($customer->id)}}">{{__($customer->name)}}</option>       
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="dest" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="dest" name="dest" placeholder="Enter destination" required>
                    </div>
                    <div class="col-md-4">
                        <label for="date" class="form-label">Booking Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="col-md-4">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option selected disabled>Choose status...</option>
                            <option value="Confirmed">Confirmed</option>
                            <option value="Pending">Pending</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-success">Add Booking</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
    <div class="card">
        <div class="card-header">
            <h5>All Bookings</h5>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Destination</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($booking as $details)
                <tr>
                    <td>{{ $details['id'] }}</td>
                    <td><img src="{{asset($details->customer->idUrl)}}" alt=""></td>
                    <td>{{ $details->customer->name }}</td>
                    <td>{{ $details['destination'] }}</td>
                    <td>{{ $details['date'] }}</td>
                    <td>
                        @if($details['deleted_at'] !== null)
                            <span class="badge bg-danger">Deleted</span>
                        @elseif($details['status'] === 'Pending')
                            <span class="badge bg-warning">{{ $details['status'] }}</span>
                        @elseif($details['status'] === 'Cancelled')
                            <span class="badge bg-danger">{{ $details['status'] }}</span>
                        @elseif($details['status'] === 'Confirmed')
                            <span class="badge bg-success">{{ $details['status'] }}</span>
                        @endif
                    </td>
                    <td>
                        @if ($details['deleted_at'] !== null)
                            <form action="{{ route('booking.restore', ['id' => $details['id']])}}" method="POST">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-sm btn-outline-success">Restore</button>
                            </form>
                            <form action="{{ route('booking.permaDelete', ['id' => $details['id']])}}" method="POST" >
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Permanently Delete</button>
                            </form>
                        @else
                            <a href="/admin/page1/{{ $details['id'] }}" class="btn btn-sm btn-outline-primary">View Details</a>
                            <form action="{{ route('booking.delete', ['id' => $details['id']])}}" method="POST" >
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $booking->links() }}
        </div>
    </div>

</div>
@endsection
