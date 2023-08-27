<p align="center" style="display:inline"/><a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
    <img src="https://brandslogos.com/wp-content/uploads/images/large/python-logo-1.png" width="400">
</a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Running a Python Script in Laravel 9

Running a Python script step by step within a Laravel application involves setting up a Laravel route, a controller, and then using Laravel's features to execute the Python script and display the results.

### Step 1 :  Clone the Git Project

Clone the repository by executing the following command in your terminal:
```
git clone https://github.com/sanwarhossainkhan/laravel-python.git

```
### Step 2 : Navigate to the Project Directory

Change to the project directory using the command:
```
cd laravel-python

```

### Step 3 : Install Dependencies with Composer

Run the following command to install project dependencies using Composer:
```
composer install

```

### Step 4 : Modify the Python Controller

Navigate to the **PythonController.php** file located at **App\Http\Controllers\PythonController.php**.

Update the **$output** line in the **callPythonScript** method to use the correct path to your Python script:
```
$output = shell_exec("python path_to_your_python_script \"$name\" \"$age\"");

```
### Step 5 : Clear Optimize Cache

Clear the optimize cache with the following command:
```
php artisan optimize:clear

```

### Step 6 :  Start the Server

Start a development server with the command:
```
php artisan serve

```

### Step 7 : Access the Python Script

Access the Python script by navigating to:
```
http://127.0.0.1:8000/call-python-script/typetext/age
```

### Step 8 :  Observe the Output

You should see the output of the Python script:
```
"Hello, sanowar! You are 21 years old."

```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
