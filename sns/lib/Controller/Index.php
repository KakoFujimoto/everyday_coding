<?php

namespace MyApp\Controller;

// var_dump(SITE_URL);
// exit();

class Index extends \MyApp\Controller
{
    public function run()
    {
        if (!$this->isLoggedIn()) {
            header('Location:' . SITE_URL . '/everyday_coding/sns/public_html/login.php');
            exit;
        }
        $userModel = new \MyApp\Model\User();
        $this->setValues('users', $userModel->findAll());
    }
}
