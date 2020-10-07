# Description

[![Latest Stable Version](https://poser.pugx.org/jackmartin/laravel-popolniclub/v)](//packagist.org/packages/jackmartin/laravel-popolniclub) [![Total Downloads](https://poser.pugx.org/jackmartin/laravel-popolniclub/downloads)](//packagist.org/packages/jackmartin/laravel-popolniclub) [![License](https://poser.pugx.org/jackmartin/laravel-popolniclub/license)](//packagist.org/packages/jackmartin/laravel-popolniclub)

Laravel package for working with API [PopolniClub](https://popolni.club/)

> Read this in other language: [English](README.en.md), [Русский](README.md), [Український](README.ua.md)

> [Wiki - Description of the library](https://github.com/martinjack/popolniclub/wiki)

> [PopolniClub API Library](https://github.com/martinjack/popolniclub)

# Documentation

[API documentation](https://popolni.club/api.pdf)

# Requirements

* PHP 5.6 or higher
* Composer
* Laravel
* PopolniClub

# Composer
```bash
composer require jackmartin/laravel-popolniclub
```

## Laravel setting

After installing the package using composer, register the package service in the file bootstrap/app.php:
```php
PopolniClubLaravel\PopolniClubServiceProvider::class
```

Then to quickly call the class of the package, add an alias in the same file:
```php
'PopolniClubLaravel' => PopolniClubLaravel\Facades\PopolniClubFacade::class,
```

## Package settings

### Copy settings file
```sh
php artisan vendor:publish
```
Select Tag: popolniclub-laravel-config

or
```sh
php artisan vendor:publish --provider="PopolniClubLaravel\PopolniClubServiceProvider" --tag="popolniclub-laravel-config"
```

# Package configuration

### Login API.
#### login
```php
'login'           => ''
```
### Password API.
#### password
```php
'password'        => ''
```
### Sandbox. Default: false
#### sandbox
```php
'sandbox'         => false
```

# Basic methods API

1. Create payment
    * [sendPayment](https://github.com/martinjack/popolniclub/blob/master/README.en.md#sendpayment---example-1)
2. Payment status
    * [statusPayment](https://github.com/martinjack/popolniclub/blob/master/README.en.md#statuspayment---example-1)
3. Current balance
    * [currentBalance](https://github.com/martinjack/popolniclub/blob/master/README.en.md#currentbalance)

# Examples

### sendPayment()
```php
print_r(

    \PopolniClubLaravel::setTransactionID()
        ->setSumm(1)
        ->setPhone('380000000000')
        ->setTemplateID()
        ->addPayment()
        ->sendPayment()
        ->getData()

);
```

### statusPayment()
```php
print_r(

    \PopolniClubLaravel::addTransaction(1000000001)->statusPayment()->getData()

);
```

### currentBalance()
```php
print_r(

    \PopolniClubLaravel::currentBalance()->getData()
    // \PopolniClubLaravel::currentBalance()->balance()
    // \PopolniClubLaravel::currentBalance()->balance(true)
    // \PopolniClubLaravel::currentBalance()->credit()

);
```