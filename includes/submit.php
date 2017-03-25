<?php
	session_start();
	include("database.php");
	$name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
	$content = $_POST['content'];

    if($name==" " || $email==" " || $phone==" " || $content==" "){
      header("Location:../contact.php");
    }

  // $today = date("m.d.y");

	$query = "insert into contact values('$name','$email','$phone','$subject','$content');";

	$result = mysqli_query($conn,$query);
	$_SESSION["success"]= "Successfully recorded the details"; 
  header("Location:../contact.php");
	?>
