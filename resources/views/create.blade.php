<!-- resources/views/create.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Aduan</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 600px;
            margin: 30px auto;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }
        .error { color: red; margin-top: -10px; margin-bottom: 10px; font-size: 0.9em; }
    </style>
</head>
<body>

    <h2>Form Aduan</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/aduan" method="POST">
        @csrf

        <input type="text" name="nama" placeholder="Nama" value="{{ old('nama') }}" required>
        @error('nama') <div class="error">{{ $message }}</div> @enderror

        <select name="fakultas" required>
            <option value="">-- Pilih Fakultas --</option>
            <option value="Teknik" {{ old('fakultas') == 'Teknik' ? 'selected' : '' }}>Teknik</option>
            <option value="Ekonomi" {{ old('fakultas') == 'Ekonomi' ? 'selected' : '' }}>Ekonomi</option>
            <option value="Hukum" {{ old('fakultas') == 'Hukum' ? 'selected' : '' }}>Hukum</option>
            <!-- Tambahkan lainnya sesuai kebutuhan -->
        </select>
        @error('fakultas') <div class="error">{{ $message }}</div> @enderror

        <input type="text" name="jurusan" placeholder="Jurusan" value="{{ old('jurusan') }}" required>
        @error('jurusan') <div class="error">{{ $message }}</div> @enderror

        <input type="text" name="nim" placeholder="NIM" value="{{ old('nim') }}" required>
        @error('nim') <div class="error">{{ $message }}</div> @enderror

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email') <div class="error">{{ $message }}</div> @enderror

        <input type="text" name="kategori" placeholder="Kategori (Opsional)" value="{{ old('kategori') }}">
        @error('kategori') <div class="error">{{ $message }}</div> @enderror

        <input type="text" name="judul" placeholder="Judul Aduan" value="{{ old('judul') }}" required>
        @error('judul') <div class="error">{{ $message }}</div> @enderror

        <textarea name="deskripsi" placeholder="Deskripsi Aduan" required>{{ old('deskripsi') }}</textarea>
        @error('deskripsi') <div class="error">{{ $message }}</div> @enderror

        <button type="submit">Kirim Aduan</button>
    </form>

</body>
</html>
