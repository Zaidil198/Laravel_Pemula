<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Matakuliah</title>
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
    <h1>Ubah Data Matakuliah</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="kode_matakuliah">Kode Matakuliah</label><br>
            <input type="text" id="kode_matakuliah" name="kode_matakuliah"
                value="{{ old('kode_matakuliah', $matakuliah->kode_matakuliah) }}" maxlength="20" required>
        </p>

        <p>
            <label for="nama_matakuliah">Nama Matakuliah</label><br>
            <input type="text" id="nama_matakuliah" name="nama_matakuliah"
                value="{{ old('nama_matakuliah', $matakuliah->nama_matakuliah) }}" maxlength="100" required>
        </p>

        <p>
            <label for="dosen">Dosen</label><br>
            <input type="text" id="dosen" name="dosen" value="{{ old('dosen', $matakuliah->dosen) }}" maxlength="100"
                required>
        </p>

        <p>
            <label for="SKS">SKS</label><br>
            <input type="number" id="SKS" name="SKS" value="{{ old('SKS', $matakuliah->SKS) }}" min="1" max="10"
                required>
        </p>

        <p>
            <label for="semester">Semester</label><br>
            <input type="number" id="semester" name="semester" value="{{ old('semester', $matakuliah->semester) }}" min="1" max="10"
                required>
        </p>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('matakuliah.index') }}"><button>Batal</button></a>
    </form>
</body>

</html>