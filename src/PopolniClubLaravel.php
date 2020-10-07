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

    /**
     *
     * INIT
     *
     * @param STRING $login
     * @param STRING $password
     * @param BOOLEAN $sandbox
     *
     * @return VOID
     *
     */
    public function __construct($login = null, $password = null, $sandbox = false)
    {

        ##
        # SET CONFIG
        #
        $login    = config('popolniclub-laravel.login') === $login ? $login : config('popolniclub-laravel.login');
        $password = config('popolniclub-laravel.password') === $password ? $password : config('popolniclub-laravel.password');
        $sandbox  = config('popolniclub-laravel.sandbox') === $sandbox ? $sandbox : config('popolniclub-laravel.sandbox');
        #
        parent::__construct(

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
