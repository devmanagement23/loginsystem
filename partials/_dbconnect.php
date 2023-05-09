<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "digisecure";

$conn = mysqli_connect($server,$username,$password,$database);

/* if($conn){
    echo "Success";
}
else{
    die("Error".mysqli_connect_error());
} */

if(!$conn){    
    die("Error".mysqli_connect_error());
}


?>