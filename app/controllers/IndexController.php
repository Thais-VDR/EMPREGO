<?php

namespace App\controllers;

use Core\controller\Action;
use  App\database\Connection;
use App\model\ProdutoModel;

class IndexController extends Action
{
    public function index()
    {
        $this->render("index", "template_front1");
    }

    public function contato()
    {
        $this->render("contato", "template_front2");
    }

    public function login()
    {
        $this->view->login = isset($_GET['login']) ? $_GET['login'] : '';
        $this->render("login", "template_front2");
    }
}
