<?php

include './config/common.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

function isExist($first, $last, $uid) {
	$dbh = getPDO();
	$stmt = $dbh->query("SELECT * FROM users");
	
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		if(($row['first'] == $first && $row['last'] == $last) || $row['uid'] == $uid ) {
			echo "return true<br>";
			return true;
		} else {
			echo "return false<br>";
			return false;
		}
	}
}

//if the user exist, the user cannot sign up
if(isExist($first, $last, $uid)) {
	echo "user exist";	
}
	
//if user is not exist, the user can sign up
else{
	echo "user signed up";
	$dbh = getPDO();
	$stmtTwo = $dbh->prepare ("INSERT INTO users (first, last, uid, pwd) 
	VALUES (?, ?, ?, ?)");
	$stmtTwo->execute(array("$first", "$last", "$uid", "$pwd"));
} 

//header("Location: index.php");

?>