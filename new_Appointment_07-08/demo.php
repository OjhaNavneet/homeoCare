<?php
    include("connection.php");
    if(isset($_POST['submit']))
    {
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $age=$_POST['age'];
       $contact=$_POST['contact'];
       $city=$_POST['city'];
       $gender=$_POST['gender'];
       $email=$_POST['email'];

       $result=mysqli_query($con,"INSERT into appointment1 values('','$fname','$lname','$age','$contact','$city','$gender','$email',current_timestamp())");
       
       if($result)
       {
           header("location: appointment.php");
       }
       else
       {
           echo "insertion failed ";
       }
    }
    ?>