<?php


   

$mysqlserverhost = "localhost";
 $database_name = "id18768632_test";
 $username_mysql = "id18768632_test123";
 $password_mysql = "zKUN0jmBMB?E2V*n";
 // -----------------------------------------------//
    // -----------------------------------------------//
   

    $conn = mysqli_connect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
    if (!$conn) {
          echo "Connection unsuccess ";
    }
        
      
  
 

    $email = "";
    
    $name = "";
    $errors = array();

 // Taking all 5 values from the form data(input)



$name =    $_POST['name'];
$fname =  $_REQUEST['fname'];
$pno =   $_REQUEST['pno'];
$fpno =  $_REQUEST['fpno'];
$email =  $_REQUEST['email'];
$age =  $_REQUEST['age'];
$gender =  $_REQUEST['gender'];
$ownerid =  $_REQUEST['ownerid'];
$address =  $_REQUEST['address'];
$prof =  $_REQUEST['prof'];
$file = $_FILES['image']['name'];
    $target = "admin/uploads/".basename($file);
    if(count($errors) === 0){
 
    
        $insert_data = "INSERT INTO pg (name,fname,pno,fpno,email,age,gender,ownerid,address,prof,file) 
        values
       ('$name', '$fname', '$pno', '$fpno', '$email','$age','$gender','$ownerid','$address','$prof','$file')";
      
     
   }
   $data_check = mysqli_query($conn, $insert_data);
   
if($data_check){
         header('location:https://roomsterinc.000webhostapp.com/search-page/pay.html');
}else{
  printf("Errormessage: %s\n", mysqli_error($conn));
}
$sql = "SELECT id FROM uploaded_files ORDER BY id DESC";
			$result = mysqli_query($conn, $sql);
			if ($row = mysqli_fetch_assoc($result)) {
				$link = $base_url . "download.php?id=" . $row['id'];
				$link_status = "display: block;";
			}

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
    


 ?>
