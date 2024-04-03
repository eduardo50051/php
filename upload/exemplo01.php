<form method="post" enctype="multipart/form-data">

    <input type="file" name="fileupload">

    <button type="submit">send</button>

</form>

<?php

ini_set('error_reporting', E_ALL); 
ini_set('display_errors', 1);

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $file = $_FILES["fileupload"];

    if ($file["error"]){

        throw new Exception("Error: " .$file["error"]);

    }

    $dirUploads = "uploads";

    if(!is_dir($dirUploads)){

        mkdir($dirUploads);

    }

   if(move_uploaded_file ($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"] )){

    echo "upload foi correto!";

   } else{

    throw new Exception("nao deu pra fazer o upload. ", 1);

   }

}



?>