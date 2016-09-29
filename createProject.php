<?php
include "./config/common.php";
$pdh = getPDO();
$date = "2011/03/20"; 
$date = explode("/", $date);
$datetime = new DateTime(); 
$datetime->setDate($date[0], $date[1], $date[2]); 
$sql = $pdh->prepare("INSERT INTO projects (title, start_date, end_date, description) VALUES (?,?,?,?)");
if($sql->execute(["Asad's Project",$datetime,$datetime,"Hello World"])) {
	echo "New Record Successfully added!!";
}
?>

<html>
	<body>
		<p>I AM RUNNING PHP CODE !!!</p>
	</body>
</html>