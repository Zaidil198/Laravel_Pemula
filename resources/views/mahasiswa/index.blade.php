<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
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
    <h1>Data Mahasiswa</h1>
    <p>
        <a href="{{ route('mahasiswa.create') }}">Tambah mahasiswa</a>
        |
        <a href="{{ route('dosen.index') }}">Data Dosen</a>
        |
        <a href="{{ route('matakuliah.index') }}">Data Matakuliah</a>
    </p>
    <table border="1" cellpading="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->angkatan }}</td>
                <td>{{ $mhs->email }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}
                    "><button>Ubah</button></a>

                    <form action="{{route('mahasiswa.destroy', $mhs->id)}}" method="POST" style="display: inline"
                        onsubmit="return confirm('Apakah anda yakin menghapus mahasiswa ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">Belum ada data mahasiswa.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>