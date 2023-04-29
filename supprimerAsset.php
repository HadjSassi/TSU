<?php
$path = $_POST['path']; // get the file path from the POST data
if(file_exists($path)){
    if(unlink($path)){
        echo "File deleted successfully.";
    }else{
        echo "Error deleting file.";
    }
}else{
    echo "File does not exist.";
}
?>
