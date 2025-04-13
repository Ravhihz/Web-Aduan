<!-- resources/views/admin/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Daftar Aduan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Daftar Aduan</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Ticket</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aduans as $aduan)
            <tr>
                <td>{{ $aduan->ticket_number }}</td>
                <td>{{ $aduan->nama }}</td>
                <td>{{ $aduan->judul }}</td>
                <td>{{ $aduan->balasan ? 'Sudah Dibalas' : 'Belum Dibalas' }}</td>
                <td>
                    <a href="{{ url('/admin/aduan/'.$aduan->id) }}">Detail</a> |
                    <form action="{{ url('/admin/aduan/'.$aduan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus aduan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
