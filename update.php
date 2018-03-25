<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto:300,400" rel="stylesheet">

	<style type="text/css">
		body{
			margin: 0px;
			padding-bottom: 100px;
		}

		header .inner{
			position: relative;
			height: 460px;
			background: #461b93;
			color: #fff; 
			text-align: center;
			z-index: -1;
		}


		header .inner:before{
			content: ' ';
			width: 100%;
			left: 0;
			position: absolute;
			height: 300px;
			bottom: -50px;
			background: #461b93;
			transform: skewY(4deg);

		}
		.head-text{
			text-align: center;
			color: #fff;
			font-family: 'Open Sans', sans-serif;
			padding-top: 80px;
		}

		.content{
			max-width: 1000px;
			margin: 0 auto;
			background: #f1f1f1;
			z-index: 99;
			margin-top: -150px;
			border-radius: 6px;
			box-shadow: 0px 0px 40px rgba(0,0,0,0.2);
			padding-bottom: 100px;
		}

		.inner-cont{
			padding-top: 100px;
			min-height: 400px;
		}
	</style>
</head>
<body>

<header>
	<div class="inner">
		<h1 class="head-text">Update Your Profile</h1>
		<p style="opacity: 0.8; font-family: 'Open Sans', sans-serif; letter-spacing: 1px">Enter the information with the best of your knowledge.</p>

	</div>
</header>

<div class="content">
	
	
	<div class="uk-container inner-cont">
	


		<form class="uk-grid-small" uk-grid>
	    <div class="uk-width-1-1">
	        <input class="uk-input" type="number" placeholder="Aadhar Number" required>
	    </div>
	    <div class="uk-width-1-2@s">
	        <input class="uk-input" type="text" placeholder="Vehicle Number">
	    </div>
	    <div class="uk-width-1-4@s">
	        <input class="uk-input" type="text" placeholder="DL Number">
	    </div>
	    <div class="uk-width-1-4@s">
	        <input class="uk-input" type="number" placeholder="Age">
	    </div>
	    <div class="uk-width-1-2@s">
	        <input class="uk-input" type="text" placeholder="City">
	    </div>
	    <div class="uk-width-1-2@s">
	        <input class="uk-input" type="text" placeholder="State">
	    </div>
	     <div class="uk-width-1-1@s">
	        <input class="uk-input" type="email" placeholder="email">
	    </div>
		 <div class="uk-width-1-1@s"><center><input type="submit" value="Update" class="uk-button uk-button-danger"></center></div>
	    
	   
		</form>



	</div>


</div>





</body>
</html>