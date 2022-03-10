<?php
if(isset($_POST['upload_file']))
{
 $uploadfile=$_FILES["file"]["tmp_name"];
 $folder="images/";
 $file_name=$_FILES["file"]["name"];
 move_uploaded_file($_FILES["file"]["tmp_name"], "$folder".$_FILES["file"]["name"]);

 $zip = new ZipArchive(); // Load zip library 
 $zip_name ="upload.zip"; // Zip name
 if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
 { 
  echo "Sorry ZIP creation failed at this time";
 }
 $zip->addFile("images/".$file_name);
 $zip->close();
}
?>