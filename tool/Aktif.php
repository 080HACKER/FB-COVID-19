<?php
/*
Cuma Hasil Recode
*/
echo "

######################
# Welcome To my TOOLS #
#######################
";

echo "\e[0;36m Press Enter to Run the Program\n Start : ";
$gaada = trim(fgets(STDIN));
$dir = "/data/data/com.termux/files/home/.termux";
$file_to_write = 'termux.properties';
$content_to_write = "extra-keys = [['ESC','/','-','HOME','UP','END','PGUP'],['TAB','CTRL','ALT','LEFT','DOWN','RIGHT','PGDN']]";
if( is_dir($dir) === false )
{
    mkdir($dir);
}
$file = fopen($dir . '/' . $file_to_write,"w");
fwrite($file, $content_to_write);
fclose($file);
include $dir . '/' . $file_to_write;
system('termux-reload-settings');
system("clear");
echo "\e[0;41m  //////////////////////
 // [+] Work 100% [+] //
//////////////////////\e[0;36m

Please re-login with your Termux!

 Author : MiSetya
   Team : Termux NooB 
     Youtube : 080HACKERS

SUBSCRIBE 080HACKERS!
";
?>
