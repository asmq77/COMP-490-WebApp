<?php
session_start();

if($_POST['username']) {


  $dbUsname = "Inkyu";
  $dbPassword = "testPW";
  $uid = 1111;

  $usname = strip_tags($_POST["username"]);
  $passwd = strip_tags($_POST["password"]);

  if($usname == $dbUsname && $passwd == $dbPassword) {
    // Set Session variables
    $_SESSION['username'] = $usname;
    $_SESSION['id'] = $uid;

    echo "<h2> Logged In !! </h2>";
  } else {
    echo "<h2> Username and Password was incorrect </br> 
    Please try again</h2>";
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
          <li><button class="btn btn-default" data-modal="#test1">Login</button></li>
        </ul>
      </div>
    </nav>
  </div>

  <div id="test1" class="modal__outer">
    <div class="modal modal--sm">
      <div class="modal__header">
        <h3>Login</h3>
      </div>
      <form class="form" action="index.php" method="post" enctype="multipart/form-data" >
        <div class="modal__content">
          <div class="row">
            <div class="col-sm-12">
              <div class="form__group">
                <label class="label--required" for="example5">Email</label>
                <input type="text" name="username" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form__group">
                <label class="label--required" for="example6">Password</label>
                <input type="password" name="password" placeholder="Password">
              </div>
            </div>
          </div>
        </div>
        <div class="modal__footer">
          <div class="pull-right">
            <button class="btn btn-default" data-modal-close="">Cancel</button>
            <button class="btn btn-primary" name="Submit" >Sign in</button>
          </div>
        </div>
      </div>
      <div class="modal__close" data-modal-close="#test1"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div>
  </div>


  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Proposer</h1>
          
          <div class="pull-right">
            <li><a href="projectCreation.html" class="btn btn-default" >Create Project</a></li>
          </div>     
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
                <td><h1>Project #1</p></td>
                <td><h1>Project #1</p></td>
                <td><h1>Project #1</p></td>
              </tr>
              <tr>
                <td><h1>Project #1</p></td>
                <td><h1>Project #1</p></td>
                <td><h1>Project #1</p></td>
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
