<?php
include "config.php";
$id=$_GET["id"];
$res=mysqli_query($con, "select * from users_address where ida=$id");
while($row=mysqli_fetch_array($res))
{
      $users_id=$row['users_id'];
      $country=$row['country'];
      $province=$row['province'];
      $district=$row['district'];
      $sector=$row['sector'];
      $cell=$row['cell'];
      $village=$row['village']; 
      $street=$row['street'];
      $house=$row['house'];
      $Phone=$row['Phone'];
      $status=$row['status'];
      $bill=$row['bill'];
      $shipping=$row['shipping'];
      $zip=$row['zip'];
      $fullname=$row['fullname'];
      $gender=$row['gender'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Update Users Address</title>
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
<h3 style="margin-left:45%;">Update users Address</h3>
<div class="container" style="width:50%;margin-left:24.5%;">
  <form method="POST" action="">
    <div class="row">
      <div class="col-25">
        <label>User Id</label>
      </div>
      <div class="col-75">
        <input type="text" name="users_id" value="<?php echo $users_id;?>" placeholder="Enter User_id">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>country</label>
      </div>
      <div class="col-75">
        <input type="text" name="country" value="<?php echo $country;?>" placeholder="Your country..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>province</label>
      </div>
      <div class="col-75">
        <input type="text" name="province" value="<?php echo $province;?>" placeholder="Your province..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>district</label>
      </div>
      <div class="col-75">
        <input type="text" name="district" value="<?php echo $district;?>" placeholder="Your district..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>sector</label>
      </div>
      <div class="col-75">
        <input type="text" name="sector" value="<?php echo $sector;?>" placeholder="Your sector..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>cell</label>
      </div>
      <div class="col-75">
        <input type="text" name="cell" value="<?php echo $cell;?>" placeholder="Your cell..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>village</label>
      </div>
      <div class="col-75">
        <input type="text" name="village" value="<?php echo $village;?>" placeholder="Your village..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>street</label>
      </div>
      <div class="col-75">
        <input type="text" name="street" value="<?php echo $street;?>" placeholder="Your street..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>house</label>
      </div>
      <div class="col-75">
        <input type="text" name="house" value="<?php echo $house;?>" placeholder="Your house..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Phone</label>
      </div>
      <div class="col-75">
        <input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Your Phone Number..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>status</label>
      </div>
      <div class="col-75">
        <input type="text" name="status" value="<?php echo $status;?>" placeholder="Your status..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>bill</label>
      </div>
      <div class="col-75">
        <input type="text" name="bill" value="<?php echo $bill;?>" placeholder="Your bill Number..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>shipping</label>
      </div>
      <div class="col-75">
        <input type="text" name="shipping" value="<?php echo $shipping;?>" placeholder="Your shipping..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>zip</label>
      </div>
      <div class="col-75">
        <input type="text" name="zip" value="<?php echo $zip;?>" placeholder="Your ZIP..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>fullname</label>
      </div>
      <div class="col-75">
        <input type="text" name="fullname" value="<?php echo $fullname;?>" placeholder="Your Fullname..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>gender</label>
      </div>
      <div class="col-75">
        <input type="text" name="gender" value="<?php echo $gender;?>" placeholder="Your gender..">
      </div>
    </div><br>
    <div class="row">
      <input type="submit" name="submit" value="Update">
    </div>
  </form>
</div>
<?php 
if(isset($_POST["submit"]))
{
    mysqli_query($con, "update users_address set users_id='$_POST[users_id]', country='$_POST[country]', province='$_POST[province]', district='$_POST[district]', sector='$_POST[sector]', cell='$_POST[cell]', village='$_POST[village]', street='$_POST[street]', house='$_POST[house]', phone='$_POST[phone]', status='$_POST[status]', bill='$_POST[bill]', shipping='$_POST[shipping]', zip='$_POST[zip]', fullname='$_POST[fullname]', gender='$_POST[gender]' where ida=$id") or die(mysqli_error($con));
    ?>
    <script type="text/javascript">
        window.location="usersaddress.php"
    </script>
    <?php
}
?>
</body>
</html>