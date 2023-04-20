<?php

class Controller_Admin extends Controller
{
    function action_index()
	{	
		//передаем стандартную сраницу темплейт и главную индекс
		//темплейт это хедер и футер сайта
		$this->view->generate('admin_view.php', 'template_view.php');
	}
}
