<?php 
error_reporting(0);
if(isset($_POST['new']) && $_POST['new']==1)
{
	//echo 'test'; exit;
 	$city_name = $_POST['city_name'];
	$api_key='5dfbf49092812a8cfcf095527b92a2b3';
	$api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
	$json = file_get_contents($api_url);
	$weather = json_decode($json,true);
	$temp =  $weather['main']['temp'];
	$temp_celcius = round($temp - 273.15);
	$temp_weather_main = $weather['weather'][0]['main'];
	$temp_weather_des = $weather['weather'][0]['description'];
	$temp_weather_icon = $weather['weather'][0]['icon'];
	$city = $weather['name'];
	$img = '<img src="http://openweathermap.org/img/wn/'.$temp_weather_icon.'@2x.png" />';
}	
?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <title>Bootstrap Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <style>
	  	.city_name {
	    	margin-right: 369px;
	    	margin-bottom: 31px;
		}
	  	.container.allgrid {
	    	margin-right: 0px;
		}
		.header {
	    	margin-left: 0px;
		}
		.col-sm-3{
			border: 1px solid;
		}
	  </style>
	</head>
	<body>
	<div class="jumbotron">
	  <div class="container text-center header">
	    <h1>Weather Report</h1>      
	  </div>
	</div>
	<form name="form" method="post" action="">
	<div class='container allgrid'>  
	<div class="container-fluid bg-3 text-center">  
	<div class='city_name'>
		<input type="hidden" name="new" value="1" />
		<label>Enter City Name:</label>
		<input type='text' name='city_name'>
		<input type='submit' name='submit' value='Submit'>
	</div>  
	  <div class="row">
	    <div class="col-sm-3 jumbotron">
	    <?php
	    if($city =='')
	    {
	    	echo 'Enter City Name';
	    }
	    else{
	    	echo $temp_celcius.'&#8451;';
	    	echo $img.'<br><br>';
	    	echo $city;
	    }	 
	    ?>
	    </div>
	     <div class="col-sm-3 jumbotron">
	    <?php
	    if($city =='')
	    {
	    	echo 'Enter City Name';
	    }
	    else{
	    	echo $temp_celcius.'&#8451;';
	    	echo $img.'<br><br>';
	    	echo $city;
	    }	  
	    ?>

	    </div>
	     <div class="col-sm-3 jumbotron">
	    <?php
	    	if($city =='')
	    {
	    	echo 'Enter City Name';
	    }
	    else{
	    	echo $temp_celcius.'&#8451;';
	    	echo $img.'<br><br>';
	    	echo $city;
	    }	  
	    ?>

	    </div>
	  </div>
	</div><br>

	<div class="container-fluid bg-3 text-center">    
	  <div class="row">
	   <div class="col-sm-3 jumbotron">
	    <?php
	    	if($city =='')
	    {
	    	echo 'Enter City Name';
	    }
	    else{
	    	echo $temp_celcius.'&#8451;';
	    	echo $img.'<br><br>';
	    	echo $city;
	    }	 
	    ?>

	    </div>
	     <div class="col-sm-3 jumbotron">
	    <?php
	    	if($city =='')
	    {
	    	echo 'Enter City Name';
	    }
	    else{
	    	echo $temp_celcius.'&#8451;';
	    	echo $img.'<br><br>';
	    	echo $city;
	    }	  
	    ?>

	    </div>
	     <div class="col-sm-3 jumbotron">
	    <?php
	    	if($city =='')
	    {
	    	echo 'Enter City Name';
	    }
	    else{
	    	echo $temp_celcius.'&#8451;';
	    	echo $img.'<br><br>';
	    	echo $city;
	    }	 
	    ?>

	    </div>
	  </div>
	</div><br><br>
	<div class="container-fluid bg-3 text-center">    
	  <div class="row">
	    <div class="col-sm-3 jumbotron">
	     <?php
	    	if($city =='')
	    {
	    	echo 'Enter City Name';
	    }
	    else{
	    	echo $temp_celcius.'&#8451;';
	    	echo $img.'<br><br>';
	    	echo $city;
	    }	 
	    ?>
	    </div>
	     <div class="col-sm-3 jumbotron">
	     <?php
	    	if($city =='')
	    {
	    	echo 'Enter City Name';
	    }
	    else{
	    	echo $temp_celcius.'&#8451;';
	    	echo $img.'<br><br>';
	    	echo $city;
	    }	  
	    ?>
	    </div>
	     <div class="col-sm-3 jumbotron">
 <?php
	    	if($city =='')
	    {
	    	echo 'Enter City Name';
	    }
	    else{
	    	echo $temp_celcius.'&#8451;';
	    	echo $img.'<br><br>';
	    	echo $city;
	    }	 
	    ?>
	    </div>
	  </div>
	</div><br><br>
	</div>
	</form>
	</body>
	</html>
