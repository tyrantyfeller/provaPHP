<?php
require dirname(__FILE__).'/../DAO/connDb.php';
class login {

	private $msg = '';
	private $erro = true;

	public function index() {
		$file = dirname(__FILE__).'/../View/login.html';
		$handler = fopen($file, 'r');
		$content = fread($handler, filesize($file));
		echo $content;
	}

	public function auth() {
		$db = new connDb();

		$data = $db->sqlExecute("SELECT * FROM usuario WHERE tx_email = '{$_POST['email']}' AND tx_senha = '{$_POST['pass']}'");

		if ($data) {
			session_start();

			$_SESSION['id_usuario'] = $data[0]['id_usuario'];
			$_SESSION['tx_nome'] = $data[0]['tx_nome'];
			$_SESSION['tx_usuario'] = $data[0]['tx_usuario'];
			$_SESSION['tx_email'] = $data[0]['tx_email'];
			$_SESSION['id_grupo'] = $data[0]['id_grupo'];

			$this->erro = false;
		} else {
			$this->msg = 'Usuário não encontrado.';
		}

		$json = array(
			'erro' => $this->erro,
			'msg' => $this->msg
		);

		echo json_encode($json);
	}
}