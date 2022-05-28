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
    <title>About Us</title>
    <link rel="stylesheet" href="about.css">
    <title>
        <?php echo $fetch_info['name'] ?> | Home</title>
            <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="navstyle.css">
    <link rel="icon" href="images/logo-removebg-preview.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    




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

</head>

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
                        <a class="nav-link" aria-current="page" href="https://roomsterinc.000webhostapp.com/index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://roomsterinc.000webhostapp.com/index.php">BOOKING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="About.php">ABOUT US</a>
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

    <div class="container-main">
        <h1>About us</h1>
        <div class="context">
            <p>
        Every student's one stop solution for its hostel life. A good environment leads to a better life that's true but for that you need a good place of living specially when you are in the teen phase of your life when you are first time away from your home you and your family are worried about where to stay where to live! 
            Worry not we've got you covered.</p>
        </div>
        
        <div class="context">
            <p>
            At roomster you choose from various PG's/Hostels available in the city and choose the best for you. You just have to filter out the rooms according to your preferences,submit your documents for verification by the owner right through our website and then just book the room. It's that easy no hustle of meeting different people going through brokers paying commissions. It's just you and your room. </p>
        </div>
    
        <div class="context">
            <p>
            Need a room? Roomster it!
            </p>
        </div>
        <div class="context">
            <p>
            Team Members:
        </p>
        <p>
        <ul>
        <li>Vishant Mathur - The person who keeps the team together and assign the roles.</li>
        <li>Vishwam Solanki - Our programmer head, who runs his own YouTube channel.</li>
        <li>Vijay Gurjar -The programmer's primary helper.</li>
        <li>Sourav Choudhary -The ppt creator and the content accumulator.</li>
        <li>Yagyavalkya Sharma - The person who is constantly coming up with new and unique ideas and the finaliser.</li>
        </ul>
    </p>
    </div>
    </div>
    <div id="contactus"class="container-con">
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
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script>
</body>
</html>