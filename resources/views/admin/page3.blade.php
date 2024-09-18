@extends('layouts.admin')

@section('admin-content')
<div class="container mt-4">
    <h1 class="mb-4">User Management</h1>
    <div class="card">
        <div class="card-header">
            <h5>All Users</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>USR1234</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>Admin</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-warning">Edit</button>
                            <button class="btn btn-sm btn-outline-danger">Deactivate</button>
                        </td>
                    </tr>
                    <tr>
                        <td>USR1235</td>
                        <td>Jane Smith</td>
                        <td>janesmith@example.com</td>
                        <td>User</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-warning">Edit</button>
                            <button class="btn btn-sm btn-outline-success">Activate</button>
                        </td>
                    </tr>
                    <tr>
                        <td>USR1236</td>
                        <td>Mike Brown</td>
                        <td>mikebrown@example.com</td>
                        <td>Agent</td>
                        <td><span class="badge bg-danger">Suspended</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline-warning">Edit</button>
                            <button class="btn btn-sm btn-outline-success">Reinstate</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
