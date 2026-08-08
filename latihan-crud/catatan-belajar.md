Kasus 1 (latihan-ai-agent\latihan-crud\test1.php)
Saya sengaja membuat variabel `$tahunLahir` yang belum didefinisikan.

Instruksi kepada AI:
"Analisis penyebab error. Jangan mengubah kode terlebih dahulu."

Hasil:
AI menjelaskan bahwa `$tahunLahir` digunakan sebelum didefinisikan.

Solusi:
Mendefinisikan `$tahunLahir` berdasarkan tahun sekarang dikurangi umur.


Kasus 2 (latihan-ai-agent\latihan-crud\test2.php)
Saya membuat kesalahan logika pada perhitungan total harga.

Kesalahan:
$harga + $jumlah - $diskon

Seharusnya:
($harga * $jumlah) - $diskon

Yang saya pelajari:
AI tidak hanya digunakan untuk menghasilkan kode,
tetapi juga dapat membantu menemukan dan menjelaskan
kesalahan. Namun hasilnya tetap harus diperiksa dan diuji.


Kasus 3 (latihan-ai-agent\latihan-crud\mahasiswa.php)
Program berisi data tiga mahasiswa:

Andi dengan nilai 85
Budi dengan nilai 65
Citra dengan nilai 90

Program awal digunakan untuk menampilkan nama dan nilai mahasiswa.

Instruksi kepada AI:
"Tambahkan fitur pada mahasiswa.php untuk menentukan status kelulusan setiap mahasiswa. Mahasiswa dinyatakan lulus jika nilai >= 70 dan tidak lulus jika nilai < 70. Selain itu, tampilkan rata-rata nilai seluruh mahasiswa. Jangan menghapus data yang sudah ada dan pertahankan struktur program sebisa mungkin. Sebelum menerapkan perubahan, jelaskan file dan bagian kode yang akan kamu ubah."

AI Agent kemudian menjelaskan rencana perubahan sebelum menerapkannya.



Hasil:
AI menambahkan beberapa bagian kode, yaitu:

Variabel $totalNilai untuk menyimpan jumlah seluruh nilai.
Kondisi untuk menentukan status kelulusan.
Penambahan status kelulusan pada output.
Perhitungan rata-rata nilai mahasiswa.

Solusi:
Mendefinisikan `$tahunLahir` berdasarkan tahun sekarang dikurangi umur.

Saya tidak langsung menerima perubahan dari AI Agent. Perubahan diperiksa menggunakan fitur Source Control/Diff pada VS Code.

Dari pemeriksaan tersebut, saya memastikan bahwa:

Data mahasiswa yang sudah ada tidak dihapus.
Logika kelulusan sesuai dengan kebutuhan.
Perhitungan total nilai dilakukan pada setiap data mahasiswa.
Rata-rata dihitung berdasarkan jumlah mahasiswa.
Tidak terdapat perubahan yang tidak berhubungan dengan permintaan.

Menemukan masalah baru:
Setelah perubahan dibuat, saya meminta AI Agent melakukan review kembali dengan instruksi:

Review kembali perubahan yang kamu buat. Cari minimal 2 potensi masalah atau edge case dari implementasi tersebut. Jangan mengubah kode.

Ditemukan potensi masalah pada:

$rataRata = $totalNilai / count($mahasiswa);

Jika array $mahasiswa kosong, maka count($mahasiswa) menghasilkan 0 sehingga dapat menyebabkan pembagian dengan nol.

Perbaikan

Saya kemudian meminta AI memperbaiki masalah tersebut tanpa mengubah fitur lainnya.

AI menambahkan pengecekan jumlah data mahasiswa sebelum melakukan perhitungan rata-rata.

Dengan demikian, program tetap dapat berjalan meskipun tidak terdapat data mahasiswa.

Pengujian

Program diuji menggunakan beberapa kondisi.

Pengujian 1 — Data Normal

Data:

Taufiqurahman  - 85
Muammar  - 65
Griyo - 90

Hasil:

Taufiqurahman - 85 - Lulus
Muammar - 65 - Tidak Lulus
Griyo - 90 - Lulus
Rata-rata: 80

Hasil sesuai dengan perhitungan:

(85 + 65 + 90) / 3 = 80
Pengujian 2 — Data Kosong

Data mahasiswa diubah menjadi:

$mahasiswa = []; (data kosong)

Program kemudian dijalankan kembali untuk memastikan tidak terjadi error pembagian dengan nol. Hasil menunjukkan tida ada data yang perlu dihitung