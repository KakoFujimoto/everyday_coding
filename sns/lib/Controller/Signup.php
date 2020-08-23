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

    protected function postProcess()
    {
        try {
            $this->_validate();
        } catch (\Myapp\Exception\InvalidEmail $e) {
            echo $e->getMessage();
            exit;
        } catch (\Myapp\Exception\InvalidPassword $e) {
            echo $e->getMessage();
            exit;
        }

        echo 'success!';
        exit;
    }

    private function _validate()
    {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new \MyApp\Exception\InvalidEmail();
        }
        if (!preg_match('/\A[a-zA-Z0-9]+\z/', $_POST['password'])) {
            throw new \MyApp\Exception\InvalidPassword();
        }
    }
}
