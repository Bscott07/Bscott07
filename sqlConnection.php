sqlConnection.php
<!DocTYPE html>
<html>
<head>
  <title>MYSQL connection with php</title>
  </head>
  <body>
    <?php
    $sername_name='localhost';
    $user_name='root';
    $password="";
    $database="mydatabase";

    $connection=new mysqli($server_name,$user_name,$password,$database);
    if ($connection->connect_error) {
    	die("Unableto connect".$connection->connect_error);
      }
      echo "Database connection successful";
    ?>
  </body>
  </html>