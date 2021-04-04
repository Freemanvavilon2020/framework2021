<?php

namespace application\controllers;

use application\core\Controller;
#Регистрация и вход
class AccountController extends Controller {

	public function loginAction() {

		$this->view->render('Вход');
	}

	public function registerAction() {
		$this->view->render('Регистрация');
	}

}
