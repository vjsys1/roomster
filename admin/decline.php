<?php 
 $mysqlserverhost = "localhost";
 $database_name = "id18768632_test";
 $username_mysql = "id18768632_test123";
 $password_mysql = "zKUN0jmBMB?E2V*n";
 // -----------------------------------------------//


     $con = mysqli_connect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
     $c = "SELECT email FROM hostel LIMIT 1";
     $ch = mysqli_query($con, $c);
     if($ch >0 ){
    while($row = $ch -> fetch_object()){
        $email= $row->email;
        
    }
    
    
     }
     else{
        printf("Errormessage: %s\n", mysqli_error($con));
     }

 ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "roomsterinc.2022@gmail.com";

$to = $email;
$subject = "Confirmation mail";
$message = "Your request has been decline";
$headers = "From:" . $from;
if(mail($to,$subject,$message, $headers)) {
    echo '<script>alert("Confimation!! Request Decline")</script>';
  
} else {
      printf("Errormessage: %s\n", mysqli_error($con));
}

$d ="DELETE FROM hostel LIMIT 1";
$d1 = mysqli_query($con, $d);
if(!$d1)
{
    
     printf("Errormessage: %s\n", mysqli_error($con));
}

?>