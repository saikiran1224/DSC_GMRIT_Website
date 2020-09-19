<?php
 
//Include the connection script
include_once('dbconnection.php');
 
$idea_id=uniqid(); 
$name=$_POST['name'];
$idea_gmail=$_POST['idea_gmail'];
$idea_phone = $_POST['idea_phone'];
$idea_description=$_POST['idea_description'];
$idea_summarization=$_POST['idea_summarization'];
$idea_uniqueness=$_POST['idea_uniqueness'];
$idea_title=$_POST['idea_title'];

$stmt = $conn->prepare("insert into idea_spot(idea_id,name,email_id,phone,idea_description,idea_summarization,idea_uniqueness,idea_title)values('$idea_id','$name','$idea_gmail','$idea_phone','$idea_description','$idea_summarization','$idea_uniqueness','$idea_title')");
$stmt->execute();
	
echo "<script>window.top.location='submission.html'</script>";
?>
