<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matakuliah</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        max-width: 1100px;
        margin: 30px auto;
        padding: 0 20px;
    }

    h1 {
        margin-bottom: 10px;
    }

    a {
        color: #155eef;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #999;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: white;
    }

    .succes {
        padding: 10px;
        background-color: gainsboro;
        color: green;
    }

    form {
        display: inline;
    }

    button {
        cursor: pointer;
    }
    </style>
</head>

<body>
    <h1>Data Matakuliah</h1>

    @if (session('succes'))
    <p class="succes">{{ session('succes') }}</p>
    @endif

    <p>
        <a href="{{ route('matakuliah.create') }}">Tambah Matakuliah</a>
        |
        <a href="{{ route('dosen.index') }}">Data Dosen</a>
        |
        <a href="{{ route('mahasiswa.index') }}">Data Mahasiswa</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Matakuliah</th>
                <th>Nama Matakuliah</th>
                <th>Dosen</th>
                <th>SKS</th>
                <th>Action</th>
            </tr>
        </thead>

</body>
@forelse ($matakuliah as $matkul)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $matkul-> kode_matakuliah }}</td>
    <td>{{ $matkul-> nama_matakuliah }}</td>
    <td>{{ $matkul-> dosen }}</td>
    <td>{{ $matkul-> SKS }}</td>
    <td>
        <a href="{{ route('matakuliah.edit', $matkul->id) }}"><button>Edit Matakuliah</button></a>
        <form action="{{ route('matakuliah.destroy', $matkul->id) }}" method="POST" style="display: inline"
            onsubmit="return confirm('Yakin Menghapus data matakuliah ini?')">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus Matakuliah</button>
            </a>
        </form>
    </td>
</tr>
@empty
<tr>
    <td colspan="7">Belum ada data Matakuliah.</td>
</tr>
@endforelse
</table>
<br>
</body>

</html>