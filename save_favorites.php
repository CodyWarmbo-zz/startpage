<?php
if(isset($_POST['title']) && isset($_POST['url'])) {
    $data = '<div class="column is-one-third hvr-bob">
	<a href="' . $_POST['url'] .  '">
	<div class="card">
		<div class="card-image">
			<figure class="image is-2by1">
				<img src="images/' . $_POST['title'] . '.png" onerror="this.src=\'images/no-entry.png\'">
			</figure>
		</div>
		<div class="card-header ">
			<p class="card-header-title is-centered">'  . $_POST['title'] . '
		</div>
	</div>
	</a>			
</div>
';
    $ret = file_put_contents('favorites_entries.php', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('Oops, no post data to process!');
}
header("location:javascript://history.go(-1)");
?>