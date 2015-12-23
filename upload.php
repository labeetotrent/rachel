<?php

mail("trent@thetelstrastore.com.au", "test". $_POST["eventCode"], "test");
if (!file_exists('./'. $_POST["eventCode"])) {
    mkdir('./'. $_POST["eventCode"], 0777, true);
}
$uploads_dir = './' . $_POST["eventCode"];


print_r($_FILES);
$new_image_name = uniqid();
move_uploaded_file($_FILES["file"]["tmp_name"], "$uploads_dir/$new_image_name.jpg");
?>
