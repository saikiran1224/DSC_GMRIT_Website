<?php
include_once('dbconnection.php');

$eventID=$_POST['event_id'];
$participantName=$_POST['name'];
$participantJNTUNo = $_POST['jntuno'];
$participantCity=$_POST['city'];
$participantState=$_POST['state'];
$participantDistrict=$_POST['district'];
$memberType=$_POST['member_type'];
$Organization=$_POST['company'];
$phoneNumber=$_POST['phone_number'];
$emailID=$_POST['emailID'];

$participantID = uniqid(); 


$stmt = $conn->prepare( 
	"insert into participant_details values('$participantID', '$eventID', '$participantName', '$participantCity', '$participantState', '$participantDistrict', '$memberType', '$participantJNTUNo', '$Organization', '$phoneNumber', '$emailID') "); 

  $stmt->execute();

echo "<script>window.top.location='submission.html'</script>";


?>
