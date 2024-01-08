// instalisasi
// composer create-project laravel/laravel nama-project

// menjalankan
// php artisan serve / php artisan serve --port=8001

// konfigurasi .env database

// Migration aja
// php artisan make:migration create_books_table
// php artisan make:migration add_columns_to_books_table // menambah kolom

// model
// php artisan make:model NamaModel //diusahakan tidak memakai s di akhir

// controller
// php artisan make:controller NamaController -r
// -r => resource (index, create, store, show, update, edit, destroy)

// migration, model, controller
// php artisan make:model NamaModel -mcr

// middleware untuk membatasi hak akses user
// php artisan make:middlerware NamaMiddleware

// seeder untuk menambah data tanpa form
// php artisan make:seeder NamaSeeder

// alur
// website - contoller - model - database - model - controller - view - website

// di model untuk mengatur table mana column mana yg boleh di isi value

// untuk menghubungkan table apabila ga pake s
// protected $table = 'nama database';

// pengaturan bahwa kolom bisa diberi value
// protected $fillable = [
//    'nama nama column',
];

// lalu ke views dan buat blade kosongan
// extends
// perbedaan yield dan stack
// yield di panggilnya lewat section
// stack di panggilnya push lalu nama stack nya //optional 

// ke controller
// func index// return view('namafolder.namafile')

// ke web.php
// prefix muncul di url
// name untuk di pake di root lain // group untuk root di gunakan lebih dri satu
// method suatu root : get, post, delete, path, 
// jika ingin menggunakan controller pastikan sudah di import
// panggil nama func nya lalu beri nama agar mudah 

// lalu ke views dan buat stylingnya

// untuk get keseluruhan data
// $namavariable = NamaController::all(); / get // all datanya arraynya multidimensi hasilnya harus di foreach // first array asosiatif dan data yg paling atas
// compact untuk menghubungkan ke views // nampung data // agar data yg di buat bisa muncul di views // nama compact harus sama dengan variablenya // nampilin 

// alias suatu foreach di bebaskan
// isi foreach harus di sesuaikan dengan table di database
// jika ingin memanggil nama root 
// csrf untuk mencocokan token antara aplikasi dan database agar bisa di akses

// create untuk munculin form nya aja
// store untuk proses masukin nambah atau isi datanya