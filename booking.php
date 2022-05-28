<?php require_once "controllerUserData.php"; ?>
<?php 
  $email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email == false && $password == false){
    header('Location: log.html');
    
 
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> aaye </h1>
</body>
</html>