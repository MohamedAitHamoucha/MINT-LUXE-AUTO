<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - MINT LUXE AUTO</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <a href="/" class="logo">
                <img src="{{ asset('images/white-logo.png') }}" alt="Logo">
            </a>
            <h2>Réinitialiser le mot de passe</h2>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <button type="submit">Envoyer le lien de réinitialisation</button>
            </form>

            <div class="form-footer">
                <a href="{{ route('login') }}" class="back-home">Retour à la connexion</a>
            </div>
        </div>
    </div>
</body>
</html> 