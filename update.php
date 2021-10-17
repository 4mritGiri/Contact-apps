<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CONTACT APP</title>

  <!-- HTML -->

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

 <header>
  <h1 align="center">Contact app</h1>
 </header>
 <h2>Update Contact details</h2>
<?php
 include 'db.php';
  $id = $_GET['id'];
  $sql = "SELECT * FROM names WHERE id=".$id;
  $result = mysqli_query($conn,$sql);
    if($result){
	$row = mysqli_fetch_assoc($result);
	$cname=$row['name'];
	$cphone=$row['phone'];
    }

?>
   <form action="edit.php" method="post">
        <div class="main">
         <label for="name">Name :</lable><br>
         <input type="text" name="name" id="name" value="<?php global $cname; echo $cname ?>" required  placeholder="Enter Name"><br>
         <label for="contact">Phone No.:</lable><br>
         <input type="number" name="contact" id="contact" value="<?php global $cphone; echo $cphone ?>" required  placeholder="Enter Phone Number"><br><br>
	<input type="hidden" name="id" id="id" value="<?php global $id; echo $id?>" required>
         <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
