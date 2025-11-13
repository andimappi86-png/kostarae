@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="auth-container smaller">
    <div class="auth-card compact">

        <div class="auth-left" style="background-image: url('{{ asset('images/hero.png') }}')">
            <div class="overlay"></div>
        </div>

        <div class="auth-right">

            <h2>Daftar Pemilik Kost</h2>
            <p class="sub-text">Promosikan dan kelola properti kost 🏠</p>

            <form>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-input" placeholder="Budi Santoso">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-input" placeholder="nama@email.com">
                </div>

                <div class="form-group">
                    <label>Nama Kost</label>
                    <input type="text" class="form-input" placeholder="Kost Mawar Indah">
                </div>

                <div class="form-group">
                    <label>Alamat Kost</label>
                    <input type="text" class="form-input" placeholder="Jl. Kenanga...">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-input" placeholder="********">
                </div>

                <button class="btn-submit">Daftar</button>

                <div class="bottom-text">
                    Sudah punya akun? <a href="#">Masuk</a>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection
