<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>startpage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
	<link rel="stylesheet" href="css/custom.css">
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
    <div id="pagecontent" class="container">

		<section class="section">
			<?php
			include("nav.php");
			?>
			<section class="section">
				<div class="columns is-centered is-multiline">
					<?php
					include("favorites_entries.php");
					?>
					<div class="container column is-one-quarter section">
						<p class="subtitle has-text-centered">Add a Favorite</p>
						<form action="save_favorites.php" method="post" enctype="multipart/form-data">
							<div class="field">
							  <div class="control">
								<input class="input is-small has-text-centered" type="text" name="title" placeholder="Site Title (.png)">
							  </div>
							</div>
							<div class="field">
							  <div class="control">
								<input class="input is-small has-text-centered" type="text" name="url" placeholder="Site URL">
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
			</section>
		</section>
	</div>
  </body>
</html>