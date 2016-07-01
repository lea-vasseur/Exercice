<?php 

if(file_exists('config.php')){
	require 'config.php';
}else{
	echo 'veuillez configurer BDD';
}

include 'header.php';
echo "Hello World";
include 'footer.php';


?>