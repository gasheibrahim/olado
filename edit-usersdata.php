<?php
    include('config.php');
    $pid=intval($_GET['id']);
    if(isset($_POST['save']))
{
    $users_id=$_POST['users_id'];
    $social1=$_POST['social1'];
    $social2=$_POST['social2'];
    $social3=$_POST['social3'];
    $social4=$_POST['social4'];
    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
    $var1 = rand(1111,9999); 
    $var2 = rand(1111,9999);   
    $var3 = $var1.$var2;
    $var3 = $var3; 
    $fnm = $_FILES["image"]["name"];
    $dst = "images/".$var3.$fnm;
    $dst_db = "images/".$var3.$fnm;
    move_uploaded_file($_FILES["image"]["tmp_name"],$dst); 
    $sql=mysqli_query($con,"update users_data set users_id='$users_id', social1='$social1', social2='$social2', social3='$social3', social4='$social4', fullname='$fullname', gender='$gender', image='$dst_db' where id='$pid' ");
    if($con->query($sql) === TRUE){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('User Data Has Been Updated Successfuly, Thank You');
        window.location.href='userdata.php';
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
    <title>Update User Data</title>
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
<h3 style="margin-left:45%;">Update User Data</h3>
<?php 

$query=mysqli_query($con,"select * from users_data where users_data.idd='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<div class="container" style="width:50%;margin-left:24.5%;">
  <form method="POST" action="createuserdata.php" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label>user Id</label>
      </div>
      <div class="col-75">
        <input type="text" name="users_id" value="<?php echo htmlentities($row['users_id']);?>" placeholder="User Id..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Social 1</label>
      </div>
      <div class="col-75">
        <input type="text" name="social1" value="<?php echo htmlentities($row['social1']);?>" placeholder="Your social1..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Social 2</label>
      </div>
      <div class="col-75">
        <input type="text" name="social2" value="<?php echo htmlentities($row['social2']);?>" placeholder="Your social2..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Social 3</label>
      </div>
      <div class="col-75">
        <input type="text" name="social3" value="<?php echo htmlentities($row['social3']);?>" placeholder="Your social3..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Social 4</label>
      </div>
      <div class="col-75">
        <input type="text" name="social4" value="<?php echo htmlentities($row['social4']);?>" placeholder="Your social4..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="fullname" value="<?php echo htmlentities($row['fullname']);?>" placeholder="Your fullname..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Gender</label>
      </div>
      <div class="col-75">
        <input type="text" name="gender" value="<?php echo htmlentities($row['gender']);?>" placeholder="Your gender..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Image Profile</label>
      </div>
      <div class="col-75">
        <input type="file" value="<?php echo htmlentities($row['image']);?>" name="image">
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