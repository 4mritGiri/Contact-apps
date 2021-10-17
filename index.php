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
   <form action="adddata.php" method="post">
	<div class="main">
	 <lable for="name">Name :-</lable>
	 <input type="text" name="name" id="name" required="required" placeholder="Enter Name"><br><br>
	 <lable for="contact">Contact </lable>
         <input type="number" name="contact" id="contact" required="required" placeholder="Enter Phone Number"><br><br>
	 <input type="submit" value="save">
	</div>
    </form>
<hr>
<h2>List Of Contact </h2>
<table>
 <tr>
 
  <th>Name</th>
  <th>phone no.</th>
 <th>Action</th>
 </tr>
<?php
include'db.php';
$sql = "SELECT * FROM names";

$result = mysqli_query($conn,$sql);
 if($result){
	while($row = mysqli_fetch_assoc($result)){
	$id =$row['id'];
	$name =$row['name'];
	$phone =$row['phone'];

	?>
<tr>
<td><?php echo $name ?></td>
<td><?php echo $phone ?></td>
<td>
<a href ="update.php?id=<?php echo $id ?>" >Update</a>
<a href ="delet.php?id=<?php echo $id ?> ">Delet</a>
</td>
</tr>
	<?php
	}
}
       ?>
</body>
</html>
