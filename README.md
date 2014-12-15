 Laravel 4 Route Scan
==================

Extension for Laravel 4 Route Scan


[![Total Downloads](https://poser.pugx.org/rasim/scan/downloads.svg)](https://packagist.org/packages/rasim/scan) 


Installation
----

* In composer.json;

    ```json
    "rasim/scan": "dev-master"
    ```
    
* In app.php

    ```php
    'Rasim\Scan\ScanServiceProvider',
    ```
    
    

Usage
----
```php
Route::scan("users","UserController");
```

controller function getAdd();

route name: users.add

or

```php
Route::scan("users","UserController","admin");
```
controller function getAdd();

route name: admin.users.add
