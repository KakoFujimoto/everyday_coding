<?php

namespace MyApp;

class Controller
{

    private $_erroes;

    public function __construct()
    {
        $this->_errors = new \stdClass();
    }

    protected function setErrors($key, $error)
    {
        $this->_errors->$key = $error;
    }

    public function getErrors($key)
    {
        return isset($this->_errors->$key) ? $this->_errors->$key : '';
    }

    protected function hasError()
    {
        return !empty(get_object_vars($this->_errors));
    }

    protected function isLoggedIn()
    {
        return isset($_SESSION['me']) && !empty($_SESSION['me']);
    }
}
