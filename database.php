<?php 
function setComments($conn) 
{ 
$conn = mysqli_connect('localhost','root','','guest_book'); 
 $message = ''; 
 if(isset($_POST['commentSubmit'])) 
 { 
  $userid = $_POST['userid']; 
  $comment = $_POST['comments'];   
  $sql = "insert into tblcomment(userid, comments) values('$userid','$comment')"; 
  $result = $conn->query($sql); 
 } 
} 
?> 