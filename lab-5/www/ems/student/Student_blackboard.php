<!Doctype html>
<html>
    <head>
        <title>Blackboard: Faculty</title>
        <link rel="stylesheet" href="Student_blackboard.css?v=<?php echo time(); ?>">
</head>
<body>   
   <?php
    include ("Search_bar.php");
    include("connection.php");
    $user_name=$_GET['user_name'];

  
    $sql= "SELECT * FROM student_tab WHERE user_id = '$user_name'";
     $result = mysqli_query($connect,$sql);
     $check = mysqli_fetch_array($result);
   ?>
   
   <div class="container">
    <h1 class="welcome">Welcome <?php echo $check['Stu_name'] ?> </h1>
    <div class="container_2">
   <div class="square">
    <div class="title_square">
       Personal Details
  </div>
  <div class="con">
     <p class="info">ID:  </p>
     <p><?php echo $check['Stu_id'] ?></p>
     
     <p class="info">Student Year of Enrollment:  </p>
     <p><?php echo $check['Stu_year_of_enrollment'] ?></p>
     <p class="info">Major:  </p>
     <p><?php echo $check['Stu_major'] ?></p>
</div>
<?php
$fac_id='gvarner';
$sql= "SELECT * FROM courses_tab WHERE Fac_id='$fac_id'";
     $result = mysqli_query($connect,$sql);
     $check = mysqli_fetch_array($result);
     
   ?>
 </div>
 <div class="square">
 <div class="title_square">
    Department's Faculty
</div>
<div>
     <p class="info">Course Name:  </p>
     <p><?php echo $check['Course_id'] ?></p>
     <p class="info">Offered In:  </p>
     <p><?php echo $check['Offered_in'] ?></p>
     <p class="info">Credits:  </p>
     <p><?php echo $check['Credits'] ?></p>
     <p class="info">Pre-Req:  </p>
     <p><?php echo $check['Pre-req'] ?></p>
     <p class="info">Type:  </p>
     <p><?php echo $check['Type'] ?></p>
</div>
</div>
<?php
$fac_id=$check['Fac_id'];
$sql= "SELECT * FROM courses_tab WHERE Fac_id='$fac_id'";
     $result = mysqli_query($connect,$sql);
     $check = mysqli_fetch_array($result);
     
   ?>
 </div>
 <div class="square">
 <div class="title_square">
    Courses
</div>
<div>
     <p class="info">Course Name:  </p>
     <p><?php echo $check['Course_id'] ?></p>
     <p class="info">Offered In:  </p>
     <p><?php echo $check['Offered_in'] ?></p>
     <p class="info">Credits:  </p>
     <p><?php echo $check['Credits'] ?></p>
     <p class="info">Pre-Req:  </p>
     <p><?php echo $check['Pre-req'] ?></p>
     <p class="info">Type:  </p>
     <p><?php echo $check['Type'] ?></p>
</div>
</div>
</div>
</div>
</body>
</html>
