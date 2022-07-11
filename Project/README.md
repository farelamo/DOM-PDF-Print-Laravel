# Pre-requisite

1. install composer
```
composer install
```

2. install DOMPDF
```
composer require barryvdh/laravel-dompdf
```

3. Laravel DOMPDF Setting in config/app.php
    - providers 
        - Barryvdh\DomPDF\ServiceProvider::class,
    - aliases
        - 'PDF' => Barryvdh\DomPDF\Facade::class,