<?php

/* Getting file name */
$filename = $_FILES['file']['name'];

/* Location */
$location = "upload/".$filename;

/* Upload file */
if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
    echo $location;
}else{
    echo 0;
}
