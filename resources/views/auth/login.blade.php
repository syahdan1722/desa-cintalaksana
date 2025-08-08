<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Desa Cintalaksana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        .logo {
            display: block;
            width: 80px;
            margin: 0 auto 20px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.7);
            font-size: 18px;
        }

        .form-control {
            padding-left: 45px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: #fff;
            color: #fff;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #667eea;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn-login:hover {
            background-color:  #764ba2;
        }

        .bottom-links {
            text-align: center;
            margin-top: 15px;
        }

        .bottom-links a {
            color: #fff;
            font-size: 0.9rem;
            display: block;
            margin-top: 8px;
            text-decoration: underline;
        }

        .bottom-links a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <img src="{{ asset('logo-desa.png') }}" class="logo" alt="Logo Desa">

        <form method="POST" action="#">
            @csrf

            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" placeholder="Nama Pengguna" required>
            </div>

            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" placeholder="Kata Sandi" required>
            </div>

            <button type="submit" class="btn btn-login">Login</button>

            <div class="bottom-links">
                <a href="#">Lupa Password?</a>
                <a href="/admin/register">Belum punya akun? Daftar</a>
            </div>
        </form>
    </div>
</body>
</html>