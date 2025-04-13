<!-- resources/views/admin/index.blade.php -->
<h2>Rekap Aduan</h2>

@foreach($aduans as $aduan)
    <div>
        <strong>{{ $aduan->nama }}</strong> - {{ $aduan->judul }}
        <br>No Ticket: {{ $aduan->ticket_number }}
        <br><a href="/admin/aduan/{{ $aduan->id }}">Lihat Detail</a>
        <form action="/admin/aduan/{{ $aduan->id }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </div>
    <hr>
    @endforeach
    
