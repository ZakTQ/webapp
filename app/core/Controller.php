<?php

class Controller
{

    public $model;
    public $view;

    function __construct()
    {
        //создает обьект вью который принимает переменные вью и дату
        $this->view = new View();
    }

    function action_index()
    {
    }
}
