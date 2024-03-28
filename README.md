<p align="center" >
  <b>POINT UTAMA</b>
</p>

---

> #### APA ITU LOGGING?
> - Logging merupakan standar industri untuk memantau informasi yang terjadi di aplikasi.
> - Logging melibatkan pengiriman informasi kejadian ke berkas log, database, atau tempat penyimpanan lainnya.
>
> #### MONOLOG
> - Monolog adalah library logging yang populer di PHP, sering digunakan di Laravel.
> - Proyek PHP dapat menggunakan Monolog untuk melakukan logging dengan mudah dan fleksibel.
>
> #### HANDLER
> - Handler dalam logging PHP bertugas mengirim aktivitas log ke target yang ditentukan, seperti file, konsol, database, atau email.
> - Monolog menyediakan banyak handler yang sudah disiapkan, seperti stream handler yang dapat mengirim log ke berbagai target, seperti konsol atau file.
> - Handler dalam logging PHP bertugas mengirim aktivitas log ke target yang ditentukan, seperti file, konsol, database, atau email.
> - Dengan menggunakan metode pushHandler, kita dapat menambahkan handler ke logger untuk mengirim log ke berbagai target sekaligus.
>
> Berikut kode menambah handler :
>
> <img width="482" alt="Cuplikan layar 2024-03-28 131209" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/5054aa39-d11f-437b-a225-d6e255e345ce">

---
> #### LOGGER
> - Logger merupakan class yang digunakan untuk melakukan logging
> - Untuk membuat object logger sangat mudah, kita cukup gunakan nama logger yang kita inginkan di parameter constructor nya
>
> Berikut kode membuat logger :
>
> <img width="376" alt="Cuplikan layar 2024-03-28 131253" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/43178f94-3d2d-462d-b16a-62747b1fbbc4">
>
> Berikut kode membuat logger dengan nama :
>
> <img width="326" alt="Cuplikan layar 2024-03-28 131319" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/c4c0b499-9d31-40d2-8c19-44aeb76025e1">
>
> #### LOGGING
> - Metode ```info``` digunakan untuk melakukan logging dalam PHP dengan Monolog, memungkinkan pengiriman log event ke berbagai handler yang telah ditentukan.
>
> Berikut kode melakukan logging :
>
> <img width="467" alt="Cuplikan layar 2024-03-28 131407" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/3ccb7452-af55-4869-b0bf-79ba553c91eb">
---
> #### LEVEL
> - Monolog mendukung banyak level log, dimana setiap level memiliki tingkat kepentingan yang berbeda-beda, seperti debug, info, error, dll.
> - Saat menggunakan stream handler, secara default semua log akan dikirimkan ke targetnya, namun kita dapat menentukan level mana yang ingin ditampilkan.
>
> Berikut kode level :
>
> <img width="513" alt="Cuplikan layar 2024-03-28 131500" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/bbae0d5b-cb51-47c2-860b-598b8011f145">
>
> Berikut kode streamhandler level :
>
> <img width="515" alt="Cuplikan layar 2024-03-28 131644" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/a081e8d0-9d33-4f0f-97b9-906af108bdee">
---
> #### CONTEXT
> - Context dalam logging memungkinkan penambahan informasi tambahan, seperti data pengguna, secara otomatis tanpa perlu membuat format pesan manual.
>
> Berikut kode context :
>
> <img width="483" alt="Cuplikan layar 2024-03-28 131717" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/33999cfd-e05f-46e5-931f-403a5e71be01">
---
> #### PROCESSOR
> - Processor adalah cara lain untuk menambahkan informasi ke log event secara otomatis tanpa perlu melakukan manual, yang dapat disesuaikan dengan kebutuhan pengguna.
>
> Berikut kode processor :
>
> <img width="385" alt="Cuplikan layar 2024-03-28 131922" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/8a6220f4-5fc0-4c88-830b-efbc917ec2e7">
---
> #### MONOLOG PROCESSOR
> - Monolog menyediakan berbagai implementasi dari prosesor interface yang dapat digunakan untuk menambahkan informasi tambahan secara umum ke semua log event.
>
> Berikut kode monolog processor :
>
> <img width="393" alt="Cuplikan layar 2024-03-28 132003" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/bdd81399-9315-4b74-88ba-a7d081e268ad">
---
> ### RESET HANDLER DAN PROCESSOR
>
> #### RESSETABLE LOGGER
> - Metode reset() dapat digunakan pada Logger untuk melakukan reset terhadap semua handler dan processor yang digunakan.
>
> Berikut kode reset method di logger :
>
> <img width="347" alt="Cuplikan layar 2024-03-28 132150" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/9c184dcc-8eb8-4804-997c-6e7cc8adf9bf">
>
> Berikut kode reset logger :
>
> <img width="484" alt="Cuplikan layar 2024-03-28 132253" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/d43b8c39-3483-4bb4-8aee-9cebd5e09b77">
---
> #### FORMATTER
> - Dengan menggunakan formator, kita dapat mengatur format dari log event sebelum dikirim ke destinasi, seperti konsol atau file.
> - Monolog menyediakan berbagai jenis formator yang dapat digunakan tanpa perlu membuat sendiri, kecuali jika format khusus diperlukan.
>
> Berikut kode monolog formatter :
>
> <img width="521" alt="Cuplikan layar 2024-03-28 132320" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/b2e184e3-73cb-4d44-a5cf-66e01b364854">
---
> #### ROTATING FILE HANDLER
> - Rotating file handler berguna untuk menghindari masalah ukuran file log yang terlalu besar dengan secara otomatis membuat file log baru setiap harinya dan dapat menghapus file log yang lama sesuai konfigurasi.
> - Pembuatan file log baru oleh rotating file handler dapat disesuaikan dengan berbagai parameter seperti jumlah file yang ingin disimpan dan level logging yang diinginkan.
>
> Berikut kode rotating file handler :
>
> <img width="532" alt="Cuplikan layar 2024-03-28 132341" src="https://github.com/weyndraig14/belajar-php-logging/assets/162102805/3192ba43-80c6-482c-8a5e-910a877b3e49">


<p align="center" >
  <b>KESIMPULAN</b>
</p>

> - Logging penting dalam pengembangan aplikasi untuk mencatat informasi kejadian.

















