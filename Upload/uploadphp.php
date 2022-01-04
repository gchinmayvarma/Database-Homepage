<?php
$filename = $_FILES['file']['name'];
$location = "ARDatabase/".$filename ;
if(move_uploaded_file(($_FILES['file']['tmp_name']), $location)){
	echo 'Uploaded Successsfully';
} else {
	echo 'Error while Uploading' ;
}
?>