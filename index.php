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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $fetch_info['name'] ?> | Home</title>
            <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="navstyle.css">
    <link rel="icon" href="images/logo-removebg-preview.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- for coursel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" integrity="sha512-eMxdaSf5XW3ZW1wZCrWItO2jZ7A9FhuZfjVdztr7ZsKNOmt6TUMTQgfpNoVRyfPE5S9BC0A4suXzsGSrAOWcoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js" integrity="sha512-j+F4W//4Pu39at5I8HC8q2l1BNz4OF3ju39HyWeqKQagW6ww3ZF9gFcu8rzUbyTDY7gEo/vqqzGte0UPpo65QQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<style>
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }


    .container-con {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
        margin-top: 30px;
    }


    .column {
        float: left;
        width: 40%;
        margin-top: 6px;
        padding: 20px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    .row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
    justify-content: space-evenly;
}


    @media screen and (max-width: 600px) {

        .column,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="logo" src="images/logoing-removebg-preview.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#booking">BOOKING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactus">CONTACT US</a>
                    </li>
                    <li class="nav-item">

                        <!-- <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                        <li class="nav-item">
                            <button style="color:black;" class="btn btn-outline-success" type="submit">                               <?php 
                               if($status != "verified"){ echo "<a href='log.html".$link_address."'>Log-In</a>"; }
                               else{
                               echo "<a href='logout-user.php".$link_address."'>Log-Out</a>";} ?> </button>




                        </li>


                </ul>
            </div>
        </div>
    </nav>
    <div class="main">

<video autoplay loop muted plays-inline class="nav-video">
    <source src="images/nav.mp4" type="video/mp4">
</video>
<div class="content-video">
    <h1>ROOMSTER</h1>
    <a href="#booking">Book now</a>
</div>
</div>
<section id="slider" class="feature">
<div class="container">
    <div class="subcontainer">
        <div class="slider-wrapper">
            <div>
                <h2>OUR FEATURES..</h2>
            </div>
            <br>
            <div class="my-slider">
                <div>
                    <div class="slide">
                        <div class="slide-img img-1">
                      
                        </div>
                        <br>
                        <div>
                              <h3>PG Online Booking</h3>
                            <p>You can book your pg from anywhere according to your preffered location,floor, locality etc without hassle and without wating time with different brokers</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide">
                        <div class="slide-img img-2">
                      
                        </div>
                        <br>
                        <div>
                                                        <h3>Google Maps location</h3>
                            <p>User will have to option to get exact location of hostel/pg throught Google Maps </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide">
                        <div class="slide-img img-3">
                      
                        </div>
                        <br>
                        <div>
 <h3>Hostel Online Booking</h3>
                            <p>You can book your pg from anywhere according to your preffered location,floor, locality etc without hassle</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide">
                        <div class="slide-img img-4">
                      
                        </div>
                        <br>
                        <div>
                             <h3>Rooms View</h3>
                            <p>Users can preview the rooms available through photographs uploaded by the hostel/PG owners on the webiste.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="slide">
                        <div class="slide-img img-5">
                      
                        </div>
                        <br>
                        <div>
                             <h3>Owners Can review applications</h3>
                            <p>Owners of hostels/PGs are given access to a platform where they can review applications.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</section>

<!------------------- booking ----------------------------------->
<section id="booking"class="booking" class="container-card" data-aos="fade-right" data-aos-delay="20" data-aos-duration="1000"
data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
data-aos-anchor-placement="top-center">
<h2>Booking</h2>
<div class="card-container">
    <div class="card-content">
        <h2>Book hostel</h2>
        <div class="card-img">

            <img src="images/hostel.jpg" alt="">
            <a href="/search-page/hostel-search.php" class="nav-links">Book</a>
        </div>
        <div class="card-dis">
                      <p>You can book any type of hostel room according to your need from anywhere with just some simple steps and there you go. Click on image to book.</p>
        </div>
    </div>
    <div class="card-content">
        <h2>Book pg</h2>
        <div class="card-img">
            <img src="images/rent.jpg" alt="">
            <a href="/search-page/pgsearch.php" class="nav-links">Book</a>

        </div>
        <div class="card-dis">
 <p>You can book any pg with your favourable area, locality etc without any broker from anywhere . Click on image to book</p>
        </div>

    </div>
</div>
</section>

<!-- ----------------tesimonial ------------------- -->
<section class="testimonial">
<div class="testimonials-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Testimonials </h2>
            <p class="text-center"></p>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description">These are the testimonials from heads of different well known and big companies.Write your experience to you too. So you may get the chance to feature on your testimonial page</p>
                </div>
                <div class="author"><img class="rounded-circle" src="https://i.imgur.com/nUNhspp.jpg">
                    <h5 class="name">Vishant mathur</h5>
                    <p class="title">students</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description">I appreciate they added the features for owners too. So they don't loose control over things.UI is just fabulas.</p>
                </div>
                <div class="author"><img class="rounded-circle" src="https://i.imgur.com/o5uMfKo.jpg">
                    <h5 class="name">Nidhi choudhary</h5>
                    <p class="title">Software engineer</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box">
                    <p class="description">I really like the concept of advance booking of hostels and pg. I faced this issue in my teenage and now finally someone solved this issue and make it very easy and interactive.</p>
                </div>
                <div class="author"><img class="rounded-circle" src="https://i.imgur.com/At1IG6H.png">
                    <h5 class="name">Vijay gurjark</h5>
                    <p class="title">college student</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



<!-- ---------------contact us--------------------------- -->

<div id="contactus" class="container-con">
<div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
</div>
<div class="row">
    <div class="column">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27667.460357145304!2d73.84898409161798!3d29.909447311118498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3917b5d13a516597%3A0x1c85590c503ac5c8!2sOffice!5e0!3m2!1sen!2sin!4v1649698587178!5m2!1sen!2sin"
            width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="column">
        <form action="/action_page.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.."
                style="height:170px"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
</div>





<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script src="script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script>
</body>

</html>