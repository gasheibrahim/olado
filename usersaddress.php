<?php
    include('config.php');
    if(isset($_GET['del']))
		  {
		    mysqli_query($con,"delete from users_address where ida = '".$_GET['id']."'");
		  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Address</title>
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
<h2 style="margin-left: 45%;"><a href="createuseraddress.php" style="text-decoration:none;">Add User Address</a></h2>
<table>
  <tr>
    <th>ID</th>
    <th>country</th>
    <th>province</th>
    <th>district</th>
    <th>sector</th>
    <th>cell</th>
    <th>village</th>
    <th>street</th>
    <th>house</th>
    <th>phone</th>
    <th>status</th>
    <th>bill</th>
    <th>shipping</th>
    <th>zip</th>
    <th>fullname</th>
    <th>gender</th>
    <th>Action</th>
  </tr>
  <?php $query=mysqli_query($con, "select * from users_address");
    $id=1;
    while($row=mysqli_fetch_array($query))
    {
    ?>
  <tr>
    <td><?php echo htmlentities($id);?></td>
    <td><?php echo htmlentities($row['country']);?></td>
    <td><?php echo htmlentities($row['province']);?></td>
    <td><?php echo htmlentities($row['district']);?></td>
    <td><?php echo htmlentities($row['sector']);?></td>
    <td><?php echo htmlentities($row['cell']);?></td>
    <td><?php echo htmlentities($row['village']);?></td>
    <td><?php echo htmlentities($row['street']);?></td>
    <td><?php echo htmlentities($row['house']);?></td>
    <td><?php echo htmlentities($row['phone']);?></td>
    <td><?php echo htmlentities($row['status']);?></td>
    <td><?php echo htmlentities($row['bill']);?></td>
    <td><?php echo htmlentities($row['shipping']);?></td>
    <td><?php echo htmlentities($row['zip']);?></td>
    <td><?php echo htmlentities($row['fullname']);?></td>
    <td><?php echo htmlentities($row['gender']);?></td>
    <td>
        <a href="edit-usersaddress.php?id=<?php echo $row['ida']?>">Edit</a>
        <a href="usersaddress.php?id=<?php echo $row['ida']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
    </td>
  </tr>
  <?php $id=$id+1; } ?>
</table>
</body>
</html>