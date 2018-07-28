<html>
<head><title>Chat Room</title>
<meta http-equiv="refresh" content="1";
</head>
<body>

<?php
   
   $link = new mysqli('localhost','root','','CF');
    if(!$link){
       die(" Couldn't Connect " .mysqli_error());}
  
        $query = "SELECT * FROM messages";
        if($result = mysqli_query($link,$query)){
          while($row = mysqli_fetch_row($result)){
            echo $row['3'].' says: '.$row['1'].'</br>';
          }
          mysqli_free_result($result);
      }
    mysqli_close($link);
?>

</body>
</html>