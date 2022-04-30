<?php

$target_dir= "B16_uploads/";

error_reporting (0); 
mkdir("B16_uploads");

$target_file = $target_dir. $_FILES["fileToUpload"] ["name"];

echo "<br>";

print_r ($_FILES["fileToUpload"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {

echo "The file has been uploaded.";

}
else {
echo "Sorry, there was an error uploading your file.";
}
?>
