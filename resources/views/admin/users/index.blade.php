@extends('layouts.admin')

@section('title', 'Users List')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
            <div class="aler alert-success">{{ session('message') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Users
                    <a href="{{ url('admin/users/create') }}" class="btn btn-primary float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripe">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->role_as == '0')
                                    <label class="btn btn-primary">User</label>
                                @elseif($user->role_as == '1')
                                    <label class="btn btn-success">Admin</label>
                                @else
                                    <label class="btn btn-danger">None</label>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-sm btn-success">
                                    Edit
                                </a>
                                <a href="{{ url('admin/users/'.$user->id.'/delete') }}" 
                                    onclick="return confirm('Are you sure!, you want to delete data?')" 
                                    class="btn btn-sm btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No Users Available</td>
                        </tr>
                        @endforelse
                        
                    </tbody>
                </table>
                <div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection