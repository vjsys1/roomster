<?php require_once "controllerUserData.php"; ?>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM admintable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        .th{
            	border=1px solid black;
        }
    </script>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <title>
        <?php echo $fetch_info['name'] ?> | Home</title>
            <link rel="stylesheet" href="index.css">
 <link rel="stylesheet" href="navstyle.css">
    <link rel="icon" href="images/logo-removebg-preview.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vish.css">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Login Error</title>
    <style>
        a {
            text-decoration: none;
        }
         h2 {
            text-align: center;
            margin-top:4%;
        }
        
        .-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 216px;
            height: 56px;
            text-align: center;
            border-radius: 12px;
            margin-left: 42%;
            margin-top:10%;
        }
        
        .-btn:hover {
            opacity: .8;
        }
        
        .-bg {
            background: #1c449b;
        }
        
        .-txt {
            color: #fff;
        }
        
        .-xs {
            font-size: 12px;
        }
        
       
    </style>
</head>
<body>
   
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://roomsterinc.000webhostapp.com"><img class="logo" src="images/logoing-removebg-preview.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                   
                        <li class="nav-items"><a class="nav-link" href="regs.php">Add hostel/Pg</a></li>
                        <!-- <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                        <li class="nav-item">
                            <button style="color:black;" class="btn btn-outline-success" type="submit">                               <?php 
                               if($status != "verified"){ echo "<a href='https://roomsterinc.000webhostapp.com/log.html".$link_address."'>Log-In</a>"; }
                               else{
                               echo "<a href='logout-user.php".$link_address."'>Log-Out</a>";} ?> </button>




                        </li>


                </ul>
            </div>
        </div>
    </nav>

    <body>
    <div class="error">
           <h2> Select the database you want to see 📝 </h2>
        <a href="hostel.php" class="-btn -bg -txt">
            Hostel
          </a>
           <div class="error">
       
        <a href="pg.php" class="-btn -bg -txt -btns">
            PG 
          </a>
    </div>
    </div>
</body>
</html>