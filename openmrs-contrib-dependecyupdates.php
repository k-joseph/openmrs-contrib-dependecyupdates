<?php
	$omrspProjects = file_get_contents("https://raw.githubusercontent.com/k-joseph/openmrs-contrib-dependecyupdates/master/data.json");
	$parsedown = new Parsedown();

	echo 'Hi there!<br /><br />';
	echo $parsedown->text($omrspProjects);
?>
