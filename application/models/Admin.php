<?php

namespace application\models;

use application\core\Model;



class Admin extends Model {

	public $error;

	public function loginValidate($post) {
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}
	 #Валидация формы создания пользователя
    public function creatuserValidate($post) {
        $nameLen = iconv_strlen($post['name']);
        $firstnameLen = iconv_strlen($post['firstname']);
        $patronymicLen = iconv_strlen($post['patronymic']);
        if ($nameLen < 3 or $nameLen > 100) {
            $this->error = 'Имя должно содержать от 3 до 100 символов';
            return false;
        } elseif ($firstnameLen < 3 or $firstnameLen > 100) {
            $this->error = 'Фамилия должно содержать от 3 до 100 символов';
            return false;
        } elseif ($patronymicLen < 10 or $patronymicLen > 5000) {
            $this->error = 'Отчество должнен содержать от 10 до 5000 символов';
            return false;
        }

        return true;
    }
 #Создаем пользователя
    public function creatUser($post) {
        $params = [
            'id' => '',
            'name' => $post['name'],
            'firstname' => $post['firstname'],
            'patronymic' => $post['patronymic'],
            'bday' => $post['bday'],
        ];
        $this->db->query("INSERT INTO users VALUES (:id, :name, :firstname, :patronymic, :bday)", $params);

    }



}
