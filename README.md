Tentu, berikut adalah terjemahan deskripsi file README ke Bahasa Indonesia:

-----

# Formulir Pendaftaran Laravel

Aplikasi web pendaftaran sederhana yang dibangun dengan **Laravel 10** dan **Tailwind CSS 3**. Menampilkan formulir pendaftaran modern, integrasi database MySQL, notifikasi email menggunakan Mailtrap, dan tes fitur/unit lengkap.

## Fitur

  - Formulir pendaftaran responsif (nama, email, alamat) dengan validasi & UI modern
  - Menyimpan data ke MySQL (tabel `registrations`)
  - Mengirim notifikasi email HTML ke pengguna yang terdaftar (Mailtrap secara default)
  - Pesan konfirmasi setelah pendaftaran berhasil
  - Halaman untuk menampilkan semua pendaftar
  - Penanganan input yang aman (validasi & sanitasi)
  - Tes unit & fitur untuk fungsionalitas inti

## Persyaratan

  - PHP \>= 8.1
  - Composer
  - Node.js & npm
  - MySQL
  - Laravel 10.x
  - Tailwind CSS 3.x

## Instruksi Penyiapan

1.  **Kloning repositori:**
       `sh    git clone <repo_url>    cd laravel-registration    `
2.  **Instal dependensi:**
       `sh    composer install    npm install    `
3.  **Salin & konfigurasikan lingkungan:**
       `sh    cp .env.example .env    # Edit .env untuk kredensial DB dan Mailtrap Anda    `
4.  **Buat kunci aplikasi:**
       `sh    php artisan key:generate    `
5.  **Jalankan migrasi:**
       `sh    php artisan migrate    `
6.  **Bangun aset frontend:**
       `sh    npm run build    # atau untuk pengembangan: npm run dev    `
7.  **Jalankan aplikasi:**
       `sh    php artisan serve    `
8.  **Akses aplikasi:**
       - Formulir pendaftaran: [http://localhost:8000/](https://www.google.com/search?q=http://localhost:8000/)
       - Daftar pendaftar: [http://localhost:8000/registrations](https://www.google.com/search?q=http://localhost:8000/registrations)

## Penyiapan Notifikasi Email

  - Menggunakan [Mailtrap](https://mailtrap.io/) untuk pengembangan/pengujian.
  - Atur kredensial Mailtrap Anda di `.env`:
      ` env   MAIL_MAILER=smtp   MAIL_HOST=sandbox.smtp.mailtrap.io   MAIL_PORT=2525   MAIL_USERNAME=nama_pengguna_mailtrap_anda   MAIL_PASSWORD=kata_sandi_mailtrap_anda   MAIL_ENCRYPTION=null   MAIL_FROM_ADDRESS="email_anda@email.com"   MAIL_FROM_NAME="Pendaftaran Laravel"    `

## Menjalankan Tes

Jalankan semua tes unit dan fitur:

```sh
php artisan test
```

## Struktur Folder

  - `app/Http/Controllers/RegistrationController.php` — Logika formulir & penanganan data
  - `app/Models/Registration.php` — Model Eloquent
  - `app/Mail/RegistrationSuccess.php` — Mailable untuk notifikasi
  - `resources/views/register.blade.php` — UI formulir pendaftaran
  - `resources/views/registrations.blade.php` — UI daftar pendaftar
  - `resources/views/emails/registration_success.blade.php` — Template HTML email
  - `tests/Feature/RegistrationTest.php` — Tes fitur/unit

## Kredit

  - Dibangun dengan Laravel 10, Tailwind CSS 3, dan Mailtrap
  - Dikembangkan oleh [Abdul Kholik]

-----

Jangan ragu untuk melakukan fork dan menyesuaikannya untuk penggunaan Anda sendiri\!

Jika Anda menemukan kerentanan keamanan dalam Laravel, silakan kirim email ke Taylor Otwell melalui [taylor@laravel.com](mailto:taylor@laravel.com). Semua kerentanan keamanan akan segera ditangani.

## Lisensi

Kerangka kerja Laravel adalah perangkat lunak sumber terbuka yang dilisensikan di bawah [lisensi MIT](https://opensource.org/licenses/MIT).
