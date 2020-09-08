<?php

namespace MyApp\Controller;

class Signup extends \MyApp\Controller
{
    public function run()
    {
        if ($this->isLoggedIn()) {
            header('Location:' . SITE_URL);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->postProcess();
        }
    }
}
