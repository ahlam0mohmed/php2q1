<?php
 
// Getting uploaded file
$file = $_FILES["file"];
 
// Uploading in "uplaods" folder
move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
 
$zip = new ZipArchive(); // Load zip library 
 $zip_name ="upload.zip"; // Zip name
 if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
 { 
  echo "Sorry ZIP creation failed at this time";
 }
 $zip->addFile("uploads/".$file_name);
 $zip->close();

// Redirecting back
header("Location: " . $_SERVER["HTTP_REFERER"]);