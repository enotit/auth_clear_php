<?php
/*
 * This code was written by enotit.
 * distribution/modification/copying is free (but please mention me).
 * t.me/enotit 9.2022
 *
 */

namespace Passing\Classes;
use Passing\DBHandler;
class User
{
    private string $name;
    private ?string  $session;
    private bool $isDriver;

    /**
     * @param string $name user's name
     * @param string $session actual session
     * @param bool $isDriver
     * or nothing
     */
    public function __construct(){
        $args = func_get_args();
        if (count($args) === 3){
            $this->name = $args[0];
            $this->session = $args[1];
            $this->isDriver = $args[2];
        } else {
            $this->name = null;
            $this->session = false;
            $this->isDriver = false;
        }
    }

    public function init(){

    }

    public function isAuth() : bool
    {
        return $this->session !== null;
    }

    public function getName() : string
    {
        return $this->name ?? "none";
    }
}

;