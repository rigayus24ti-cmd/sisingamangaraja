<!DOCTYPE html>
<html>
<head>
    <title>Mulai Membaca</title>
    <style>
        body {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            font-family: Arial;
        }

        .box {
            background: rgba(255, 255, 255, 0.15);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            width: 350px;
            box-shadow: 0 0 10px rgba(0,0,0,0.4);
        }

        input {
            width: 90%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            margin-top: 15px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            width: 100%;
            background: #0d6efd;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #10a3a8;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Selamat Datang</h2>
        <p>Masukkan Nama / Kelas anda</p>

        <form action="{{ route('welcome.go') }}" method="POST">
            @csrf
            <input type="text" name="nama_kelas" placeholder="Contoh: XII RPL" required>

            <button type="submit">Mulai Membaca</button>
        </form>
    </div>
</body>
</html>
