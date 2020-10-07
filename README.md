# Описание

[![Latest Stable Version](https://poser.pugx.org/jackmartin/laravel-popolniclub/v)](//packagist.org/packages/jackmartin/laravel-popolniclub) [![Total Downloads](https://poser.pugx.org/jackmartin/laravel-popolniclub/downloads)](//packagist.org/packages/jackmartin/laravel-popolniclub) [![License](https://poser.pugx.org/jackmartin/laravel-popolniclub/license)](//packagist.org/packages/jackmartin/laravel-popolniclub)

Laravel пакет для работы с API [PopolniClub](https://popolni.club/)

> Read this in other language: [English](README.en.md), [Русский](README.md), [Український](README.ua.md)

> [Wiki - Описание работы библиотеки](https://github.com/martinjack/popolniclub/wiki)

> [PopolniClub API Library](https://github.com/martinjack/popolniclub)

# Документация

[API documentation](https://popolni.club/api.pdf)

# Требования

* PHP 5.6 или выше
* Composer
* Laravel
* PopolniClub

# Composer
```bash
composer require jackmartin/laravel-popolniclub
```

## Laravel настройка

После установки пакета с помощью composer, зарегистрируйте сервис пакета в файле bootstrap/app.php:
```php
PopolniClubLaravel\PopolniClubServiceProvider::class
```

Затем для быстрого вызов класса пакета, добавьте псевдоним в этот же файле:
```php
'PopolniClubLaravel' => PopolniClubLaravel\Facades\PopolniClubFacade::class,
```

## Настройка параметров пакета

### Копирование файла настроек
```sh
php artisan vendor:publish
```
Выбираем Tag: popolniclub-laravel-config

или
```sh
php artisan vendor:publish --provider="PopolniClubLaravel\PopolniClubServiceProvider" --tag="popolniclub-laravel-config"
```

# Конфигурация пакета

### Логин API.
#### login
```php
'login'           => ''
```
### Пароль API.
#### password
```php
'password'        => ''
```
### Песочница. По умолчанию: false
#### sandbox
```php
'sandbox'         => false
```

# Основные методы API

1. Создать платёж
    * [sendPayment](https://github.com/martinjack/popolniclub#sendpayment---%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80-1)
2. Статус платежа
    * [statusPayment](https://github.com/martinjack/popolniclub#statuspayment---%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D1%80-1)
3. Текущий баланс
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