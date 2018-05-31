<?php 
 include 'database.php'; 
 include 'dbinc.php'; 
?>  
<!doctype html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Guest Book</title> 
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>  
<body> 
<h4><strong>Enter your Comment Here:</strong></h4> 
<?php 
 echo "<form method='POST' action='".setComments($conn)."'> 
  <input type='hidden' name='userid' value='Anonymous'> 
  <textarea name='comments'></textarea><br /> 
  <button type='submit' name='Submit'>Comment</button> 
  </form>"; 
?> 
</body> 
</html> 