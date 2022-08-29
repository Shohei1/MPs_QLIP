<?php
$firstname = $_POST['firstName'];

//DB connection
$conn = new mysqli('localhost', 'root', 'test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName)
    value(?)");
    $stmt->bind_param("s",$firstname);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();    
}

?>