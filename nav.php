<nav class="navbar is-white card" role="navigation" aria-label="main navigation">
	<div class="navbar-brand">
		<a class="navbar-item is-size-4" href="index.php">startpage</a>
			
		<button class="button navbar-burger is-black" data-target="navMenu">
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
			<a class="navbar-item" href="favorites.php">Favorites</a>
		</div>
	</div>
</nav>