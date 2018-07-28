<?php
session_start();
$_SESSION['username']=$_POST['username'];
?>


<html>
  <head>
   <title>Chat Room</title>
    </head>
    <FRAMESET cols="1050,*"> 
     <FRAME src="leftside.php">
      <FRAMESET rows="*,100">
      <FRAME src="msg.php">
      <FRAME src="newmsg.php">
      
</html>
