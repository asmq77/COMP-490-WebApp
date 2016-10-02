<?php
session_start();

include './config/common.php';

//if user try to login
if (isset($_POST['login'])){ 
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  $dbh = getPDO();
  $stmt = $dbh->query("SELECT * FROM users");
    
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if($row['uid'] == $uid && $row['pwd'] == $pwd) {
      $_SESSION['uid'] = $uid;

      header('Location: login.php');    
    } 
  }
}

//if the user logout
if (isset($_GET['Logout'])) {
  echo '<div class="alert alert--warning">
  <strong>Logout!</strong>
  <a href="#" class="alert__close" data-alert-close>×</a>
  </div>';  
}

//after check out
if (isset($_GET['SignUpMsg'])) {
  if($_GET['SignUpMsg'] == "Ok") {
    echo '<div class="alert alert--success">
    <strong>Thanks!</strong> You are registered.
    <a href="#" class="alert__close" data-alert-close>×</a>
  </div>';

  } else {
    echo '<div class="alert alert--warning">
  <strong>Sorry!</strong> You are already registered, Please login
  <a href="#" class="alert__close" data-alert-close>×</a>
  </div>'; 
  }
}
?>

<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Proposer</title>
  <meta name="description" content="Development Guidelines for Developers Implementing Metaphors UI Components.">

  <!-- FONT LIBS -->
  <script src="//use.typekit.net/gfb2mjm.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
  <link rel="stylesheet" href="./bower_components/metaphor/dist/css/metaphor.css">  
  <link rel="stylesheet" href="./bower_components/metaphor/dist/css/td.css">
    <style>
  	#signUp {
		top:15%;
		right:50%;
		outline: none;
		overflow:hidden;
	}

	#login {
		top:15%;
		right:50%;
		outline: none;
		overflow: hidden;
	}
  </style>
</head>
<body>

  <div class="header">
    <nav class="primary-nav">
      <div class="container">
        <div class="primary-nav__mobile">
          <div class="primary-nav__btn">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
          <div class="primary-nav__brand"><span class="sr-only"></span></div>
          <a class="sr-only" href="#main">Skip to main content</a>
        </div>
        <ul class="primary-nav__links">
          <li><a href="index.html" class="primary-nav__link active">Home</a></li>
          <li><a href="about.html" class="primary-nav__link">About</a></li>
          <li><button class="btn btn-default" data-modal="#signUp">Sign Up</button></li>
          <li><button class="btn btn-default" data-modal="#login">Login</button></li>
        </ul>
      </div>
    </nav>
  </div>


  <div id="signUp" class="modal__outer">
    <div class="modal modal--sm">
      <div class="modal__header">
        <h3>Sign Up</h3>
      </div>
      <form class="form" action="signup.php" method="POST" enctype="" >
        <div class="modal__content">
          <div class="row1">
            <div class="col-sm-6">
              <div class="form__group">
                <label class="label--required" for="first">first</label>
                <input type="text" name="first" placeholder="Firstname">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form__group">
                <label class="label--required" for="last">Last</label>
                <input type="text" name="last" placeholder="Lastname">
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="col-sm-6">
              <div class="form__group">
                <label class="label--required" for="uid">ID</label>
                <input type="text" name="uid" placeholder="Username">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form__group">
                <label class="label--required" for="pwd">Password</label>
                <input type="password" name="pwd" placeholder="Password">
              </div>
            </div>
          </div>
        </div>
        <div class="modal__footer">
          <div class="pull-right">
            <button class="btn btn-default" data-modal-close="">Cancel</button>
            <button class="btn btn-primary" type="submit">Sign Up</button>
          </div>
        </div>
      </form>
      <div class="modal__close" data-modal-close="#test1"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div>
  </div>



  <div id="login" class="modal__outer">
    <div class="modal modal--sm">
      <div class="modal__header">
        <h3>Login</h3>
      </div>
      <form class="form" method="post" enctype="" >
        <div class="modal__content">
          <div class="row">
            <div class="col-sm-12">
              <div class="form__group">
                <label class="label--required" for="uid">ID</label>
                <input type="text" name="uid" placeholder="Username">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form__group">
                <label class="label--required" for="pwd">Password</label>
                <input type="password" name="pwd" placeholder="Password">
              </div>
            </div>
          </div>
        </div>
        <div class="modal__footer">
          <div class="pull-right">
            <button class="btn btn-default" data-modal-close="">Cancel</button>
            <button class="btn btn-primary" type="Submit" name="login" >Login</button>
          </div>
        </div>
      </form>
      <div class="modal__close" data-modal-close="#test1"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div>
  </div>


  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Proposer
          
          <div class="pull-right">
            <a href="projectCreation.html" class="btn btn-default" >Create Project</a>
          </div>  
          </h1>
        </div>    
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row">        
        <div class="col-sm-12">   
          <table class="table table--bordered table--padded td--hover">            
            <tbody>
              <tr>
               <?php include './includes/listproject.php';?>
              </tr>
            </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>

  <div class="metalab-footer">
    <div class="metalab-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <script src="./bower_components/metaphor/dist/js/metaphor.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77781058-1', 'auto');
  ga('send', 'pageview');
  </script>
</body>
</html>
