<?php
include "./config/common.php";
$pdh = getPDO();
$date = "2011-03-20";
$title = $_POST["title"];
$start_date = $_POST["startDate"];
$end_date = $_POST["endDate"];
$description = $_POST["description"];
$sql = $pdh->prepare("INSERT INTO projects (title, start_date, end_date, description) VALUES (?,?,?,?)");
if($sql->execute([$title,$start_date,$end_date,$description])) {
  echo "New Record Successfully added!!";
}
?>

<html>
	<body>
		<p>I AM RUNNING PHP CODE !!!</p>
	</body>
</html>