<?php
if(! function_exists('getUsername')){
  include './config/common.php';
}
  try{
    $dbh = getPDO();
    $stmt = $dbh->prepare("SELECT * FROM projects");
    $counter = 0;
    if($stmt->execute()){
      while(($row = $stmt->fetch()) && $counter < 6){
        if($counter % 3 == 0)
          echo "<tr/><tr class = \"projectrow\">";
          //create a small container for each project
          echo '<td id = ' . $row['id'] . '>
                  <h1>' . 
                      $row['title'] . 
                  '</h1>
                </td>';
          $counter ++;
      }
    }
  }
  catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
  }
