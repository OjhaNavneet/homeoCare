<?php
include("connection.php");
$result=mysqli_query($con,"Select* from appointment1 order by id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointmet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>




<body>
<!------- first container starts---->   
<div class="container">
  <div class="row justify-content-around">

    <div class="col-lg-4 col-md-6 box1">
      <div class="head1"><h1>Add new Paitents</h1></div>
      <div class="form">

<form class="row g-3 needs-validation" name="myform" action="demo.php" method="POST" onsubmit="return validate()">
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" name="fname" required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02"  name="lname" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Age</label>
    <input type="number" class="form-control" id="validationCustom01" name="age" required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Contact</label>
    <input type="text" class="form-control" id="validationCustom01" name="contact" required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" name="city" required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom04" class="form-label">Select Gender</label>
    <select class="form-select" id="validationCustom04" name="gender" required>
      <option selected disabled value="">Choose</option>
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required>
    </div>
  </div>
  <div class="col-lg-12">
    <button class="btn btn-primary" name="submit" value="register" type="submit" style="width: 100%">Book Appointment</button>
  </div>
</form>
    </div>
    </div>

<!------second container starts----->

<div class="col-lg-6 col-md-12 box2">
  <div class="head2"><h2>Appointmets (Today)</h2></div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Paitent Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact</th>
      <th scope="col">Appointment Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($res = mysqli_fetch_array($result))
     {
        echo "<tr>";
        echo "<td>".$res['id']."</td>";
        echo "<td>".$res['fname']."</td>";
        echo "<td>".$res['age']."</td>";
        echo "<td>".$res['gender']."</td>";
        echo "<td>".$res['contact']."</td>";
        echo "<td>".$res['date']."</td>";
        echo "</tr>";
     }
    ?>
    </tbody>
</table>
    </div>
  </div>
</div>

<!---js validation code---->
<script>
  function validate()  
  { 
    var x=document.myform.email.value;
    var y=document.myform.contact.value;
    var z=document.myform.city.value;
    if(isNaN(y))
    {
      alert("please enter valid mobile number");
      return false;
    }
    if(y.length!=10)
    {
      alert("please enter valid mobile number");
      return false;
    }
    var regx = /^[A-Za-z][-a-zA-Z ]+$/;
    if(!regx.test(z))
    {
      alert("please enter valid City name");
      return false;
    } 
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
      alert("Please enter a valid e-mail address");  
      return false;  
      }  
  }
</script>




<!----Java script files------->

<script src="script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>