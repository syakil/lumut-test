@extends('layouts.app') <!-- Assuming you have a layout file that includes the SB Admin 2 template -->

@section('content')
<div class="container">
    <h1>Create Account</h1>

    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" class="form-control">
                <option value="" selected disabled>Pilih .. </option>
                <option value="admin">Admin</option>
                <option value="author">Author</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary">Create Account</button>
    </form>
</div>
@endsection
