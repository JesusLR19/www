<?php
class UserData extends Extra{

	public static $tablename = "user";
	public $extra_fields_strings;
	public $extra_fields;

	public function __construct(){
		$this->extra_fields = array();
		$this->extra_fields_strings = array();
		$this->nombre = "";
		$this->username = "";
		$this->password = "";
		$this->status = "";
		$this->lastname = "";
		$this->kind = 1;
	}

	public static function getByID($id){
		$sql = "select * from user where id=".$id;
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}

	public static function getAllbyKind($kind = 1){
		$sql = "select * from user where kind =" .$kind;
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}

	public function add(){
		$sql = "insert into user (nombre,apellido,username,password,email,kind,status) values (\"$this->nombre\",\"$this->apellido\",\"$this->username\",\"$this->password\",\"$this->email\",$this->kind,$this->status)";
		return Executor::doit($sql);

	}
	public function update(){
		$sql = "update user set nombre=\"$this->nombre\",apellido=\"$this->apellido\",username=\"$this->username\",email=\"$this->email\",kind=$this->kind,status=$this->status where id=$this->id";
		Executor::doit($sql);
	}
	public function updateOne($k,$v){
		$sql = "update user set $k=\"$v\" where id=$this->id";
		Executor::doit($sql);
	}
}



?>