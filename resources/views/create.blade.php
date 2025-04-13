<!-- resources/views/create.blade.php -->
<h2>Form Aduan</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="/aduan" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="text" name="fakultas" placeholder="Fakultas" required><br>
    <input type="text" name="jurusan" placeholder="Jurusan" required><br>
    <input type="text" name="nim" placeholder="NIM" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="kategori" placeholder="Kategori (Opsional)"><br>
    <input type="text" name="judul" placeholder="Judul Aduan" required><br>
    <textarea name="deskripsi" placeholder="Deskripsi Aduan" required></textarea><br>
    <button type="submit">Kirim Aduan</button>
</form>
