<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pengunjung</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background: #f5f5f5;
        }
    </style>
</head>
<body>

<h2>Daftar Pengunjung</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Kunjungan</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pengunjung as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->tanggal_kunjungan }}</td>
                <td>{{ $p->keterangan ?? '-' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" align="center">Belum ada data pengunjung</td>
            </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>
