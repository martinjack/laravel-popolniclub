<?php

namespace PopolniClubLaravel;

use PopolniClub\Pophone;

/**
 *
 * Class PopolniClubLaravel
 *
 * @package PopolniClubLaravel
 *
 */
class PopolniClubLaravel extends Pophone
{

    public function __construct($login, $password, $sandbox = false)
    {

        ##
        # SET CONFIG
        #
        $login    = config('popolniclub-laravel.login') === $login ? $login : config('popolniclub-laravel.login');
        $password = config('popolniclub-laravel.password') === $password ? $password : config('popolniclub-laravel.password');
        $sandbox  = config('popolniclub-laravel.sandbox') === $sandbox ? $sandbox : config('popolniclub-laravel.sandbox');
        #
        parent::__contruct(

            $login,
            $password,
            $sandbox

        );

        return $this
            ->setLogin($login)
            ->setPassword($password)
            ->setSandbox($sandbox);

    }

}
