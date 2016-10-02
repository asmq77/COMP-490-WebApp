<?php
  echo $_POST['description'];
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Projects</title>
  <meta name="description" content="Development Guidelines for Developers Implementing Metaphors UI Components.">

  <!-- FONT LIBS -->
  <script src="//use.typekit.net/gfb2mjm.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
  <link rel="stylesheet" href="./bower_components/metaphor/dist/css/metaphor.css">  
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
          <li><a href="index.html" class="primary-nav__link">Home</a></li>
          <li><a href="about.html" class="primary-nav__link">About</a></li>
          
        </ul>
      </div>
    </nav>
  </div>

  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Project</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row">        
        <div class="col-sm-12">         
          <br>     
          <h2 id="forms" class="type--header type--thin">Create Project</h2>
          <form action="" method = "post">
            <div class="row">
              
              <div class="col-sm-4">
                <div class="form__group">
                  <label class="label--required" for="title">Project Title</label>
                  <input type="text" name="title" placeholder="Title">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form__group">
                  <label>Start Date</label>
                  <input class="datepicker" name="startDate" type="text" placeholder="03/01/90">
                </div>
              </div> 

              <div class="col-sm-4">
                <div class="form__group">
                  <label>End Date</label>
                  <input class="datepicker" type="text" name="endDate" placeholder="09/30/90">
                </div>
              </div>             
            

              <div class = "col-lg-12">
                <div class = "form__group">
                  <label>Description</label>
                  <textarea name="description" placeholder="description..." rows="7"></textarea>
                </div>
              </div>

              
              <button class="btn btn-primary btn-lg" type="submit" name="create">Create</button> 
              

              
            </div>
            </form>
            
          <br>
         <!--  <a class="btn btn-primary btn-lg">Submit</a> -->
          <br>
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
