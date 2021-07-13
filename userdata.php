<?php
    include('config.php');
    if(isset($_GET['del']))
		  {
		    mysqli_query($con,"delete from users_data where idd = '".$_GET['id']."'");
		  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
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
<body>
<h2 style="margin-left: 45%;"><a href="createuserdata.php" style="text-decoration:none;">Add User Data</a></h2>
<table style="margin-left: 25%;">
  <tr>
    <th>ID</th>
    <th>social1</th>
    <th>social2</th>
    <th>social3</th>
    <th>social4</th>
    <th>fullname</th>
    <th>gender</th>
    <th>profile</th>
    <th>Action</th>
  </tr>
  <?php $query=mysqli_query($con, "select * from users_data");
    $id=1;
    while($row=mysqli_fetch_array($query))
    {
    ?>
  <tr>
    <td><?php echo htmlentities($id);?></td>
    <td><?php echo htmlentities($row['social1']);?></td>
    <td><?php echo htmlentities($row['social2']);?></td>
    <td><?php echo htmlentities($row['social3']);?></td>
    <td><?php echo htmlentities($row['social4']);?></td>
    <td><?php echo htmlentities($row['fullname']);?></td>
    <td><?php echo htmlentities($row['gender']);?></td>
    <td><img src="<?php echo $row['image']; ?>" width="200" height="200"></td>
    <td>
        <a href="edit-usersdata.php?id=<?php echo $row["idd"]; ?>">Edit</a>
        <a href="userdata.php?id=<?php echo $row['idd']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
    </td>
  </tr>
  <?php $id=$id+1; } ?>
</table>
</body>
</html>