<!DOCTYPE html>
<html>
<head>
    <title>Weryfikacja Adresu Email</title>
</head>
<body>
    @extends('layouts.guest')
    @section('title', 'Weryfikacja Adresu Email')
    @section('content')
        <h2 class="card-title mb-4">Weryfikacja Adresu Email</h2>
        <p class="text-muted mb-4">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-success mb-4">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="d-flex justify-content-end align-items-center">
            <form method="POST" action="{{ route('verification.send') }}" class="me-3">
                @csrf
                <button type="submit" class="btn btn-primary">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-secondary">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    @endsection
</body>
</html>
