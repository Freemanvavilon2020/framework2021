<?php

namespace application\models;

use application\core\Model;
#Получаем статьи
class Main extends Model {

	public function getNews() {
		$result = $this->db->row('SELECT * FROM articles');
		return $result;
	}

}
