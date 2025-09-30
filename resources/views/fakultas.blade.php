<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Fakultas - Telkom University</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 4px 12px; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h3>Daftar Fakultas - Telkom University</h3>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Fakultas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakultas as $f) <!-- Perulangan loop untuk menampilkan setiap data dari daftar $fakultas -->
            <tr>
                <td>{{ $f['kode'] }}</td> <!--Buat data table kode yang di panggil dari web.php-->
                <td>{{ $f['nama_fakultas'] }}</td> <!--Buat data table Nama Fakultas yang di panggil dari web.php-->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


<!--buasciaisciascac-->