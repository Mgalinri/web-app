<!Doctype html>
<html lang="en">
    <head>
</head>
<body>
<?php 
session_start();
       include ("connection.php");
     $user_name = $_POST['user_name'];
     
     $password= $_POST['password'];
     $sql= "SELECT * FROM users_tab WHERE userid = '$user_name' AND password = '$password' ";
     $result = mysqli_query($connect,$sql);
     $check = mysqli_fetch_array($result);
     if(isset($check)){
      if($check['role']=='Faculty')
      {
         echo "<meta http-equiv='refresh' content='0; URL=Faculty_Blackboard.php?user_name=$user_name'>";
      
      }
      else if($check['role']=='Student')
      {
         echo "<meta http-equiv='refresh' content='0; URL=Student_blackboard.php?user_name=$user_name'>";
       }
      
     }
     else{
        echo '<meta http-equiv="refresh" content="0; URL=Login_page.php">';
     }
     ?> 
</body>
<html>
