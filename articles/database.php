
<?php
include 'database/config.php'; 
try {
	
$handler = new PDO(DSN,DB_USER,DB_PASSWORD);
$handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getCode();
}
 ?>