<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
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
<?php 
  $email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email == false && $password == false){
    header('Location: https://roomsterinc.000webhostapp.com/log.html');
    
 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navstyle.css">
    <link rel="stylesheet" href="style.css">

    <script src="script.js"></script>

  <title>
        <?php echo $fetch_info['name'] ?> | Home</title>
            <link rel="stylesheet" href="index.css">
 <link rel="stylesheet" href="navstyle.css">
    <link rel="icon" href="images/logo-removebg-preview.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div id="preloder">

    </div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://roomsterinc.000webhostapp.com"><img class="logo" src="images/logoing-removebg-preview.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://roomsterinc.000webhostapp.com">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">BOOKING</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="https://roomsterinc.000webhostapp.com/About.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://roomsterinc.000webhostapp.com/index.php">CONTACT US</a>
                    </li>
                    <li class="nav-item">

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
    <div class="heading">
        <center>
            <h1>Select the hostel</h1>
        </center>

    </div>

    <div class="outer-wrapper">
        <div class="table-wrapper">
            <table id="emp-table">
                <thead>
                    <th col-index=1>Hostel ID</th>
                    <th col-index=2>Name</th>
                    <th col-index=3>State
                        <select class="table-filter" onchange="filter_rows()">
                            <option value="all"></option>
                        </select>
                    </th>

                    <th col-index=4>City
                        <select class="table-filter" onchange="filter_rows()">
                            <option value="all"></option>
                        </select>
                    </th>

                    <th col-index=5>DESCRIPTION
                    </th>
                    <th col-index=6>Images
                    </th>

                </thead>
                <tbody>
                    <tr>
                        <td>101</td>
                        <td>JIET hostel</td>
                        <td>Rajasthan</td>
                        <td>Jodhpur</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim ex reiciendis
                            do <br><a href="dummy.html">know more</a></td>
                        <td><img src="data:image/jpeg;base64,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"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Jaipur Jantur Hostel</td>
                        <td>Rajasthan</td>
                        <td>Jaipur</td>
                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae enim quisquam, totam error
                            re <br><a href="dummy1.html">know more</a></td>
                        <td><img src="data:image/jpeg;base64,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"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>103</td>
                        <td>Crown Hostel</td>
                        <td>Rajasthan</td>
                        <td>Barmer</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim ex reiciendis
                            do <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaQG0ID8Hu65n_YnBy7lMwwUJ16rgYpKO_Zg&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>104</td>
                        <td> Destiny Hostel</td>
                        <td>Delhi</td>
                        <td>New Delhi</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim ex reiciendis
                            do <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNh-qaAN8t3M9NeSFD6dcmsYxP7dmpv6SMTA&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>201</td>
                        <td>Evolution Hostel</td>
                        <td>Maharastra</td>
                        <td>Mumbai</td>
                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae enim quisquam, totam error
                            re <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXogkC-lMI27A03wy2zBGk8-5MQTMtIYdMRQ&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>202</td>
                        <td>Firebird Hostel</td>
                        <td>Jammu and Kashmir</td>
                        <td>Jammu</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim ex reiciendis
                            do <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHtgondBOg6HlIqsNyLtFA_5M3aT-ZYAy2tw&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>203</td>
                        <td>Gorilla Hostel</td>
                        <td>Tamil Nadu</td>
                        <td>Dindigul</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim ex reiciendis
                            do <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRHJdUBrjQFFczZGHTPprUKlM6Jan6d_UM8w&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>204</td>
                        <td>Grey Hostel</td>
                        <td>Tamil Nadu</td>
                        <td>Tiruchchirappalli</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim ex reiciendis
                            do <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7_fi1Fy8GCsH8bWJKwdw12MW2KygMIpqr8Q&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>301</td>
                        <td>Mighty Hostel</td>
                        <td>Jammu and Kashmir</td>
                        <td>Srinagar</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim ex reiciendis
                            do <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv-di1yz1VrL5k2kVPbebYfCAKclNZYEAFwA&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>302</td>
                        <td>Pacific Hostel</td>
                        <td>Himachal Pradesh</td>
                        <td>Shimla</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim ex reiciendis
                            do <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeTJziyrkqksUgY4A1sovkaTfzJbZmlnohKQ&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>303</td>
                        <td>Oracle Hostel</td>
                        <td>Himachal Pradesh</td>
                        <td>Kullu</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita laborum numquam commodi.
                            Ha <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQH352Iufam80Xm5B9hjtcBBBsh1-hhkCrffw&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>
                    <tr>
                        <td>304</td>
                        <td> Revolution Hostel</td>
                        <td>Tamil Nadu</td>
                        <td>Madurai</td>
                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae enim quisquam, totam error
                            re <br><a href="#">know more</a></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8bWW-xcXekheYM4bEgKLhS8xrdZSuvDDnvQ&usqp=CAU"
                                alt=""><br>
                            <a href="seat.php">BOOK NOW</a>
                        </td>
                    </tr>


                </tbody>
            </table>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dWEuF1tjdU4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

            <script>
                var loder = document.getElementById('preloder');
                window.addEventListener("load", function () {
                    loder.style.display = "none";
                })
            </script>
            <script>
                window.onload = () => {
                    console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
                };

                getUniqueValuesFromColumn()

            </script>
        </div>
    </div>
</body>

</html>