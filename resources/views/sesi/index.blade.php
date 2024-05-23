@extends('layout.aplikasi')

@section('konten')
<div class="form-login">
    <img src="{{ asset('images/logo-contoh.png') }}" alt="Logo Perusahaan" style="display: block; margin: 0 auto 20px; width: 200px;">
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