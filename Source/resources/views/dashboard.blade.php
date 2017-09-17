<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Web Sci fi</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="css/jcf/jcf.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.icon-container{
  margin: 30px 50px 30px 0px;
  float: left;
  width:  170px;
}

.icon-container .title {
    text-align: center;
    color:  black;
    padding-top: 10px;
    font-size: 2em;
}

.cancel.icon-container {
    position: relative;
    left: 50%;
    margin-left: -85px;
}

.row{
  background-color: darkgray;
  border-radius: 10px;
  margin-top: 10px;
  margin-bottom: 30px;
  margin-left: 0;
  margin-right: 0;
}

.row.cancel {
  width: 100%;
}
  
.container{
  text-align: center;
}

.sport-container{
  display: inline-block;
}

</style>

  </head>

  <body>
    <!-- Fixed navbar -->
    <!-- <nav class="navbar navbar-default navbar-fixed-top"> -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a class="navbar-brand navbar-brand-logo" href="#"></a>
          <a class="navbar-brand" href="/#">HOME</a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/logout">Logout</a></li>
          </ul>
        </div> <!--/.nav-collapse -->
      </div>
    </nav>

    
	<div class="container theme-showcase" role="main">

	<h3>Manage Booking</h3>
	<div class = "row bookings">
		<div class="sport-container">
		<div class="icon-container">
			<a href="/badminton">
        <img src="img/badminton.png" class="img-rounded" width="155" height="155" alt="badminton">
      <div class="title">Badminton</div>
    </a>
		</div>
		
    <div class="icon-container">
      <img src="img/squash.jpg" class="img-rounded" width="155" height="155">
      <div class="title">Squash</div>
    </div>

    <div class="icon-container">
      <img src="img/tennis.png" class="img-rounded" width="155" height="155">
      <div class="title">Table Tennis</div>
    </div>
</div>
		</div>	

<h3>Cancel Previous Booking</h3>
    <div class = "row cancel">
    <div class="icon-container cancel">
      <a href="/cancel"><img src="img/cancel.png" class="img-rounded" width="155" height="155"></a>
    </div>  
      
    </div>  
		
	
	
			
		</div>
	</div>
	

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="js/bootstrap.min.js"></script>
   <!--  <script src="js/docs.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <!--  <script src="js/ie10-viewport-bug-workaround.js"></script> -->	
	<script src="js/jcf/jcf.js"></script>
	<script src="js/jcf/jcf.select.js"></script>
	<script src="js/jcf/jcf.radio.js"></script>
	<script src="js/jcf/jcf.checkbox.js"></script>
	
	<script src="js/theme.js"></script>
	
  </body>
</html>
