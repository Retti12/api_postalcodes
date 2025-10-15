# Postal Codes API Demo

Пример получения почтовых кодов через API [wildtracks.pro](https://wildtracks.pro).

## Использование

1. Установи свой токен в `postalcodes.php`:

```php
$token = 'YOUR_TOKEN_HERE';
```

2. Укажи ISO-код страны (например, `ru`, `us`, `ax`, `de`):

```php
$countryCode = 'ru';
```

3. Запусти скрипт:

```bash
php -S localhost:8000
```

**И открой** [http://localhost:8000/postalcodes.php](http://localhost:8000/postalcodes.php).

## Description of fields
- **country_code** – Country code ISO 3166-1 alpha-2  
- **postal_code** – Postal code  
- **place_name** – Place name  
- **latitude** – Estimated latitude (wgs84)  
- **longitude** – Estimated longitude (wgs84)  
- **accuracy** – Accuracy of lat/lng (1=estimated, 4=geonameid, 6=centroid)  
- **admin_name1** – Terrain / region name
