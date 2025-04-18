<!DOCTYPE html>
<html>
<head>
    <title>Form Aduan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }

        h2 {
            text-align: center;
        }

        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Aduan</h2>
        <form action="{{ route('aduan.store') }}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama" required>

            <select name="fakultas" required>
                <option value="">Pilih Fakultas</option>
                <option value="FKDK">Fakultas Komunikasi dan Desain Kreatif</option>
                <option value="FISSG">Fakultas Ilmu Sosial dan Studi Global</option>
                <option value="FEB">Fakultas Ekonomi & Bisnis</option>
                <option value="FTI">Fakultas Teknologi Informasi</option>
                <option value="FT">Fakultas Teknik</option>
            </select>


            <select name="jurusan" required>
                <option value="">Pilih Jurusan</option>
                <option value="Informatika">Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
            </select>

            <select name="kategori">
                <option value="">Pilih Kategori (Opsional)</option>
                <option value="Akademik">Akademik</option>
                <option value="Keuangan">Keuangan</option>
                <option value="Fasilitas">Fasilitas</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <input type="text" name="nim" placeholder="NIM" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="judul" placeholder="Judul Aduan" required>
            <textarea name="deskripsi" placeholder="Deskripsi Aduan" rows="4" required></textarea>
            <button type="submit">Kirim Aduan</button>
        </form>
    </div>
    @if(session('success'))
    <script>
    alert("Aduan berhasil dikirim!");
    </script>
    @endif

</body>
</html>
