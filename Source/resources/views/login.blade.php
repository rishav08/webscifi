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
        html{
            height: 100%;
        }

        body{
            height: 100%;
        }

        #cover{
background-image: url(img/ac1.jpg);
background-repeat: no-repeat;
background-size: cover;
height: 100%;
        }        

        .panel-default {
opacity: 0.9;
    margin-top: 20%;
    margin-right: auto;
    margin-left: auto;
    max-width: 50%;
}
    </style>
  </head>

  <body>
    <!-- Fixed navbar -->
    <!-- <nav class="navbar navbar-default navbar-fixed-top"> -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div style="width:100%;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand navbar-brand-logo" href="#"></a>
          <a class="navbar-brand" href="#">Welcome, Student</a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!-- <li><a href="#">Logout</a></li> -->
          </ul>
        </div> <!--/.nav-collapse -->
      </div>
    </nav>

    <div id="cover" role="main">

    
    <div class = "row">    
        <div>
<div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" id="login-form">
                    <div class="form-group">
                        <label for="txtEmail" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="UTD Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtPassword" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="button" class="btn btn-submit btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <!---<div class="page-header">
                <h1>LOGIN</h1>
            </div>
            <form id="login-form" name="login-form" class="form-container">
                    <p>
                        <span class="inputField">
                            <label>Please Enter Username </label>
                            <input name="txtEmail" id="txtEmail" type="text" placeholder="Enter Text"/>
                            <label class="error">Text Required.</label>
                        </span>
                    </p>
                    <p>
                        <span class="inputField">
                            <label>Password</label>
                            <input name="txtPassword" id="txtPassword" type="password" placeholder="Enter Password"/>
                            <label class="error">Password Required.</label>
                        </span>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary btn-submit">Submit</button>
                    </p>
                    
            </form>-->
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
