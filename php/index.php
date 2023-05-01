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
    
    if ($result->num_rows > 0) {
    
      while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["Nama"]. " - Alamat: " . $row["Alamat"]. " - Jabatan: " . $row["Jabatan"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
?> 