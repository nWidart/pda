<html>
<head>
    <title>Welcome on your Personal Diablo Assistant</title>
</head>
<body>
    <h1>Welcome on your Personal Diablo Assistant</h1>
    <p>Your Diablo 3 experience is about to change.</p>
    <p><strong>Please click on the link below to activate your account.</strong></p>
    <p>
        <a href="{{ URL::to('auth/activate/' . $user->id . '/' . $activationcode) }}">{{ URL::to('auth/activate/' . $user->id . '/' . $activationcode) }}</a>
    </p>
    <hr>
    <p>The PDA Team,</p>
</body>
</html>
