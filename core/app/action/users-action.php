<?php 
var_dump($_POST);
if (!isset($_SESSION["user_id"])) Core::redir("./");

if(isset($_GET["opt"]) && $_GET["opt"] == "add"){

	if(isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['username']) and 
		isset($_POST['password']) and isset($_POST['email'])){
		$u = new UserData();

		$u->nombre = $_POST["nombre"];
		$u->apellido = $_POST["apellido"];
		$u->username = $_POST["username"];
		$u->password = sha1(md5($_POST["password"]));
		$u->email = $_POST["email"];

		$u->kind = 1;
		$u->status = 1;

		$u->add();
		Core::redir("./?view=users&opt=all");
		Core::addToastr("success","Usuario agregado satisfactoriamente");
		
	}else{
		echo "NO";
		Core::redir("./?view=users&opt=add");
		Core::addToastr("error","Error al agregar usuario");
	}
}elseif(isset($_GET["opt"]) && $_GET["opt"] == "update"){
	$u = UserData::getById($_POST['user_id']);

	$u->nombre = $_POST["nombre"];
	$u->apellido = $_POST["apellido"];
	$u->username = $_POST["username"];
	$u->password = sha1(md5($_POST["password"]));
	$u->email = $_POST["email"];

	$u->update();

	if(isset($_POST["password"]) && $_POST["password"]!=""){
		$u->password = sha1(md5($_POST["password"]));
		$u->updatePass();
	}
	//Core::redir("./?view=users&opt=all");
	Core::addToastr("success","Usuario actualizado satisfactoriamente");
}

 ?>
