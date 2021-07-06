<?php
    include('config.php');
    if(isset($_POST['save']))
{
    $users_id=$_POST['users_id'];
    $country=$_POST['country'];
    $province=$_POST['province'];
    $district=$_POST['district'];
    $sector=$_POST['sector'];
    $cell=$_POST['cell'];
    $village=$_POST['village'];
    $street=$_POST['street'];
    $house=$_POST['house'];
    $Phone=$_POST['Phone'];
    $status=$_POST['status'];
    $bill=$_POST['bill'];
    $shipping=$_POST['shipping'];
    $zip=$_POST['zip'];
    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
;    $sql = "INSERT INTO users_address (users_id, country, province, district, sector, cell, village, street, house, phone, status, bill, shipping, zip, fullname, gender)
     VALUES ('$users_id', '$country','$province', '$district','$sector','$cell','$village','$street','$house','$phone','$status','$bill','$shipping','$zip','$fullname','$gender')";
    if($con->query($sql) === TRUE){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('User Address Has Been Added Successfuly, Thank You');
        window.location.href='createuserdata.php';
        </script>");
    }
    else{
        echo "Undone". $sql ."</br>". $con->error;
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Create Users Address</title>
</head>
<body>
<header>  
<nav>  
<ul>  
<li>  
<a href="index.php"> Users Table </a>  
</li>  
<li>  
<a href="usersaddress.php"> Users Address </a>  
</li>  
<li>  
<a href="userdata.php"> Users Data </a>  
</li>  
</ul>  
</nav>  
</header>
<h3 style="margin-left:45%;">Create users Address</h3>
<div class="container" style="width:50%;margin-left:24.5%;">
  <form method="POST" action="createuseraddress.php">
    <div class="row">
      <div class="col-25">
        <label>User Id</label>
      </div>
      <div class="col-75">
        <input type="text" name="users_id" placeholder="Enter User_id">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>country</label>
      </div>
      <div class="col-75">
        <input type="text" name="country" placeholder="Your country..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>province</label>
      </div>
      <div class="col-75">
        <input type="text" name="province" placeholder="Your province..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>district</label>
      </div>
      <div class="col-75">
        <input type="text" name="district" placeholder="Your district..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>sector</label>
      </div>
      <div class="col-75">
        <input type="text" name="sector" placeholder="Your sector..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>cell</label>
      </div>
      <div class="col-75">
        <input type="text" name="cell" placeholder="Your cell..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>village</label>
      </div>
      <div class="col-75">
        <input type="text" name="village" placeholder="Your village..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>street</label>
      </div>
      <div class="col-75">
        <input type="text" name="street" placeholder="Your street..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>house</label>
      </div>
      <div class="col-75">
        <input type="text" name="house" placeholder="Your house..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Phone</label>
      </div>
      <div class="col-75">
        <input type="text" name="phone" placeholder="Your Phone Number..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>status</label>
      </div>
      <div class="col-75">
        <input type="text" name="status" placeholder="Your status..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>bill</label>
      </div>
      <div class="col-75">
        <input type="text" name="bill" placeholder="Your bill Number..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>shipping</label>
      </div>
      <div class="col-75">
        <input type="text" name="shipping" placeholder="Your shipping..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>zip</label>
      </div>
      <div class="col-75">
        <input type="text" name="zip" placeholder="Your ZIP..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>fullname</label>
      </div>
      <div class="col-75">
        <input type="text" name="fullname" placeholder="Your Fullname..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>gender</label>
      </div>
      <div class="col-75">
        <input type="text" name="gender" placeholder="Your gender..">
      </div>
    </div><br>
    <div class="row">
      <input type="submit" name="save" value="Insert">
    </div>
  </form>
</div>
</body>
</html>