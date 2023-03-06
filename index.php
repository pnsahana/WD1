<?php
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pass = $_POST['pass'];
    
    //database creation
    $conn = new mysqli('localhost','root','','example');
    if($conn->connect_error){
        die('Connection failed : ' .$conn->connect_error);
    }
        $stmt = $conn->prepare("insert into signin(fname,email,number,pass)
        values(?,?,?,?)");
        $stmt->bind_param("ssis",$fname,$email,$number,$pass);
        $stmt->execute();
        
        $stmt->close();
        $conn->close();
?>