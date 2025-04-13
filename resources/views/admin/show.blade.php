<!-- resources/views/admin/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detail Aduan</title>
</head>
<body>
    <h2>Detail Aduan</h2>

    <p><strong>Ticket:</strong> {{ $aduan->ticket_number }}</p>
    <p><strong>Nama:</strong> {{ $aduan->nama }}</p>
    <p><strong>NIM:</strong> {{ $aduan->nim }}</p>
    <p><strong>Email:</strong> {{ $aduan->email }}</p>
    <p><strong>Fakultas:</strong> {{ $aduan->fakultas }}</p>
    <p><strong>Jurusan:</strong> {{ $aduan->jurusan }}</p>
    <p><strong>Kategori:</strong> {{ $aduan->kategori }}</p>
    <p><strong>Judul:</strong> {{ $aduan->judul }}</p>
    <p><strong>Deskripsi:</strong> {{ $aduan->deskripsi }}</p>

    <h3>Balasan</h3>
    @if($aduan->balasan)
        <p style="color: green;">{{ $aduan->balasan }}</p>
    @else
        <form action="{{ url('/admin/aduan/'.$aduan->id.'/balas') }}" method="POST">
            @csrf
            <textarea name="balasan" placeholder="Tulis balasan..." required></textarea><br>
            <button type="submit">Kirim Balasan</button>
        </form>
    @endif

    <p><a href="{{ url('/admin/aduan') }}">← Kembali</a></p>
</body>
</html>
