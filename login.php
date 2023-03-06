<?php
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    
    //database creation
    $conn = new mysqli('localhost','root','','test3');
    if($conn->connect_error){
        die('Connection failed : ' .$conn->connect_error);
    }
        $stmt = $conn->prepare("insert into login(uname,psw)
        values(?,?)");
        $stmt->bind_param("ss",$uname,$psw);
        $stmt->execute();
        echo "Registration Successful";
        echo "newcareer.html";
        $stmt->close();
        $conn->close();
?>
