<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MINT LUXE AUTO</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <a href="/" class="logo">
                <img src="{{ asset('images/white-logo.png') }}" alt="Logo">
            </a>
            <h2>Administration</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ url('admin/login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" required>
                    </div>
                </div>

                <button type="submit">Se connecter</button>
            </form>

            <div class="form-footer">
                <a href="{{ route('password.request') }}" class="forgot-password">Mot de passe oublié?</a>
                <a href="/" class="back-home">Retour à l'accueil</a>
            </div>
        </div>
    </div>
</body>
</html> 