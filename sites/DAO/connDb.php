<?php

class connDb {

	private $conn = 'mysql';
	private $database = 'dbase';
	private $user = 'root';
	private $pass = 'root';

	private function conn() {
		return new PDO("mysql:host={$this->conn};dbname={$this->database}", $this->user, $this->pass);
	}

	public function sqlExecute($sql) {
		$stmt = $this->conn()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}