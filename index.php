<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warmbo Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>
  <body>
  <script>
	document.addEventListener('DOMContentLoaded', function () {

	  // Get all "navbar-burger" elements
	  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

	  // Check if there are any navbar burgers
	  if ($navbarBurgers.length > 0) {

		// Add a click event on each of them
		$navbarBurgers.forEach(function ($el) {
		  $el.addEventListener('click', function () {

			// Get the target from the "data-target" attribute
			var target = $el.dataset.target;
			var $target = document.getElementById(target);

			// Toggle the class on both the "navbar-burger" and the "navbar-menu"
			$el.classList.toggle('is-active');
			$target.classList.toggle('is-active');

		  });
		});
	  }

	});
  </script>
  <script>
	$(document).ready(function() {
    $(window).load(function() {
         $('#loader').hide();
         $('#pagecontent').show();
		});
	});
  </script>
	<div id="loader">
			<figure class="image is-128x128">
				<img src="images/loading.gif">
			</figure>
	</div>
    <div id="pagecontent" class="container">
		<section class="section">
			<?php
			include("nav.php");
			?>
		<section class="section">
			<div class="columns">
				<div class="column is-two-thirds">	
					<div class="card">
						<div class="card-header ">
							<p class="card-header-title">
								Today
							</p>
						</div>
						<div class="card-content">
							<h1 class="title"><?php echo date("F j, Y"); ?></h1>
							<div class="weather">
							   <a class="weatherwidget-io" href="https://forecast7.com/en/45d20n93d39/anoka/?unit=us" data-label_1="Anoka" data-label_2="Minnesota" data-font="Roboto" data-icons="Climacons Animated" data-days="5" >Anoka Minnesota</a>
								<script>
									!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = "https://weatherwidget.io/js/widget.min.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "weatherwidget-io-js");
								</script>
							</div>
							
						</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<div class="card-header">
							<p class="card-header-title">
								Photo
							</p>
						</div>
						<div class="card-image">
							<img src="https://source.unsplash.com/random?architecture">
						</div>
					</div>
				</div>
			</div>
		</section>
		</section>
	</div>
  </body>
</html>