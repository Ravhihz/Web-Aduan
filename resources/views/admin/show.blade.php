<!-- resources/views/admin/show.blade.php -->
<h2>Detail Ticket</h2>

<p>Nama: {{ $aduan->nama }}</p>
<p>Fakultas: {{ $aduan->fakultas }}</p>
<p>Jurusan: {{ $aduan->jurusan }}</p>
<p>NIM: {{ $aduan->nim }}</p>
<p>Email: {{ $aduan->email }}</p>
<p>Kategori: {{ $aduan->kategori }}</p>
<p>Judul Aduan: {{ $aduan->judul }}</p>
<p>Deskripsi: {{ $aduan->deskripsi }}</p>
<p>No Ticket: {{ $aduan->ticket_number }}</p>

@if($aduan->balasan)
    <p><strong>Balasan:</strong> {{ $aduan->balasan }}</p>
@else
    <form action="/admin/aduan/{{ $aduan->id }}/balas" method="POST">
        @csrf
        <textarea name="balasan" placeholder="Tulis balasan..." required></textarea>
        <button type="submit">Kirim Balasan</button>
    </form>
@endif
