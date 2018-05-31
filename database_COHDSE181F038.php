<?php 
function setComments($conn) 
{ 
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
