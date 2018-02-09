<nav class="navbar card is-black" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item is-size-4" href="index.php">startpage</a>
			
		<button class="button navbar-burger " data-target="navMenu">
		  <span></span>
		  <span></span>
		  <span></span>
		</button>
	</div>
	<div class="navbar-menu" id="navMenu">
		<div class="navbar-end">
			<div class="navbar-item control">
			  <form method="get" action="https://www.google.com/search">
				<input class="input is-info" type="text" autofocus="autofocus" name="q" width="80" maxlength="255" placeholder="Search..." />
			  </form>
			</div>
			<div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link" href="favorites.php">Favorites</a>
				<div class="navbar-dropdown is-right is-radiusless">
					<a class="navbar-item">Show Category 1</a>
					<a class="navbar-item">Show Category 2</a>
				</div>
			</div>
		</div>
	</div>
</nav>