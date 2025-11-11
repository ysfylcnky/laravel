# Laravel Projesi (Docker’sız Kurulum)

Bu proje, Laravel’i Docker kullanmadan çalıştırmak için hazırlanmıştır.

## Kurulum Adımları

1. **Projeyi Klonla**
```bash
git clone https://github.com/kullanici/proje-adi.git
cd proje-adi

2. **Bağımlılıkları Yükle**
'''bash
composer install
npm install
npm run dev

3. **.env Dosyasını oluştur**
'''bash
cp .env.example .env

4. **.env Dosyasında Veritabanı Ayarlarını Yap**
'''bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

5. **Veritabanını Oluştur ve Migrationları Çalıştır**
'''bash
php artisan migrate

6. **Sunucuyu Başlat**
'''bash
php artisan serve

7. **Tarayıcıda Aç**
'''bash
http://127.0.0.1:8000
