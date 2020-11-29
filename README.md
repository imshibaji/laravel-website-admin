
# Laravel Website Admin

## This Web Admin panel usable for the Enterprise application develop with Laravel 8

[![Latest Stable Version](https://poser.pugx.org/shibaji/admin/v)](//packagist.org/packages/shibaji/admin) [![Total Downloads](https://poser.pugx.org/shibaji/admin/downloads)](//packagist.org/packages/shibaji/admin) [![Latest Unstable Version](https://poser.pugx.org/shibaji/admin/v/unstable)](//packagist.org/packages/shibaji/admin) [![License](https://poser.pugx.org/shibaji/admin/license)](//packagist.org/packages/shibaji/admin) [![Monthly Downloads](https://poser.pugx.org/shibaji/admin/d/monthly)](//packagist.org/packages/shibaji/admin) [![Daily Downloads](https://poser.pugx.org/shibaji/admin/d/daily)](//packagist.org/packages/shibaji/admin)

This A beutiful web admin develop for **Laravel** Framework. It's have so many screens. components, managable menus, and auto dark modes included.

![Screen 1](https://github.com/imshibaji/my-web-admin/blob/master/src/screens/screen-1.png?raw=true)
<!-- ![Screen 2](https://github.com/imshibaji/my-web-admin/blob/master/src/screens/screen-2.png?raw=true) -->

# It's a simply used for your own laravel project

1. Installation process
    * First initiate or Create New Laravel Project
    * Then Open the project in terminal.
    * then put the command

```php
composer require shibaji/admin
```

1. Setup the database connection in your new laravel project.
2. Install Laravel UI package is already included with this Admin Panel.
3. Setup Admin panel by Admin Command

```php
php artisan admin:install
```

5. Create Auth scaffold using the artisan command

```php
php artisan ui:auth
```

6. Don't replace any preloaded resources.

```shell
The [auth/login.blade.php] view already exists. Do you want to replace it? (yes/no) [no]: no
```
```shell
The [auth/passwords/confirm.blade.php] view already exists. Do you want to replace it? (yes/no) [no]: no
```
```shell
The [auth/passwords/email.blade.php] view already exists. Do you want to replace it? (yes/no) [no]: no
```
Like this put `no` every required questions.

7. Now Setup the database connection in `.env` file

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<DB_NAME>
DB_USERNAME=<DB_USER>
DB_PASSWORD=<DB_PASSWORD>
```
8. Open Terminal from the project. And write the Codes.
```php
php artisan migrate
```
9. Open browser tab with this url `http://localhost:8000`.
10.  After open register an user.
11. After login go to `http://localhost:8000/admin`.

------------------

### If you can to create Module for Admin then doing this.
# Autoloading
By default, the module classes are not loaded automatically. You can autoload your modules using psr-4. For example:
```
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/"
    }
  }
}
```
**Tip: don't forget to run `composer dump-autoload` afterwards.**

Now you can see this admin. <br>
**Lets Enjoy!** :)


<!-- | Tables        | Are           | Cool  | -->
<!-- | ------------- |:-------------:| -----:| -->
<!-- | col 3 is      | right-aligned | $1600 | -->
<!-- | col 2 is      | centered      |   $12 | -->
<!-- | zebra stripes | are neat      |    $1 | -->
<!--  -->
<!-- * Item 1 -->
  <!-- * Nested Item 1 -->
  <!-- * Nested Item 2 -->
  <!-- * Nested Item 3 -->
<!--  -->
<!-- 1. List item -->
   <!-- * List item -->
   <!-- * List item -->
<!--  -->
<!-- 2. List item -->
