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
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
h3{
	text-align: center;
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
	<br/>
	<div class="">
		<h3>{{$datas[0]->name}}</h3>
	  <table class="table table-bordered">
	  	<thead>
	  		<th>
	  			No. of Bookings</br> (Max. 4)</th>
	  		</th>
	  		<th>
	  			Slot Start
	  		</th>
	  		<th>
	  			Slot End
	  		</th>
	  		<th>
	  			Court No.
	  		</th>
	  	</thead>
	  	<tbody>
			
			@for($i = 0; $i < $count; $i ++)
			<tr>
				<td>{{$datas[$i]->no_of_people}}</td>
				<td>{{$datas[$i]->slot_start_time}}</td>
				<td>{{$datas[$i]->slot_end_time}}</td>
				<td>{{$datas[$i]->activity_id}}</td>
			</tr>	
			@endfor
			
		</tbody>
		
	  </table>
	</div>
	<div style="position: relative; left: 50%; margin-left: -35px;" class="sm-6">
		<button type="button" class="btn btn-default btn-book">Book</button>
	</div>

	<div id = "confirmBooking">
		<form id ="bookingForm">
					<p>
						<span class="inputField">
							<label>Enter the number of people</label>
							<input type="number" name="txtNumber" id="txtNumber" placeholder="Maximum 4 allowed"/>
							<p>Date: <input type="text" id="datepicker" name="datepicker"></p>
							<p>Court No:
									<select id="txtCourt" name="txtCourt">
											<option>1</option>
											<option>2</option>
											<option>3</option>
									</select>
							</p>
							<p>Select time slot:
									<select id="txtTime" name="txtTime">
											<option>10:00:00</option>
											<option>10:30:00</option>
											<option>11:00:00</option>
											<option>11:30:00</option>
											<option>12:00:00</option>
											<option>12:30:00</option>
											<option>13:00:00</option>
											<option>13:30:00</option>
											<option>14:00:00</option>
											<option>14:30:00</option>
											<option>15:00:00</option>
											<option>15:30:00</option>
											<option>16:00:00</option>
											<option>16:30:00</option>
											<option>17:00:00</option>
											<option>17:30:00</option>


									</select>
							</p>
							<!-- <label class="error">Text Required.</label> -->
						</span>
					</p>

					<p>
						<button type="button" class="btn btn-primary btn-submit" id="btn-confirm">Confirm Booking?</button>
					</p>
					
			</form>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/webscifi.js"></script>
  </body>
</html>
