1 <?php
2 function conectar($servidor, $user, $pass, $name)
3 {

4 $con = @mysql_connect($servidor, $user, $pass);
5 @mysql_select_db($name, $con);
6 }
7 ?>

