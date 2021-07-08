<?php
require dirname(__FILE__).'/../DAO/connDb.php';
class listagem {

	private $msg = '';
	private $erro = true;

	public function index() {
		$file = dirname(__FILE__).'/../View/listagem.html';
		$handler = fopen($file, 'r');
		$content = fread($handler, filesize($file));

		echo $content;
	}

	public function lista() {
		$db = new connDb();

		$data = $db->sqlExecute("SELECT * FROM usuario");

		$json = array(
			'erro' => $this->erro,
			'msg' => $this->msg,
			'data' => $data
		);
		echo json_encode($json);
	}
}