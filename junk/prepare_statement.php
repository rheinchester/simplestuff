<?php
	$fields = "classname,question,a,b,c,d,answer,duration,course";
	$sql = "INSERT INTO cbt_questions (classname,question,a,b,c,d,answer,duration,course) VALUES (:classname,:question,:a,:b,:c,:d,:answer,:duration,:course)";
	
	$statement = $database->connection->prepare($sql);
	
	foreach (explode(',',$fields) as  $field) {
		($field!='duration') ? 
			$statement->bindParam(":$field", $$field, PDO::PARAM_STR) :
			$statement->bindParam(":$field", $$field, PDO::PARAM_INT);
	}

    $statement->execute();

?>