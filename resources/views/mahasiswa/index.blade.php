<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        .container {
            display: flex;
            gap: 40px;
        }

        .form-box {
            width: 300px;
        }

        input {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
        }

        button {
            padding: 8px;
            width: 100%;
        }
    </style>
</head>
<body>

<h1>Data Mahasiswa</h1>

<!-- TABEL DI ATAS -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->prodi }}</td>
            <td>{{ $mhs->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- FORM DI BAWAH KIRI -->
<div class="container">
    <div class="form-box">
        <h3>Input Mahasiswa</h3>

        <form action="/mahasiswa" method="POST">
            @csrf

            <input type="text" name="nim" placeholder="NIM" required>
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="text" name="prodi" placeholder="Prodi" required>
            <input type="email" name="email" placeholder="Email" required>

            <button type="submit">Simpan</button>
        </form>
    </div>
</div>

</body>
</html>