<!DOCTYPE html>
<html>
<head>
	<title>smarToll</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
	<style type="text/css">
		body{
			margin: 0px;
		}

		.hero{
			width: 100%;
			height: 100vh;
		}
		.uk-navbar-right{
			padding-right: 10%;
			font-weight: bolder;
		}
		.uk-navbar-left{
			padding-left: 10%;
		}
		.uk-navbar-nav, .uk-navbar-nav>li.uk-active>a, .uk-navbar-nav>li>a{
			color: #fff;
		}
		.tagline{
			color: #fff;
			padding-top: 30vh;
			font-family: 'Rajdhani', sans-serif;
			font-weight: bold;
		}
		.det{
			color: #fff;
			font-family: 'Rajdhani', sans-serif;
		}
		.two{
			min-height: 500px;
		}
		h1{
			font-family: 'Rajdhani', sans-serif;
		}
		.footer{
			min-width: 100%;
			min-height: 300px;
			background: url('images/overlay.png'), #3fa0d6;
		}
		.foot_inner{
			max-width: 800px;
			color: rgba(255,255,255,0.7);
			font-weight: 600;
		}
		.media_buttons{
			
		}
		.three_inner{
			padding-top: 200px;
			padding-bottom: 200px;
		}
	</style>
</head>
<body>
	<div class="uk-background-cover hero " style="background-image: url(images/bck.jpg); background-attachment: fixed;">
		<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
			<div class="uk-navbar-left"><img src="images/name.png"></div>
    		<div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Home</a></li>
            <li>
                <a href="#">Login</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        
                        <li><a href="#">LOGIN</a></li>
                        <li><a href="#">REGISTER</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">ABOUT</a></li>
        </ul>
    		</div>
		</nav>

		<center>
			<div uk-parallax="blur: 10; scale: 1,0.6;">
				<h1 class="tagline">Tolling made easy.</h1>
				<p class="det">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non lacus lacus.</p>
			</div>
			
		</center>


</div>


<div class="uk-container two"> <br>
	<center><h1>Features</h1></center>
	<br>
	<br>

	<div class="uk-child-width-expand@s uk-text-center" uk-grid uk-parallax="opacity: 0,1; viewport: 0.6">
    
    <div>
    	<div class="uk-card uk-card-default uk-card-hover uk-card-body">
    		<span uk-icon="icon: bolt; ratio: 2"></span>
            <h3 class="uk-card-title">Fast</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>

    <div>
    	<div class="uk-card uk-card-default uk-card-hover uk-card-body">
    		<span uk-icon="icon: lifesaver; ratio: 2"></span>
            <h3 class="uk-card-title">Reliable</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>

    <div>
    	<div class="uk-card uk-card-default uk-card-hover uk-card-body">
    		<span uk-icon="icon: check; ratio: 2"></span>
            <h3 class="uk-card-title">Hassle Free</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>

    <div>
    	<div class="uk-card uk-card-default uk-card-hover uk-card-body">
    		<span uk-icon="icon: phone; ratio: 2"></span>
            <h3 class="uk-card-title">Smart</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>

   
	</div>
	<br>
</div>

<div class="three">
	<div class="uk-container three_inner">
		<div class="uk-child-width-expand@s uk-text-center" uk-grid>
			<div>
				<div><img src="images/about.png"></div>
			</div>
			<div>
				<div style="text-align: justify;">Nam eget purus convallis enim scelerisque convallis vitae quis enim. Ut iaculis porta velit, ac semper lectus varius eget. Duis tempor dolor eu dolor lobortis, vitae rutrum enim lacinia. Etiam tristique orci vel sem viverra, et molestie arcu tempus. Nullam scelerisque enim non ligula aliquet iaculis. Suspendisse tristique sapien vel ultrices pulvinar. Ut eu urna vitae metus lobortis blandit. Morbi sit amet bibendum sem. Curabitur et nunc quis est faucibus aliquet ut sed odio. Nulla molestie velit vitae suscipit commodo. Nulla facilisi. Maecenas vehicula ex erat, ornare rhoncus velit porttitor sed. Aenean accumsan sapien ante. Suspendisse venenatis condimentum diam, vel mattis mauris varius at. Etiam nisl sapien, accumsan eu metus at, porttitor congue libero. Maecenas imperdiet elementum scelerisque.</div>
			</div>

			
		</div>
	</div>
</div>


<div class="footer">
	<br><br>
	<center>
		<div class="uk-child-width-expand@s uk-text-center foot_inner" uk-grid>
		<div>
			<div>WHAT WE DO</div>
		</div>

		<div>
			<div>OUR COMPANY</div>
		</div>

		<div>
			<div>CONTACT</div>
		</div>

		<div>
			<div>CARRERS</div>
		</div>
	</div>
	<br><br>


	<div class="media_buttons"><a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a> <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a> <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="google-plus"></a> <a href="" class="uk-icon-button" uk-icon="instagram"></a> 
	</div>
	<br>

	<div style="color: rgba(255,255,255,0.5);">#67, SJB Institute of Technology, Bgs health and Education city <br> Bangalore - 560060</div>
	<br>
	
	<hr noshade style="width: 80%; opacity: 0.3">

	<div style="color: rgba(255,255,255,0.5);">Copyright © 2018 . SmarToll</div><br><br>

	</center>
</div>

</body>
</html>