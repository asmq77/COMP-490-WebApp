<?php
 
session_start();

if(isset($_SESSION['id'])) {
		//put stored seession info local PHP variable
	$uid = $_SESSION['id'];
	$usname = $_SESSION['username'];
	$result = "Test variables: <br /> Username: ".$usname. "<br /> Id:  ".$uid;	
} else {
	$result = "You are not logged in yet";
}

?>

 
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $usname ;?>TEST</title>
</head>
<body>
	<?php 
	echo $result;
	?>
</body>
</html>