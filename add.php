<?php 
   include_once('config.php');
 ?>
<?php
if(isset($_POST['submit'])){
    $USERNAME=$_POST['USERNAME'];
    $EMAIL=$_POST['EMAIL'];
    $BRANCH=$_POST['BRANCH'];
    $YEAR=$_POST['YEAR'];
    $GENDER=$_POST['GENDER'];
    $CITY=$_POST['CITY'];
    $sql = "INSERT INTO `users` ( `username`, `email`, `gender`, `city`) VALUES ( '$USERNAME', '$EMAIL', '$GENDER', '$CITY')";
    mysqli_query($conn,$sql);
    $sql = "INSERT INTO `student_details` ( `username`, `branch` , `year`) VALUES ( '$USERNAME', '$BRANCH', '$YEAR')";
    mysqli_query($conn,$sql);
}
?>
<html>
<head>
	<title>hello everybody</title>
</head>
<body><h1>Student table</h1>
	<form method="POST" action="add.php">
		USERNAME<input type="text" name="USERNAME" required="">
		<br>
		EMAIL <input type="email" name="EMAIL" required="">
		<br>
		BRANCH <input type="text" name="BRANCH" required="">
		<br>
		YEAR <input type="text" name="YEAR" required="">
		<br>
		GENDER
		 <input type="radio" value="MALE" name="GENDER">MALE
         <input type="radio" value="FEMALE" name="GENDER">FEMALE
         <br>
		CITY <input type="text" name="CITY" required="">
		<br>
		 
     	 <br>
		 <input type="submit" value="submit" name="submit"><div style="align-self: center;">
		 </div>
	</form>
</body>
</html>
