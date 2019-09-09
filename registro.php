1 <?php
2 require_once(’funciones.php’);
3 conectar(’localhost’, ’root’, ’’, ’base’);
4
5 //Recibir
6 $nombre = strip_tags($_POST[’nombre’]);
7 $email = strip_tags($_POST[’email’]);
8 $user = strip_tags($_POST[’user’]);
9 $password = strip_tags(sha1($_POST[’password’]));
10 $query = @mysql_query(’SELECT * FROM usuarios WHERE user="’.mysql_real_escape_string($user).’"’);
11 if($existe = @mysql_fetch_object($query))
12 {
13 echo ’El usuario ’.$user. ’ya existe.’;
14 }
15 else{
16 $meter = @mysql_query(’INSERT INTO usuarios (nombre, email, user, password) values 
("’.mysql_real_escape_string($nombre).’", "’.mysql_real_escape_string($email).’", "’.mysql_real_escape_string($user).’", "’.mysql_real_escape_string($password).’")’);
17 if($meter)
18 {
19 echo ’Usuario registrado con exito’;
20 }else{
21 echo ’Hubo un error en el registro.’;
22 }
23 }
24 ?>