<?php
    $db_server="localhost";
    $db_user = "root";
    $db_pass = "";
    $conn ="";
    $conn = new mysqli($db_server, $db_user, $db_pass);

try {
    $conn = new mysqli($db_server, $db_user, $db_pass);
} catch (mysqli_sql_exception) {
    echo "Db is Not Connected! ";
}
if($conn){
    echo "You are Connected!";
}

?>