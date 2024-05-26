# gis_potensi_sawah
Sistem informasi geografis (GIS) Potensi Persawahan menggunakan Framework Laravel 9, Livewire, Leaflet, Mapbox.

# Requirement
- PHP >= v8.2
- Composer
- NPM / Node
- Database
# How to install
    git clone https://github.com/BintangDiLangit/gis-potensi-sawah.git
    cd gis-potensi-sawah
    composer update --no-scripts
    npm install
    cp .env-example .env
    npm run dev
    php artisan serve

 ## Note
 - When ```cp .env-example .env```, then create the database and put to .env file in your project, ex. :
```
DB_PORT=3306
DB_DATABASE=potensisawah
DB_USERNAME=root
DB_PASSWORD=
```

 ## Thanks
