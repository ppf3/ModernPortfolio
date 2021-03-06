<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Patrick Francisco">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Patrick Francisco</title>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CORE BOOTSTRAP CSS -->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../fonts/font-awesome-4.3.0/css/font-awesome.min.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
		
		<?php $page = 'works';?>
    </head>
    <body>
	<div class="indexhtml">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->	
		
        <!-- CONTAINER -->
		<div class="container">
		
			<!-- SIDEBAR, 4 columns wide -->
			<?php include("../php/nav_pages.php");?>
			
			<div class="row">
				<!-- CONTENT, 8 columns wide  -->
				<div id="content-wrap" class="col-md-8 col-md-offset-2">
					<div class="content">
					<!-- the meat of the content goes here -->
						
					
						<section id="works-content" class="myfadeinquick">
							<h1>Escape (Oculus Rift VR)</h1>
							
							<p>
							A personal side project inspired by old point-and-click "Escape the Room" Flash games. I used this opportunity to learn more about C# programming and virtual reality development using the Unity3D game engine.
							</p>
							
							<img src="img/escape.jpg" alt="Escape VR" class="center-block img-responsive"/>
							<br/>
							<p>
							According to Oculus's <a href="http://static.oculus.com/sdk-downloads/documents/Oculus_Best_Practices_Guide.pdf">Best Practices Guide</a>, the most comfortable VR experiences are ones that involve no self-motion. In this demo, the player does not move at all except to move his or her head to look around. The chair and the surrounding objects are positioned in a way where the player never has to turn a full 180-degrees.
							</p>
							
							<p>
							I developed a "world cursor" that allows the player to interact with the environment with just the mouse. The cursor's movement is independent from the movement of the player's head. 
							</p>
							
							<p>
							If you have an Oculus Rift DK2, you can download the Escape demo below to try it for yourself!
							</p>
							<br/>
							
							<p>
							<strong>CONTROLS:</strong><br/>
							Mouse - Move cursor<br/>
							Left click - Interact<br/>
							Space or R - Reset camera
							</p>
							
							<br>
								<a href="https://www.dropbox.com/sh/3vdmi0a97kcgh6i/AABxzNWAiq6zHPS0h3ld2r8ba?dl=0"><h4><strong>Escape_v1.3 (Oculus Rift DK2 recommended)</strong></h4></a>
							<br>
							
							<img src="img/unity.jpg" alt="Unity3D editing" class="center-block img-responsive"/>
								
						</section>
						
						<hr>
						<?php include("../php/footer.php");?>

					</div><!-- /end of .content -->
				</div><!-- /end of .content-wrap -->
			</div><!-- /end of .row -->
		</div><!-- /end of .container -->	

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
	</div>
    </body>
</html>
