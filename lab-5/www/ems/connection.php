<?php
        $connect = new mysqli('localhost:3308', 'root' , '', 'ems_db');
    
              if($connect->connect_errno )
              {

                  die('Could not connect: ' . $connect->connect_errno);
              }
?>
