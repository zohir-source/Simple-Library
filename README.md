# Simple Library (Laravel + MySQL)

## Deskripsi
Proyek sederhana API untuk mengelola daftar buku menggunakan Laravel dan MySQL.  
Mendukung operasi CRUD (Create, Read, Update, Delete) untuk buku.

## Requirement
- PHP >= 8.1
- Composer
- MySQL
- Laravel 10.x

## Instalasi
1. Clone repository:
```bash
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

Contoh Request / Testing API

> Catatan: Proyek ini diuji menggunakan Thunder Client (VS Code extension), tapi kamu juga bisa menggunakan Postman, Insomnia, curl, atau tools API lainnya.



GET semua buku:

curl -X GET http://127.0.0.1:8000/api/books

POST tambah buku:

curl -X POST http://127.0.0.1:8000/api/books \
-H "Content-Type: application/json" \
-d '{"title":"Judul Baru","author":"Nama Penulis","year":2020}'

PUT update buku:

curl -X PUT http://127.0.0.1:8000/api/books/1 \
-H "Content-Type: application/json" \
-d '{"title":"Judul Diubah","year":2019}'

DELETE buku:

curl -X DELETE http://127.0.0.1:8000/api/books/1


---

Validasi Input

title : wajib, maksimal 150 karakter

author: wajib, maksimal 100 karakter

year  : integer, opsional, tidak boleh lebih besar dari tahun sekarang


Respons error validasi akan berbentuk JSON dengan status 422.


---





Mau aku buatkan versi itu juga?
