<!DOCTYPE html>
<html>
<head>
    <title>Potwierdzenie Hasła</title>
</head>
<body>
    @extends('layouts.guest')
    @section('title', 'Potwierdzenie Hasła')
    @section('content')
        <h2 class="card-title mb-4">Potwierdzenie Hasła</h2>
        <p class="text-muted mb-4">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
    @endsection
</body>
</html>
