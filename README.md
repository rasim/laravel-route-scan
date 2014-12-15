laravel-route-scan
==================

Extension for Laravel 4 Route Scan

Usage:

Route::scan("users","UserController");

controller function getAdd();

route name: users.add

or

Route::scan("users","UserController","admin");

controller function getAdd();

route name: admin.users.add
