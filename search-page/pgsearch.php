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
        <link rel="stylesheet" href="style2.css">

        <script src="script2.js"></script>
    <title>
            <?php echo $fetch_info['name'] ?> | Home</title>
                <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="navstyle.css">
        <link rel="icon" href="images/logo-removebg-preview.png">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <div id="preloder"></div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://roomsterinc.000webhostapp.com"><img class="logo" src="images/logoing-removebg-preview.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://roomsterinc.000webhostapp.com/index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#booking">BOOKING</a>
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
                <h1>Select the House</h1>
            </center>

        </div>

        <div class="outer-wrapper">
            <div class="table-wrapper">
                <table id="emp-table">
                    <thead>
                        <th col-index=1>Hostel ID</th>
                        <th col-index=2>Address</th>
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
                            <td>9062 State St.
                                Cedar Rapids, IA 52402</td>
                            <td>Rajasthan</td>
                            <td>Jodhpur</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim<br><a href="page2.html">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5Y4YgHWjtOwRIHdv6my1KSBv4NrTbdyfIEQ&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>8 Hickory St.
                                Biloxi, MS 39532</td>
                            <td>Andhra Pradesh</td>
                            <td>Amaravati</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae enim quisqua<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0PUNGdfPKSmkpwaLUswwHbC2LoqquWsFv6Q&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>306 New Saddle Street
                                Marysville, OH 43040</td>
                            <td>Rajasthan</td>
                            <td>Barmer</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfbKPDkvGGUE_zUj9DQS4OtzmrZQizBZAeKQ&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>104</td>
                            <td>99 Wild Rose Avenue
                                Bethpage, NY 11714</td>
                            <td>Rajasthan</td>
                            <td>Jaipur</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVzyeAPRy9jsTunCJP2JlvE2_76hVPy6RLDQ&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>201</td>
                            <td>9428 Mill Rd.
                                West New York, NJ 07093</td>
                            <td>Maharastra</td>
                            <td>Mumbai</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae enim quisqua<br><a href="#">know more</a></td>
                            <td><img src="data:image/jpeg;base64,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"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>202</td>
                            <td>
                                8458 Trusel St.
                                Apt 77
                                Oak Park, MI 48237</td>
                            <td>Rajasthan</td>
                            <td>Jodhpur</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC_LTWOTYYPF5Zhto5S9qir66RxTAXr0DPug&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>203</td>
                            <td>851 East Constitution St.
                                Reynoldsburg, OH 43068</td>
                            <td>Tamil Nadu</td>
                            <td>Dindigul</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg4xmpTUP-S8JGVB4Ervyd42i0hJuO45G14Q&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>204</td>
                            <td>8576 Addison Lane
                                Lawndale, CA 90260</td>
                            <td>Rajasthan</td>
                            <td>Sikar</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkuDGr_twtCMwpbgr82CKoQb4NUu-5YG00Bw&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>301</td>
                            <td>80 Smith Store St.
                                Batavia, OH 45103</td>
                            <td>Rajasthan</td>
                            <td>Jaipur</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQD2t1gB9aUhM5Lmnkf2NHZXk-n_0TqI-vaRA&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>302</td>
                            <td>14 Rose St.
                                Linden, NJ 07036</td>
                            <td>Himachal Pradesh</td>
                            <td>Shimla</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, obcaecati enim<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi3xoiqsfqNBKf-5WdSenVyk14iIrpD2sQgg&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>303</td>
                            <td>124 Wentworth Drive
                                Canal Winchester, OH 43110</td>
                            <td>Rajasthan</td>
                            <td>Ajmer</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita laborum nu<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZ_8Cj6RAuCSySyVgoIJC7b_clSJsERtKUMQ&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
                            </td>
                        </tr>
                        <tr>
                            <td>304</td>
                            <td>7135 South Lilac Street
                                Sun Prairie, WI 53590</td>
                            <td>Tamil Nadu</td>
                            <td>Madurai</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae enim quisqua<br><a href="#">know more</a></td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHcqeNcgTS8rsHagYUVIpyjAWw6SzXXh0z5Q&usqp=CAU"
                                    alt=""><br>
                                <a href="https://roomsterinc.000webhostapp.com/regspg.php">BOOK NOW</a>
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