<?php
    include('config.php');
    if(isset($_GET['del']))
		  {
		    mysqli_query($con,"delete from users where id = '".$_GET['id']."'");
		  }
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
<h2 style="margin-left: 45%;"><a href="createusers.php" style="text-decoration:none;">Add User</a></h2>
<table style="margin-left: 25%;">
  <tr>
    <th>ID</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  <?php $query=mysqli_query($con, "select * from users");
    $id=1;
    while($row=mysqli_fetch_array($query))
    {
    ?>
  <tr>
    <td><?php echo htmlentities($id);?></td>
    <td><?php echo htmlentities($row['phone']);?></td>
    <td><?php echo htmlentities($row['email']);?></td>
    <td>
        <a href="edit-users.php?id=<?php echo $row["id"]; ?>">Edit</a>
        <a href="users.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
    </td>
  </tr>
  <?php $id=$id+1; } ?>
</table>
</body>
</html>