<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto:400,700" rel="stylesheet">

	<style type="text/css">
		.sidebar{
			background: #2a58ad;
			min-width: 22%;
			float: left;
			margin-right: 0%;
			top: 0em;
			left: 0em;
			bottom: 0em;
			height: 100vh;
			position: fixed;
			display: block;
			padding-top: 50px;

		}
		body{
			background: #ecf0f3;
			margin-left: 22%;
		}

		.main{
			margin-left: 3%;
			margin-right: 3%;
			margin-top: 30px;
			min-height: 100vh;
			padding-bottom: 100px;

		}

		.name{
			font-family: 'Open Sans', sans-serif;
			color: rgba(255,255,255,0.8);
			font-size: 15pt;
		}

		.u_profile{
			font-family: 'Open Sans', sans-serif;
			color: rgba(255,255,255,0.8);
			font-size: 12pt;
			border: 1px solid rgba(255,255,255,0.4);
			padding-left: 15px;
			padding-right: 15px;
			padding-top: 5px;
			padding-bottom: 5px;
			border-radius: 100px;
			display: inline;
		}

		.dp{
			background: url('images/avatar.png');
			background-size: cover;
			min-width: 170px;
			min-height: 170px;
			width: 170px;
			height: auto;
			box-shadow: 0px 5px 5px 1px rgba(0,0,0,0.2);
			border-radius: 500px;

		}
		.mob{
			display: none;
		}

		@media only screen and (max-width: 600px){
			.sidebar{
				display: none;
			}
			body{
				margin-left: 0px;
			}
			.mob{
				display: block;
			}
		}


	</style>
</head>
<body>
	

<div class="sidebar">
	
	<center>
		<div class="dp"></div>
		<br>
		<div class="name">John Snow</div>

		<br>

		<div class="u_profile">Update Profile</div>
	</center>

</div>



<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar="dropbar: true;" style="position: relative; z-index: 980;max-height: 100px; background: #fff; box-shadow: 0px 3px 10px 1px rgba(0,0,0,0.1);">
    	<div class="uk-navbar-left" style="padding-left: 5%">
    		<span uk-icon="icon: user; ratio: 1"></span> <span style="font-size: 13pt; padding-left: 5px">DASHBOARD</span>
    	</div>
        <div class="uk-navbar-right" style="padding-right: 5%">

            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="index.php">Home</a></li>
                
                <li><a href="login.php">Logout</a></li>
            </ul>

        </div>
    </nav>
</div>



<div class="main">
		
	<div class="uk-card uk-card-primary uk-card-body uk-width-1-1@m mob">
    	<center>
		<div class="dp"></div>
		<br>
		<div class="name">John Snow</div>

		<br>

		<div class="u_profile">Update Profile</div>
	</center>
	</div>




	<h4>Primary info</h4>
	<div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
    <h3 class="uk-card-title">Your Information Here</h3>
    <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>

<h4>Stats</h4>

<div class="uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body "><h4>Heading</h4> <br> <span style="font-size: 40pt; color: #013b84;">15</span> <span style="color: #013b84; padding-left: 3px;">times</span> <br>
			<br>
			<center><div style="min-width: 80%; max-width: 80%; margin-top: 30px">
				<div style="float: left;"><h5 style="color: rgba(0,0,0,0.6);"><b>Value</b></h5> <span style="color: #4eafbf; font-size: 20pt">18</span></div>
				<div style="float: right;"><h5 style="color: rgba(0,0,0,0.6);"><b>Other Value</b></h5> <span style="color: #8aa942; font-size: 20pt">43</span></div>
			</div></center>
        </div>
    </div>
    

	<div>
        <div class="uk-card uk-card-default uk-card-body "><h4>Heading</h4> <br> <span style="font-size: 40pt; color: #013b84;">25</span> <span style="color: #013b84; padding-left: 3px;">times</span> <br>
			<br>
			<center><div style="min-width: 80%; max-width: 80%; margin-top: 30px">
				<div style="float: left;"><h5 style="color: rgba(0,0,0,0.6);"><b>Value</b></h5> <span style="color: #4eafbf; font-size: 20pt">18</span></div>
				<div style="float: right;"><h5 style="color: rgba(0,0,0,0.6);"><b>Other Value</b></h5> <span style="color: #8aa942; font-size: 20pt">43</span></div>
			</div></center>
        </div>
    </div>



    <div>
        <div class="uk-card uk-card-default uk-card-body "><h4>Heading</h4> <br> <span style="font-size: 40pt; color: #013b84;">98</span> <span style="color: #013b84; padding-left: 3px;">times</span> <br>
			<br>
			<center><div style="min-width: 80%; max-width: 80%; margin-top: 30px">
				<div style="float: left;"><h5 style="color: rgba(0,0,0,0.6);"><b>Value</b></h5> <span style="color: #4eafbf; font-size: 20pt">18</span></div>
				<div style="float: right;"><h5 style="color: rgba(0,0,0,0.6);"><b>Other Value</b></h5> <span style="color: #8aa942; font-size: 20pt">43</span></div>
			</div></center>
        </div>
    </div>



</div>




</div>

</body>
</html>