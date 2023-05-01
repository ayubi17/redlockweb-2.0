<?php
    $Host_name = "db_sing_redlock";
    $User_name = "ayb";
    $Password = "AB";
    $Database_name = "redlock-db";
    
    
    $conn = new mysqli($Host_name, $User_name, $Password, $Database_name);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM Users";
    $result = $conn->query($sql);
    
    if ($result=$conn->query($sql)) {
    
      while($row = $result->fetch_assoc()) {
        $Host_name[]=$row;
      }
    }
    $hitung=0;
    foreach($users as $User_name){
    $hitung++;
    }
    echo $count;
?> 