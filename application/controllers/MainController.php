<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller {

	public function indexAction() {

	    $Db = new Db;

        $vars = [
            'news' => 'result',
        ];
        $result = $this->model->getNews();

        $this->view->render('Главная страница',$vars);




	}
    public function createAction() {

        $this->view->render('Создать');
    }

    public function editAction() {
        $this->view->render('Редактировать');
    }

}