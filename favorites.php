

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
				<?php
				include("favorites_entries.php");
				?>
				
				<div class="column is-one-third">		
					<div class="card">
						<div class="card-image">
							<figure class="image is-2by1">
								<img src="images/entry-file.png">
							</figure>
						</div>
						<div class="card-content" id="new-entry-content">
							<form action="save_favorites.php" method="post" enctype="multipart/form-data">
								<div class="field">
								  <div class="control">
									<input class="input" type="text" name="title" placeholder="Title">
								  </div>
								</div>
								<div class="field">
								  <div class="control">
									<input class="input" type="text" name="url" placeholder="URL">
								  </div>
								</div>
								<div class="field buttons is-centered">
								  <div class="control">
									<input value="Submit" type="submit" name="submit" class="button is-dark is-small">
								  </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
  </body>
</html>