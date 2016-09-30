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
		if($row['first'] == $first && $row['last'] == $last) {
			echo "return true<br>";
			return true;
		} else {
			echo "return false<br>";
			return false;
		}
	}

}

//if the user exist, the user can't sign up
if(isExist($first, $last, $uid)) {
	echo "user exist";	
}

//else, user does not exist, the user can sign up
else{
	echo "user can sign up";
} 

//header("Location: index.php");

?>