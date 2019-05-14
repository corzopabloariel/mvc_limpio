<?php
class DefaultsController extends Controller {

	public function __construct() {}

	public function indexAction($param) {
		//die("ESTA TODO OK");
		Response::render("default/index");
	}

	/*
	 * LOGIN
	 * Petición Asincrona del Servidor
	 * JS
	 		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
					var done = JSON.parse(this.responseText);
		    }
		  };
		  xhttp.open("POST", action, true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send(data);
	 * /JS
	 */
	public function loginAction() {
		$user = $_REQUEST["user"];
		$pass = md5($_REQUEST["pass"]);
		$estado = true;

		$data = Cliente::findOneBy($user,"user");
		if($data) {
				if($data->_GET("clave") == $pass) {
						$selector = base64_encode("LOGIN: ".date("d.m.Y")." ".rand(0,7));
						$token = bin2hex(rand(0,31));
						$cookieValue = $selector.':'.base64_encode($token);
						$hashedToken = hash('sha256', $token);
						$timestamp = time() + (86400 * 14);
						setcookie('authToken', $cookieValue, $timestamp, "/");

						Session::logUser($data->_GET("id"));

						$log = new Logins();
						$log->_SET("login_selector",$selector);
						$log->_SET("login_token",$hashedToken);
						$log->_SET("login_expires",$timestamp);
						$log->_SET("id_user",$data->_GET("id"));//CUANDO SE HAGA EL MODULO USER
						$log->save();
				} else {
						$estado = false;
						$error = "Usuario o Clave incorrecta.";
				}
		} else {
			$estado = false;
			$error = "Usuario o Clave incorrecta.";
		}

		echo json_encode(Array("estado" => $estado,"error" => $error));
	}

	public function logoutAction() {
		Session::logOut();
		//tabla LOGINS
		header("Location: ".RUTA_HTTP."public/defaults/index");
	}
}
