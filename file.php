<?php
echo $_FILES["uploadfile"]["name"]."has been uploaded.<br>";
move_uploaded_file($_FILES["uploadfile"]["tmp_name"],
"/var/www/html/upload/".$_FILES["uploadfile"]["name"]);
echo "stored in;"."/var/www/html/upload/" . $_FILES["uploadfilename"]["name"];
?>

