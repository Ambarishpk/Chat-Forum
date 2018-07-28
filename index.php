<html>
  <head>
   <title>Chat Room</title>
   </head>

   <?php
    session_start();
   ?>
   
    <body align="center" valign="middle">
    <form action="chatroom.php" method="POST">
       Please Enter your Name below:</br>
       <input type="text" name="username">
       <input type="submit" name="submit" value="Send">
    </form>



    </body>     
</html>