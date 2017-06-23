<?php 
session_start();
include_once 'generate.php';
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PROJECT_SURL- A URL Shortner</title>
<script type="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="frontend/sweetalert.css" rel="stylesheet">
<script type="text/javascript" src="frontend/sweetalert.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
if(isset($msg))
{
echo $msg;
}
?>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
<a href="index.html"><img class="img-responsive" width="150" height="50" src="logo.png"></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home Page<span class="sr-only">(current)</span></a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="faq.html">FAQ</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Account<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/account/">Login</a></li>
            <li><a href="/account/signup.php">Sign-Up</a></li>
            <li><a href="/admin/">Account Setting</a></li>
            <li class="divider"></li>
            <li><a href="/account/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container-fluid">

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">Welcome to PROJECR-SURL</h1>
    </div>
    <div class="col-md-6 col-md-offset-3">
      <h4 class="text-center">An <a href="https://github.com/ssysm/project_surl">Open Source</a> URL Shortner Project Created for TheEditor Studio</h4>
    </div>
  </div>
  <hr>
</div>
<div>
<h2 class="text-center">Please Enter Your Long URL Below</h4><br>
<div>
<form action="" method="post">
<fieldset>
<p class="h4 pull-left">Long URL:</p>
<div class="form-group">
  <input class="form-control" id="usr" placeholder="Please Enter Your URL" type="url" name="lurl" required>
  </div>
  <button type="submit" class="btn btn-info pull-right">Short It !</button>
</fieldset>
<br>
</form>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="text-justify">
      <p class="h3 text-center"> This is an Open Source Project Under <a href="https://github.com/ssysm/project_surl/blob/master/LICENSE">MIT License</a></p>
      <p class="h4 text-center">You can <a href="https://github.com/ssysm/project_surl">fork</a> this project on GitHub </p>
    </div>
</div>
<hr>
<div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
      <h4>PROJECT-SURL</h4>
      <p>Copyright &copy; 2017 &middot; All Rights Reserved &middot; <a href="http://theeditorstudio.com/" >TheEditor Studio</a> & <a href="http://github.com/ssysm">Shengming Yuan</a></p>
    </div>
  </div>
  <hr>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
</body>
</html>
