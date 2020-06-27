<?php 

namespace App;
use PDO;

class Controller {

	protected object $db;

	public function __construct() {

		try {

			$this->db = new PDO ("mysql:host=localhost;dbname=musikku", "root", "");
		} catch (Exception $e) {
			die ("error! " . $e->getMessage());
		}
	}
}