<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;
use application\lib\Pagination;

class AdminController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function indexAction() {


        $this->view->render('Все пользователи');
    }
   #Проверяем логин
    public function loginAction() {
        if (isset($_SESSION['admin'])) {
            $this->view->redirect('admin');
        }
        if (!empty($_POST)) {
            if (!$this->model->loginValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('admin');
        }
        $this->view->render('Вход');
    }

    public function logoutAction() {
        unset($_SESSION['admin']);
        $this->view->redirect('admin/login');

    }

	public function registerAction() {
		$this->view->render('Регистрация');
	}

    public function creatuserAction() {


        if (!empty($_POST)) {
            if (!$this->model->creatuserValidate($_POST, 'creatuser')) {
                $this->view->message('error', $this->model->error);
            }
            $this->model->creatUser($_POST);

            $this->view->message('success', 'Ученик добавлен');
        }
        $this->view->render('Добавить ученика');
    }

    public function edituserAction() {

        $this->view->render('Редактировать');
    }

    public function deletuserAction() {

        $this->view->render('Удалить');
    }

}
