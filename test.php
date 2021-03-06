<?php
global $file;
$file = "installer.php";
global $fileData;
$fileData = "";

if(file_exists($file))
{
    unlink($file);
}

function include_($string)
{
    global $file;
    global $fileData;
    $fileData .= file_get_contents($string);
    file_put_contents($file, $fileData);
}

include_("src/init.php");
include_("src/functions.php");
include_("src/Header.html.php");
include_("src/Form.html.php");
include_("src/htaccess.php");
include_("src/Message.php");
include_("src/updater.php");
include_("src/Settings.php");
include_("src/run.php");

include($file);