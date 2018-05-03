<?php
    public function preparedCreate(){
            
            $obj_attributes_array = $this->attributes();

			$obj_attributes_array_keys = array_keys($obj_attributes_array);
			
			$sql = "INSERT INTO ".static::$table_name;
			$sql .= " (".join(',',$obj_attributes_array_keys).") ";
			$sql .= "VALUES (:".join(",:",$obj_attributes_array_keys).")";
            
            $statement = $this->connection->prepare($sql);
            
            $statement->execute($obj_attributes_array);
	
	
        }
?>