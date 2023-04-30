<?php

class Controller_ErrorPage extends Controller {
    function action_index()
	{	
		//передаем стандартную сраницу темплейт и главную индекс
		//темплейт это хедер и футер сайта
		$this->view->generate('errorpage_view.php', 'template_view.php');
	}
}