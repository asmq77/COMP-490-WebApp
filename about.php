<?php
ob_start();
session_start();

if (isset($_GET['home'])) {
  if(isset($_SESSION['uid'])) {
    header('Location: login.php');
  } else {
    header('Location: index.php');
  }
}


?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>About</title>
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
        <form method="post">
          <ul class="primary-nav__links">
            <li><a href="about.php?home=" class="primary-nav__link" name="home">Home</a></li>
            <li><a href="about.php" class="primary-nav__link active">About</a></li>
          </ul>
        </form>          
      </div>
    </nav>
  </div>

  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless" align="center">About Us</h1>
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
          <label class="label" for="example5" align="center" ><big>Project Intake</big></label>
          <p align="center">
            Team-one wants to make it easy for projects to find their way to creators.<br>
            So we have created a web application that makes finding and proposing projects a breeze.<br>
            If you are a creator looking for a problem to solve, our search features will <br>
            help find the right project for your set of skills. Or if you think there is a <br>
            problem that could be solved by a creator, you can submit a project to be considered.<br>
          </p>
          <hr width="50%" align="center">
          <p align="center">
            Since the website is designed with csun students and faculty in mind,<br>
            you will be able to log in with the the same account you use for all of your csun<br>
            networking needs. This will facilitate keeping track of any projects you have either<br>
            submitted or accepted.<br>
          </p>
          <hr width="50%" align="center">
          <p align="center">
            Special thanks to Meta Lab for creating Metaphor and for other useful resources<br>
            that helped make this web app possible.<br>
          </p>
        </div>
        <div class="col-sm-1"> 
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
