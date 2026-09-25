<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 30px auto;
            padding: 0 20px;
        }

        label {
            display: inline-block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 9px;
        }

        button {
            padding: 9px 14px;
            cursor: pointer;
        }

        .errors {
            padding: 10 px 10px 10px 30px;
            background-color: #ffecec;
            color: #a40000;
        }
    </style>
</head>

<body>
    <h1>Tambah Mahasiswa</h1>

    @if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <p>
            <label for="nim">NIM</label><br>
            <input type="text" id="nim" name="nim" value="{{ old('nim') }}" maxlength="20" required>
        </p>

        <p>
            <label for="nama">Nama</label><br>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" maxlength="100" required>
        </p>

        <p>
            <label for="jurusan">Jurusan</label><br>
            <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan') }}" maxlength="100" required>
        </p>

        <p>
            <label for="angkatan">Angkatan</label><br>
            <input type="number" id="angkatan" name="angkatan" value="{{ old('angkatan') }}" min="1900" max="2200"
                required>
        </p>

        <p>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" maxlength="100">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}"><button>Batal</button> </a>
    </form>
</body>

</html>