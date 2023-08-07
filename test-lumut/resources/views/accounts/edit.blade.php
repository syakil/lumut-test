@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Account</h1>

    <form action="{{ route('accounts.update', ['account' => $account->username]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="{{ $account->username }}" disabled>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $account->name }}">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" class="form-control">
                <option value="admin" {{ $account->role === 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="author" {{ $account->role === 'author' ? 'selected' : '' }}>Author</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Account</button>
    </form>
</div>
@endsection
