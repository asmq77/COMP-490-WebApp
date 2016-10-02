<?php
  include './config/common.php';
  $dbh;
  $row;
  $exists = false;
  try{
    $dbh = getPDO();

    $stmt = $dbh->prepare("SELECT 
                            users.first AS first, 
                            users.last AS last, 
                            projects.title AS title, 
                            projects.start_date AS start_date, 
                            projects.end_date AS end_date, 
                            projects.description AS description 
                           FROM 
                            projects 
                           INNER JOIN 
                            users 
                           ON 
                            projects.proposerid = users.id
                           WHERE 
                            projects.id = ?
                            ");
    if(isset($_GET['pid']) && $stmt->execute([$_GET['pid']])){
      $row = $stmt->fetch();
      $exists = true;
    }
  }
  catch(PDOException $ex){
      
  }
?>
<?php if($exists && isset($row)):?>
<!-- if the project exists, display it on the page -->
<div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless"><?php echo $row['title']?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row"> 
      <div class="col-sm-1"> 
      </div>       
        <div class="col-sm-10">   
          <label class="label" for="example5"><big>Proposed by:<?php echo $row['first'] . " " . $row['last']?></big></label>
          <label class="label" for="example5"><?php echo $row['start_date'];?> - <?php echo $row['end_date'];?> </label>
            <p>
              <?php echo $row['description'];?>
            </p>
        </div>
        <div class="col-sm-1"> 
      </div>
      </div>
    </div>
</div>

<?php else:?>
<!-- Otherwise, Display an error message -->
<p>No projects to display.</p>
<?php endif;?>
