<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
    </a>
</p>

## Latar Belakang

Framework Laravel menyediakan banyak fitur untuk developer yang bertujuan untuk memudahkan dalam membangun suatu aplikasi atau website salah satunya sebuah engine bawaan dari Laravel yaitu Blade Template. Dengan menggunakan engine ini, developer dapat dengan mudah membuat tampilan dinamis. Dengan menggunakan Blade Template kita juga dapat memanggil halaman view lain ke halaman utama dengan mudah. Laravel juga menyediakan service API untuk membantu dalam menghubungkan program dengan database yang ada di Investree.

- Restful API menggunakan Laravel Passport 

Tujuan : Membangun rest api dan oauth token menggunakan laravel framework serta laravel passport 


1. Buatlah jwt authentication menggunakan laravel passport
2. Kemudian buatlah restful api posts (create, list all, show detail, update & delete)
3. Gunakan mekanisme middleware auth api passport ke endpoint posts (create, list all, show detail, update dan delete) 
4. Gunakan prefix versi pada api yang telah dibuat (contoh : api/v1)
5. Gunakan relasi eloquent pada table posts dan categories
6. Gunakan pagination pada api list all posts
7. Buatlah unit testing untuk setiap api posts
8. Untuk table yang digunakan silahkan refer pada link ini https://docs.google.com/document/d/18vr7dMZNmxeiT_CS6ofRTik8YygBraRvl0vscNXpRbQ/edit?usp=sharing



- Membangun Blog Sederhana Menggunakan laravel Blade serta Laravel UI

Tujuan : Agar dapat menerapkan fitur blade serta laravel ui ke dalam project

1. Buatlah fitur authentication menggunakan laravel UI
2. Kemudian buatlah fungsional CRUD article serta category 
3. Gunakan laravel blade untuk membuat templatenya
4. Gunakan relasi laravel eloquent untuk menghubungkan relasi antar tabel
5. Gunakan seeder untuk membuat sample user
6. Unit testing setiap halaman crud dan fitur 

## Instalation

### Prepare dependencies
    - composer install
    - cp .env.example .env
    - cp .env.testing.example .env.testing

### Change Database Config
    Change Database configuration in .env and .env.testing 

### Generate and Migration
    - php artisan key:generate
    - php artisan migrate --seed
    - php artisan passport:install

### Prepare FrontEnd
    - npm install
    - npm run dev

### Run Test and Development Server
    - php artisan test
    - php artisan serve
