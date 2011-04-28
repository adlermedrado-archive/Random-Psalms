<?php
/*
Copyright (c) 2011, Adler Brediks Medrado
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
Neither the name of the ADLER BREDIKS MEDRADO nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/


/*
Get an Randomic number between 1 and 150
*/
$psalmNumber = rand(1,150);

/*
add a lead 0 if the number is 1,2,3,4,5,6,7,8,9
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
	// Mac OS
	case 'Darwin':
		$command = 'open';
	break;
	// Linux
	case 'Linux':
		$command = 'xdg-open';
	break;
	// Windows
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