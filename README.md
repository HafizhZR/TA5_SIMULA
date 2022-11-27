# TA5_SIMULA

Nama : Hafizh Zaghlul Rizal

NPM : 2055061017

Web Service Sisem Informasi Pengunjung Museum Lampung yang mendukung operasi CRUD

Penjelasan Umum

Web Service yang dibuat yaitu web service dengan tema Sistem Informasi Pengunjung Museum Lampung, yang bertujuan untuk mendata pengunjung yang datang di museum lampung. Web Service ini sudah mendukung operasi CRUD yaitu create, read, update, dan delete.

Cara menjalankan
1. Mendownload Composer dan XAMPP dengan php versi 8.0.11
2. Simpan File di folder xampp -> htdocs
3. Hidupkan Apache dan Mysql pada XAMPP
4. Buka file di Text Editor vscode dengan mengetikkan diterminal : composer update
5. Membuat database di PhpMyAdmin dengan nama database : ta5_simula
6. Melakukan migration dengan mengetikkan diterminal : php artisan migrate:fresh
7. Menjalankan di local dengan mengetikkan diterminal : php artisan serve
8. Ketika website sudah berjalan, pengguna dapat melakukan tambah pengunjung dan mengisi form yang tersedia. Pengguna juga dapat mencari, mengedit, dan menghapus data pengujung pada web service tersebut.

Design Database
Database yang didesign memiliki nama database yaitu ; ta5_simula
Database ini memiliki 9 kolom, yaitu 
1. id, tipe data integer, auto_increment, primary key
2. name, tipe data varchar
3. tlp, tipe data varchar
4. alamat tipe data varchar
5. email, tipe data varchar
6. email_verified_at, tipe data timestamp
7. password, tipe data varchar
8. remember_token tipe data varchar
9. created_at, tipe data varchar
10. updated_at, tipe data varchar

API docs di setiap exposed routes
Pada routes terdapat 8 routes yang berjalan, yaitu
1. routes dengan url "/" yang berguna untuk dashboard dari website
2. routes dengan url "pengunjung" yang berguna untuk daftar pengujung
3. routes dengan url "formtambah" yang berguna untuk menambang pengunjung
4. routes dengan url "simpan-pengunjung" yang berguna untuk menyimpan data pengunjung
5. routes dengan url "hapusPengunjung/{id}" yang berguna untuk menghapus pengunjung berdasarkan id yang dipilih
6. routes dengan url "formEdit/{id}" yang berguna untuk mengedit data pengunjung berdasarkan id yang dipilih
7. routes dengan url "update-pengunjung" yang berguna untuk menyimpan hasil edit data pengunjung
