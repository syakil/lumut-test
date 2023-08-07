@extends('layouts.app')


@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Account</h1>
</div>

<div class="row">
    <table class="table" id="datatable">
        <thead>
            <tr>
                <td>Username</td>
                <td>Account</td>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

@endsection
