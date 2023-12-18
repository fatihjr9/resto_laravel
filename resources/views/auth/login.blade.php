<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/auth.css')}}">
</head>

<body style="font-family: Inter;">
    <div class="card mx-auto bg-white rounded-3 mt-5 p-4 shadow-sm" id="auth" style="width: 24rem; height: fit-content;">
            <h2 class="text-center mb-4" style="color: orange;">Log in.</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group position-relative mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group position-relative mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn text-white rounded-3 w-100" style="background: orange;">Log in</button>
            </form>
            <div class="text-center mt-3">
                <p class='text-gray-600 mb-0' style="font-size: .75rem;">Don't have an account? <a href="/register" class="font-bold" style="color: orange;">Register</a>.</p>
            </div>
    </div>
</body>
</html>