# Laravel Projesi (Docker’sız Kurulum)

## Kurulum Adımları

1. Projeyi klonla:
   ```bash
   git clone https://github.com/kullanici/proje-adi.git
   cd proje-adi


2. Gerekli bağımlılıkları yükle:
	composer install
	npm install && npm run dev

	
3. Ortam dosyasını oluştur:
	cp .env.example .env


4. .env dosyasında veritabanı ayarlarını yap (örnek: MySQL):
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=laravel
	DB_USERNAME=root
	DB_PASSWORD=

	
5. Veritabanını oluştur ve migrate et:
	php artisan migrate


6. Sunucuyu Başlat:
	php artisan serve


7. Tarayıcıda aç:
	http://127.0.0.1:8000

