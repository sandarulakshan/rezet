<?php
  $name = $_POST[name];
  $email = $_POST[email];
  $project = $_POST[project];
  $massage = $_POST[massage];

   // Database connection 
   $conn = new mysqli('localhost','root','','test');
   if($conn->connect_error){
       die('connection Faild : ' .$conn->connect_error)
    }else{
        $stmt - $conn->prepare("insert into massage(name, email, project, massage)
              values(?, ?, ?, /");
        $stmt->bind_parm("ssss",$name, $email, $project, $massage);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>