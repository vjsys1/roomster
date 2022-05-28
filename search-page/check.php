<?php
   $mysqlserverhost = "localhost";
 $database_name = "id18768632_test";
 $username_mysql = "id18768632_test123";
 $password_mysql = "zKUN0jmBMB?E2V*n";
    // -----------------------------------------------//
    session_start();

        $conn = mysqli_connect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
        if (!$conn) {
              echo "Connection problem ";
        }
       

if(isset($_POST['submit']))
{
    
    

    $brands =$_POST['label'];


    // echo $brands;

    foreach($brands as $item)
    {

   
        $query = "INSERT INTO demo (name) VALUES ('$item')";
        
        $query_run = mysqli_query($conn, $query);
       
    }
  
     

    if(!$query_run)
    {
    
            printf("Errormessage: %s\n", mysqli_error($conn));
       
    }
    else{
           header('location: https://roomsterinc.000webhostapp.com/regs.php');
   
    
  
} 
}
?>
