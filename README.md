# 📚 Simple Library (Laravel + MySQL)
<p align="center"><img width="450" height="450" alt="Image" src="https://github.com/user-attachments/assets/52114988-8202-45f2-a3c9-bb9371bb80e4" /></p>

## 📖 Deskripsi
Proyek sederhana API untuk mengelola daftar buku menggunakan Laravel dan MySQL.  
Mendukung operasi CRUD (Create, Read, Update, Delete) untuk buku.

## 🛠️ Requirement
- PHP >= 8.1
- Composer
- MySQL
- Laravel => 10.x
- Postman / Thunder Client (untuk uji API)

## ⚙️ Instalasi
1. Clone repository:
``` bash
git clone https://github.com/username/simple-library.git
cd simple-library

2. Install dependencies:

composer install

3. Copy .env dan sesuaikan koneksi database:

cp .env.example .env

Contoh konfigurasi .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple_library_db
DB_USERNAME=root
DB_PASSWORD=secret

4. Generate app key:

php artisan key:generate

5. Buat database MySQL (contoh: simple_library_db)

6. Jalankan migration & seed:

php artisan migrate --seed

7. Jalankan server development:

php artisan serve

API tersedia di: http://127.0.0.1:8000/api/books


---

Endpoints

Method	URL	Keterangan

GET	/api/books	List semua buku
GET	/api/books/{id}	Detail buku berdasarkan ID
POST	/api/books	Tambah buku baru
PUT	/api/books/{id}	Update data buku
DELETE	/api/books/{id}	Hapus buku



---
```
# 🚀 Cara Menggunakan
Contoh Request / Testing API

> Catatan: Proyek ini diuji menggunakan Thunder Client (VS Code extension), tapi kamu juga bisa menggunakan Postman, Insomnia, curl, atau tools API lainnya.

## 🌩️ Thunder Client Response

GET semua buku:
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/31ac1f75-e712-43f0-be3b-59b1083d2bed" />

Method = [GET] cth = http://127.0.0.1:8000/api/books

POST tambah buku:
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/ec4a8336-8a4b-4d54-9b55-2a0d4d46be02" />

POST http://127.0.0.1:8000/api/books \
-H "Content-Type: application/json" \
-d '{"title":"Judul Baru","author":"Nama Penulis","year":2020}'

catatan : kalau tidak mau menambahkan lewat body boleh dengan cara langsung lewat URL API
Method = [POST] cth = http://127.0.0.1:8000/api/books?title=Judul+Baru&author=Nama+Penulis&year=2020

PUT update buku:
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/d5a4cbef-0e35-4a92-b6c3-aa091b172539" />

PUT http://127.0.0.1:8000/api/books/1 \
-H "Content-Type: application/json" \
-d '{"title":"Judul Diubah","year":2019}'

catatan : kalau tidak mau memperbarui lewat body boleh dengan cara langsung lewat URL API
Method = [PUT] cth = http://127.0.0.1:8000/api/books/1?title=Judul+Diubah&year=2019

DELETE buku:
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/08575109-df4d-48cd-a2e3-aadfe3b81759" />

Method = [DELETE] cth = http://127.0.0.1:8000/api/books/1


---

✅ Validasi Input

title wajib diisi (maks. 150 karakter).

author wajib diisi (maks. 100 karakter).

year harus berupa angka dan tidak boleh melebihi tahun sekarang.

---
