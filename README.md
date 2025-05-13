# Sistem Manajemen Mata Kuliah

A simple web-based application built with PHP and MySQL to manage course data (Mata Kuliah). The system supports Create, Read, Update, and Delete (CRUD) operations, and includes styled components using Tailwind CSS.

## Fitur

- Menambahkan data mata kuliah
- Melihat daftar mata kuliah
- Mengedit data mata kuliah
- Menghapus data mata kuliah
- Tampilan sederhana dan responsif

## Struktur Folder

```

📁 config/
└── db.php # Koneksi database
📁 feature/
├── create_matakuliah.php
├── update_matakuliah.php
└── delete_matakuliah.php
📁 template/
├── header.php
└── footer.php
📁 screenshots/
├── create_success.png
├── db.png
├── delete_success.png
├── form.png
├── list.png
└── update_success.png
form.php
index.php

```

## Screenshot

### Database Struktur

![Database Struktur](screenshots/db.png)

### Daftar Mata Kuliah

![List Mata Kuliah](screenshots/list.png)

### Form Tambah / Edit Mata Kuliah

![Form Mata Kuliah](screenshots/form.png)

### Sukses Tambah Data

![Sukses Create](screenshots/create_success.png)

### Sukses Update Data

![Sukses Update](screenshots/update_success.png)

### Sukses Hapus Data

![Sukses Delete](screenshots/delete_success.png)

## Teknologi

- PHP (Native)
- MySQL
- HTML + Tailwind CSS

## Cara Menjalankan

1. Clone repositori ini:

   ```bash
   git clone https://github.com/username/nama-repo.git
   cd nama-repo
   ```

2. Import database dari file `db.sql` (jika tersedia).

3. Jalankan server lokal:

   ```bash
   php -S localhost:8000
   ```

4. Akses melalui browser:

   ```
   http://localhost:8000
   ```

## Lisensi

Proyek ini bebas digunakan untuk keperluan pembelajaran dan pengembangan pribadi.

```

```
