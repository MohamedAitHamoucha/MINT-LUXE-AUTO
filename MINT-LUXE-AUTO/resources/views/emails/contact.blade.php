<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
</head>
<body>
    <h2>Nouveau message de contact</h2>
    
    <p><strong>Nom:</strong> {{ $nom }} {{ $prenom }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Téléphone:</strong> {{ $telephone }}</p>
    
    <p><strong>Message:</strong></p>
    <p>{{ $userMessage }}</p>
</body>
</html> 