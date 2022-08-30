<?php
	$message = 'Hello';
	
	//NO USE
	$example = function(){
		var_dump($message);
	};
	$example();
	echo "<br>";
	
	//Inherit $message
	$example = function() use ($message) {
		var_dump($message);
	};
	$example();
	
	//Pewarisan nilai variable adalah saat function pertama kali di definisikan, bukan saat dipanggil
	
	echo ('<br>');
	$message = 'World';
	$example();
	
	echo ('<br>');
	//Reset Message
	$message = 'Hello';
	
	//Inherit by-reference
	$example = function() use (&$message) {
		var_dump($message);
	};
	$example();
	
	echo ('<br>');
	//Perubahan nilai pada Parent di cerminkan dalam pemanggialn function.
	$message = 'World';
	$example();
	
	// Closure juga bisa menerima regular argument
	$example = function($arg) use ($message){
		var_dump($arg. '' . $message);
	};
	$example("Hello");
	
	echo ('<br>');
	//Return type dideklarasikan setelah penggunaan Clause 
	$example = function() use ($message) {
		return "Hello $message";
	};
	var_dump($example());
