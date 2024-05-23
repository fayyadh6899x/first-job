@extends('layout.aplikasi')

@section('konten')
<div class="form-login">
    <form method="POST" action="/sesi/login">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit" class="btn-primary">Login</button>
    </form>
</div>
@endsection