file ini juga saya buat otomatis menggunakan ai agent

# Catatan Belajar PHP

## 1. Struktur Program Sederhana
- File `data.php` berisi data mahasiswa.
- File `helper.php` berisi fungsi bantu seperti pengecekan status kelulusan dan pencarian data.
- File `index.php` adalah file utama yang menggabungkan data dan helper lalu menampilkan hasil.

## 2. Konsep Dasar PHP
- `require_once` digunakan untuk mengimpor file lain.
- Variabel ditulis dengan tanda `$`.
- Array digunakan untuk menyimpan kumpulan data.
- `foreach` dipakai untuk mengulang data array.

## 3. Pencarian Data
- Pencarian dilakukan dengan membandingkan kata kunci terhadap nama mahasiswa.
- Fungsi `strtolower()` dipakai agar pencarian tidak terpengaruh huruf besar/kecil.
- `stripos()` digunakan untuk mencari substring dalam string.

## 4. Logika Status Kelulusan
- Jika nilai `>= 70`, mahasiswa dinyatakan `Lulus`.
- Jika nilai `< 70`, mahasiswa dinyatakan `Tidak Lulus`.

## 5. Tips Belajar
- Pahami alur program dari data -> logika -> output.
- Coba ubah data dan lihat hasilnya agar lebih paham.
- Biasakan memecah program menjadi file yang terpisah agar lebih rapi.
