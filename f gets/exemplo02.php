<?php

ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

$filename = "imagem.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:". $mimetype .";base64," . $base64;





?>

<a href="<?=$base64encode?>">link para imagem</a>

<img src="<?=$base64encode?>">