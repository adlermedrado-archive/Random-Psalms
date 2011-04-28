<?php
/*
Get an Randomic number between 1 and 150
*/
$psalmNumber = rand(1,150);

/*
add a 0 if the number is 1,2,3,4,5,6,7,8,9
*/
if (strlen($psalmNumber) == 1) {
	$psalmNumber = "0{$psalmNumber}";
}

/*
Create the URL that will point to chabad's website
*/
$chabadUrl = "http://chabad.org.br/tora/salmos/salmos/sn{$psalmNumber}.html";

$command = null;

/*
Check what is the OS PHP is running and configure what command will be used to 
open an browser window with the selected psalm at chabad's website
*/
switch (PHP_OS) {
	case 'Darwin':
		$command = 'open';
	break;
	case 'Linux':
		$command = 'xdg-open';
	break;
	default:
		$command = 'start';	 	
	break;
}

/*
Run the command to open the website 
*/
exec("$command $chabadUrl");
echo "\n=================\n";
echo "\nrandom_psalm by Adler Medrado\n";
echo "\nhttp://adlermedrado.com.br\n";
echo "\nThanks to Chabad - http://chabad.org.br\n";
echo "\n=================\n";
/*
That's it ;-)
*/
?>