<?php

include './config/common.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$dbh = getPDO();
$stmt = $dbh->query("SELECT * FROM users");
	
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	if($row['uid'] == $uid && $row['pwd'] == $pwd) {
		echo "ID and password match";
	} else {
		echo "ID and password incorrect";
	}
}

//header("Location: login.php");

?>