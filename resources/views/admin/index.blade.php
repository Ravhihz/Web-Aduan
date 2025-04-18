<!-- resources/views/admin/index.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Daftar Aduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-4">📋 Daftar Aduan</h2>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-2 px-4">Ticket</th>
                        <th class="py-2 px-4">Nama</th>
                        <th class="py-2 px-4">Judul</th>
                        <th class="py-2 px-4">Status</th>
                        <th class="py-2 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aduans as $aduan)
                    <tr class="border-t">
                        <td class="py-2 px-4 font-mono">{{ $aduan->ticket_number }}</td>
                        <td class="py-2 px-4">{{ $aduan->nama }}</td>
                        <td class="py-2 px-4">{{ $aduan->judul }}</td>
                        <td class="py-2 px-4">
                            @if($aduan->balasan)
                                <span class="text-green-700 bg-green-100 px-2 py-1 rounded text-sm">Sudah Dibalas</span>
                            @else
                                <span class="text-red-700 bg-red-100 px-2 py-1 rounded text-sm">Belum Dibalas</span>
                            @endif
                        </td>
                        <td class="py-2 px-4 space-x-2">
                            <a href="{{ url('/admin/aduan/'.$aduan->id) }}" class="text-blue-600 hover:underline">Detail</a>
                            <form action="{{ url('/admin/aduan/'.$aduan->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus aduan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
