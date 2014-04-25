<?php
if($_FILES['file']['name'])
{
  $save_path="\img"; // Folder where you wanna move the file.
  #$myname = strtolower($_FILES['image']['tmp_name']); //You are renaming the file here
  #move_uploaded_file($_FILES['image']['tmp_name'], $save_path.$myname); // Move the uploaded file to the desired folder
move_uploaded_file($_FILES["file"]["tmp_name"],"img/" . "try.jpg");
  
  echo "Done";
  }

#$inser_into_db="INSERT INTO `database`.`table` (`folder_name`, `file_name`) VALUES('$save_path', '$myname'))";

?>