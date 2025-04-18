<!-- resources/views/admin/show.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Aduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-4">📄 Detail Aduan</h2>

        <div class="space-y-2 text-gray-700">
            <p><strong>🎫 Ticket:</strong> {{ $aduan->ticket_number }}</p>
            <p><strong>👤 Nama:</strong> {{ $aduan->nama }}</p>
            <p><strong>🆔 NIM:</strong> {{ $aduan->nim }}</p>
            <p><strong>📧 Email:</strong> {{ $aduan->email }}</p>
            <p><strong>🏫 Fakultas:</strong> {{ $aduan->fakultas }}</p>
            <p><strong>📘 Jurusan:</strong> {{ $aduan->jurusan }}</p>
            <p><strong>🏷️ Kategori:</strong> {{ $aduan->kategori }}</p>
            <p><strong>📌 Judul:</strong> {{ $aduan->judul }}</p>
            <p><strong>📝 Deskripsi:</strong> {{ $aduan->deskripsi }}</p>
        </div>

        <h3 class="mt-6 text-xl font-semibold">💬 Balasan</h3>

        @if($aduan->balasan)
            <p class="mt-2 p-3 bg-green-100 text-green-800 rounded">{{ $aduan->balasan }}</p>
        @else
            <form action="{{ url('/admin/aduan/'.$aduan->id.'/balas') }}" method="POST" class="mt-3">
                @csrf
                <textarea name="balasan" placeholder="Tulis balasan..." required class="w-full border rounded p-2 mb-2"></textarea>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded">Kirim Balasan</button>
            </form>
        @endif

        <a href="{{ url('/admin/aduan') }}" class="mt-6 inline-block text-blue-600 hover:underline">← Kembali</a>
    </div>
</body>
</html>
