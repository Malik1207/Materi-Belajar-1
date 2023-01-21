<?php
	$greet = function($name){
		printf("Hello %s\r\n", $name);
	};
	
	$greet('World');
	echo "<br>";
	$greet('PHP');
	echo "<br>";
	
	echo preg_replace_callback('~-([a-z])~', function($match) {
		return strtoupper($match[1]);
	}, 'hello-world');
