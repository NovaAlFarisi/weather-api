<?php require_once('data_center.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
	<style type="text/css">
		body {
  background:#dbdbdb;
}
.clear {
  clear:both;
}
.card {
  width:25em;
  min-height:22.5em;
  background: #fff;
  margin:2em auto;
  border-radius: .2em;
  padding-top:1em;
  padding-left: 1em;
  padding-right:1em;
}
.city {
  font-family: Roboto;
  font-weight: 300;
  font-size: 1.8em;
  color:#5b5b5b;
}
.menu {
  float: right;
  font-family: Roboto;
  font-size:.5em;
  color:#5b5b5b;
  margin-top:-.09em;
  margin-right:-2em;
  list-style:square;
}
.sun {
  width:4em;
  height:4em;
  margin-top: 1em;
}
.temp {
  float:right;
  font-family:Roboto;
  font-weight: 300;
  font-size: 8.5em;
  margin-top:-.75em;
  color:#5b5b5b;
}
.variations {
  font-family:Roboto;
  font-wight:300;
  color:#8c8c8c;
  list-style:none;
  margin-left:-2em;
}
.mph {
   font-size:.8em;
}
.speed:before {
  content:url('https://i.imgur.com/luN0Jmq.png');
}
.suggestion {
	font-family: Roboto;
    width: 100%;
    margin: 15% auto;
    padding: 10px;
    font-size: 16pt;
}
.day {
  display:block;
  width: 21.5%;
  height:9em;
  float:left;
  margin: 0 .375em .5em;
  text-align:center;
  font-family:Roboto;
  color: #5b5b5b;
  border-right:.1em solid #d9d9d9;
  line-height: 2;
}
.fri {
  border-right:none;
}
.highTemp {
  font-weight:bold;
}
.lowTemp {
  color: #8c8c8c;
}
.footer {
	margin-top: 40vh;
}
</style>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body><div class="card">
  <span class="city"><?=$weather->location->name . ', ' . $weather->location->country;?></span>
    <br>
  <div class="sun"><img src="<?=$weather->current->condition->icon;?>"></div>
  <span class="temp"><?=$weather->current->temp_c;?>&#176;</span>
  <span>
    <ul class="variations">
      <li><?=$weather->current->condition->text;?></li>
      <li><span class="speed"><?=$weather->current->wind_mph;?><span class="mph">mph</span></span></li>
    </ul>
  </span>
  <div class="suggestion clear">
  	<?php if($weather->current->temp_c < 29){
		echo "It's cold outside, you have to wear a jacket";
	}elseif ($weather->current->temp_c < 20) {
		echo "Freezing, you have to stay at your home";
	} else {
		echo "It's hot outside";
	}
	?>
  </div>
</div>
<div class="footer">
	Made with love by &copy;<a href="github.com/NovaAlFarisi/">NovaAlFarisi</a>  || Card designed by Jon(@swift)
</div>
</body>
</html>