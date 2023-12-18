<?php
    if(isset($_POST['email'])){
    
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
    $name=$_POST['Username'];
    $password=$_POST['password'];
    $email=$_POST['email'];


    $sql= "INSERT INTO `collection`.`details` (`Username`, `Password`, `Email`) VALUES ('$name', '$password', '$email');";
    if($conn->query($sql)==true){
        //echo "Successfully Done";
    }
    else{
        echo "error";
    }
    $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Details Collection:</h2>
    <form action="index.php" method="post">
        Username:
        <input type="text" name="Username" id=""><br><br>
        Password:
        <input type="Password" name="password" id=""><br><br>
        Email:
        <input type="Email" name="email" id=""><br><br>
        <input type="Submit" value="Submit">
    </form>
</body>
</html>