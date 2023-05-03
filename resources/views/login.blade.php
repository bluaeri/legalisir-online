<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistem Legalisir Online</title>
    <link rel="stylesheet" href="{{ asset('css/logindkk.css') }}">
</head>
<body>
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>
    <div class="container">
        <img src="{{ asset('images/ppl.png') }}" alt="ppl">
        <div class="login-box">
            <h2>Login Account</h2>
            <form action="" method="POST">
                
                <div class="form-group">
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <a href="#"><p>lupa password?</p></a>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
