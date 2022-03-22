@extends('nav')

@section('title')
<h1>HOME</h1>
@endsection
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-succes" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged un!') }}

    <table>
        <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
        <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
        <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
        <tr><th>Created</th><th>:</th><td>{{ $user->created_at }}</td></tr>
    </table>
</div>
