<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Awal</title>

    <style>
        /* ===== BACKGROUND SELURUH HALAMAN ===== */
        body {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        /* Judul */
        h1, h2 {
            font-weight: bold;
            color: #ffffff;
            text-align: center;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }

        /* Container utama */
        .login-box {
            padding: 30px;
            background: rgba(181, 199, 199, 0.25);
            border-radius: 15px;
            width: 400px;
            margin: 100px auto;
            box-shadow: 0px 3px 12px rgba(0,0,0,0.12);
            text-align: center;
        }

        /* Input */
        .login-box input {
            width: 80%;
            padding: 10px;
            margin-top: 15px;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 16px;
        }

        /* Tombol */
        .login-box button {
            margin-top: 20px;
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            background: #ffffff;
            color: #1e3c72;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .login-box button:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 18px rgba(0,0,0,0.25);
        }
    </style>
</head>

<body>

    <div class="login-box">
        
        <h2>Masukkan Nama </h2>

        <form action="{{ route('start') }}" method="POST">
            @csrf
            <input type="text" name="" placeholder="Nama " required>
            <button type="submit">Mulai Membaca</button>
        </form>
    </div>

</body>
</html>
