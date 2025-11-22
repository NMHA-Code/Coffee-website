@extends('layouts.LayoutDefault')
@section('content')
    <div class="users">
        <div class="createUser">
            <a href="/users/create" class="btn btn-primary">Create Users</a>
        </div>
        <div class="table-users mt-4">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role</th>
                        <th scope="col">Điều chỉnh</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($alluser as $index => $user)
                        <tr>
                            <th>{{ $index+1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm me-2">Edit</button>
                                <!-- Nút Delete sẽ hiện ra ngay đây -->
                                <x-delete-modal 
                                    :id="$user->id" 
                                    :name="$user->name" 
                                    :route="route('users.destroy', $user->id)" 
                                />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection