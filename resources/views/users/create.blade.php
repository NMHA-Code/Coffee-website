@extends('layouts.LayoutDefault')
@section('content')
    <div class="create-from">
        <div class="backUser">
            <a href="/users" class="btn btn-primary">Back</a>
        </div>
        <div class="users-form d-flex align-items-centen justify-content-center mt-4">
            <form action="/users" method="POST" enctype='multipart/form-data'>
                
            @csrf()
                <h3 class="mb-3">Create Staff</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" name="name"
                        aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" name="password"
                        aria-describedby="inputGroup-sizing-sm" required>

                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="select_role">Role</label>
                    <select class="form-select" id="select_role" name="role">
                        <option disabled>Choose...</option>
                        <option value="admin">Admin</option>
                        <option value="staff" selected>Staff</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tao moi</button>
            </form>
        </div>

    </div>
@endsection