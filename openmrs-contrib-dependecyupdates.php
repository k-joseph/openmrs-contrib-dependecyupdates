<?php
	$omrspProjects = file_get_contents("https://raw.githubusercontent.com/openmrs/openmrs-core/master/api/pom.xml");

	echo 'Hi there!<br /><br />';
	echo $omrspProjects[0];
	echo $omrspProjects;
?>
