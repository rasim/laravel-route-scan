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

```shell
example controller -> function getAdd();
```

```shell
route name: users.add
```

Or with prefix usage:

```php
Route::scan("users","UserController","admin");
```

```shell
example controller -> function getAdd();
```

```shell
route name: admin.users.add
```
