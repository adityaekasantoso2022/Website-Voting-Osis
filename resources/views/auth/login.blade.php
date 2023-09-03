@extends('layouts.guest.app')

@section('content')
<div class="row h-100 justify-content-center">
    <div class="col-lg-6 col-12">
        <div id="auth-left">
            <h1 class="auth-title text-center">Masuk</h1>
            <h4 class="text-center">Masukkan Username dan Token</h4>
            <br>
            <form method="POST" action="{{ route('login_user') }}">
                @csrf
             
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username" name="email">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Token" name="token" id="passwordInput">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <div class="text-center mt-3">
                        <p><b>Informasi:</b> Angka nol = Ø, huruf o = O</p>
                    </div>
                </div>
                
                @if (session('error'))
                <div class="alert alert-light-warning color-warning">
                    {{ session('error') }}
                </div>
                @endif
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Masuk</button>
            </form>
        </div>
    </div>
</div>
@endsection
