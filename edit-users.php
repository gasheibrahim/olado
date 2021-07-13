<?php
    include "config.php";
    $id=$_GET["id"];
    $res=mysqli_query($con, "select * from users where id=$id");
    while($row=mysqli_fetch_array($res))
    {
        $phone=$row["phone"];
        $email=$row["email"];
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Update Users</title>
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
<h3 style="margin-left:45%;">Update Users Table</h3>
<div class="container" style="width:50%;margin-left:24.5%;">
  <form method="POST" action="">
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
        <label>Email</label>
      </div>
      <div class="col-75">
        <input type="email" name="email" value="<?php echo $email;?>" placeholder="Your Email..">
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
    mysqli_query($con, "update users set phone='$_POST[phone]', email='$_POST[email]' where id=$id") or die(mysqli_error($con));
    ?>
    <script type="text/javascript">
        window.location="index.php"
    </script>
    <?php
}
?>
</body>
</html>