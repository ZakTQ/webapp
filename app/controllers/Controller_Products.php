<?php

class Controller_Products extends Controller {
    function action_index()
	{	
		//передаем стандартную сраницу темплейт и главную индекс
		//темплейт это хедер и футер сайта
		$this->view->generate('products_view.php', 'template_view.php');
	}
}