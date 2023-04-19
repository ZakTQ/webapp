<?php

class Controller_Main extends Controller {
    function action_index()
	{	
		//передаем стандартную сраницу темплейт и главную индекс
		//темплейт это хедер и футер сайта
		$this->view->generate('main_view.php', 'template_view.php');
	}
}