<?php


ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

$images = scandir("images");

$data = array();


foreach ($images as $img) {
    
    if (!in_array($img, array(".", ".."))) {
      $filename = "images" . DIRECTORY_SEPARATOR . $img;

      $info = pathinfo($filename);

      $info["size"] = filesize($filename);

      $info["modified"] = date("d/m/Y H:i:s" , filemtime($filename));

      $info["url"] = "http://localhost/curso_php/php/dir/" . str_replace(DIRECTORY_SEPARATOR, "/", urlencode($filename));


      array_push($data, $info);
    }


}

echo json_encode($data);

?>