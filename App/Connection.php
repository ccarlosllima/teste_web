<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=web_db;charset=utf8",
				"carloslima",//seu usuário
				"root" //sua senha
			);

			return $conn;

		} catch (\PDOException $e) {
			echo 'Erro ao conectar ao banco de dados '.$e->getMessage();
		}
	}
}

?>




























