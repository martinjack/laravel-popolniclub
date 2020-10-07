# Опис

[![Latest Stable Version](https://poser.pugx.org/jackmartin/laravel-popolniclub/v)](//packagist.org/packages/jackmartin/laravel-popolniclub) [![Total Downloads](https://poser.pugx.org/jackmartin/laravel-popolniclub/downloads)](//packagist.org/packages/jackmartin/laravel-popolniclub) [![License](https://poser.pugx.org/jackmartin/laravel-popolniclub/license)](//packagist.org/packages/jackmartin/laravel-popolniclub)

Laravel пакет для роботи з API [PopolniClub](https://popolni.club/)

> Read this in other language: [English](README.en.md), [Русский](README.md), [Український](README.ua.md)

> [Wiki - Опис роботи бібліотеки](https://github.com/martinjack/popolniclub/wiki)

> [PopolniClub API Library](https://github.com/martinjack/popolniclub)

# Документація

[API documentation](https://popolni.club/api.pdf)

# Вимоги

* PHP 5.6 або вище
* Composer
* Laravel
* PopolniClub

# Composer
```bash
composer require jackmartin/laravel-popolniclub
```

## Laravel налаштування

Після установки пакета за допомогою composer, зареєструйте сервіс пакета в файлі bootstrap/app.php:
```php
PopolniClubLaravel\PopolniClubServiceProvider::class
```

Потім для швидкого виклик класу пакета, додайте псевдонім в цей же файлі:
```php
'PopolniClubLaravel' => PopolniClubLaravel\Facades\PopolniClubFacade::class,
```

## Налаштування параметрів пакета

### Копіювання файлу налаштувань
```sh
php artisan vendor:publish
```
Вибираємо Tag: popolniclub-laravel-config

або
```sh
php artisan vendor:publish --provider="PopolniClubLaravel\PopolniClubServiceProvider" --tag="popolniclub-laravel-config"
```

# Конфігурація пакета

### Логін API.
#### login
```php
'login'           => ''
```
### Пароль API.
#### password
```php
'password'        => ''
```
### Пісочниця. За замовчуванням: false
#### sandbox
```php
'sandbox'         => false
```

# Основні методи API

1. Створити платіж
    * [sendPayment](https://github.com/martinjack/popolniclub/blob/master/README.ua.md#sendpayment---%D0%BF%D1%80%D0%B8%D0%BA%D0%BB%D0%B0%D0%B4-1)
2. Статус платежу
    * [statusPayment](https://github.com/martinjack/popolniclub/blob/master/README.ua.md#statuspayment---%D0%BF%D1%80%D0%B8%D0%BA%D0%BB%D0%B0%D0%B4-1)
3. Поточний баланс
    * [currentBalance](https://github.com/martinjack/popolniclub#currentbalance)

# Примеры

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