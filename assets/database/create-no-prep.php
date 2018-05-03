<?php 		
public function create(){
		$obj_attributes = $this->attributes();//store each key in array as object attributes...(why didn't we just use $this->attribute...in order not to call several times)
		$sql = "INSERT INTO ".static::$table_name." (";
		$sql.= join(',',array_keys($obj_attributes)).")";
		$sql.= " VALUES ('".join("','",$obj_attributes)."')";
		// $sql = " INSERT INTO  articles "
		// $prep_sql = $this->connection->prepare($sql);
		// $prep_sql->execute();
		// echo($prep_sql);
		// echo($sql);
		return ($this->connection->query($sql)) ? true : false;
	}
	
  ?>