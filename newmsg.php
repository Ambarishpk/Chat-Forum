<?php

session_start();

if(ISSET($_POST['message']))
{
  $link = new mysqli('localhost','root','','CF');
  if(!$link){
    die(" Couldn't Connect " .mysqli_error());}
  else{echo "";}
  $message = mysqli_real_escape_string($link, $_POST['message']);
  $username = mysqli_real_escape_string($link, $_SESSION['username']);

  $sql = "INSERT INTO messages (message,username) VALUES ('$message','$username')";
  
  $result = mysqli_query($link, $sql);
 

  mysqli_close($link);
}

echo '<hrml>';
echo '<head></head><body>';
echo '<form action="newmsg.php" method="POST">';
echo '<input type="text" name="message" autocomplete="OFF">';
echo '<input type="submit" name="send" value="Send">';
echo '</form>';
echo '</body></html>';


?>