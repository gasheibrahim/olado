<?php
    include('config.php');
    $pid=intval($_GET['id']);
    if(isset($_POST['save']))
{
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $sql=mysqli_query($con,"update users set phone='$phone', email='$email' where id='$pid' ");
    if($con->query($sql) === TRUE){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('User Has Been Updated Successfuly, Thank You');
        window.location.href='index.php';
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
<?php 

$query=mysqli_query($con,"select * from users where users.id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<div class="container" style="width:50%;margin-left:24.5%;">
  <form method="POST" action="createusers.php">
    <div class="row">
      <div class="col-25">
        <label>Phone</label>
      </div>
      <div class="col-75">
        <input type="text" name="phone" value="<?php echo htmlentities($row['phone']);?>" placeholder="Your Phone Number..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Email</label>
      </div>
      <div class="col-75">
        <input type="email" name="email" value="<?php echo htmlentities($row['email']);?>" placeholder="Your Email..">
      </div>
    </div><br>
    <div class="row">
      <input type="submit" name="save" value="Update">
    </div>
  </form>
</div>
<?php } ?>
</body>
</html>