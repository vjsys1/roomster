
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="VIEWPORT" content="width=device-width , intial scale=1.0">
    <title> Registration</title>
<title>
        <?php echo $fetch_info['name'] ?> | Home</title>
            <link rel="stylesheet" href="index.css">
 <link rel="stylesheet" href="navstyle.css">
    <link rel="icon" href="images/logo-removebg-preview.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="navstyle.css">
    
    <script>
    </script>

</head>
<style>
    
    .button{
         height: 100%;
    width: 100%;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
 background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
  .button {
    /* transform: scale(0.99); */
   color:white;
}
</style>
<body>
   
    <br>
    <center>
        <div class="container">
            <div class="title">Add Your Hostel/PG</div>
            <div class="content">
                <form action="main1.html">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Institute / Home-name </span>
                            <input type="text" placeholder="Enter your Institute/ Home-name" required>
                        </div>
                        <div class="input-box">
                            <span class="details"> Phone Number</span>
                            <input type="number" placeholder="Enter your number" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <span class="details"> No. Of floors</span>
                            <input type="number" placeholder="Enter no. of floors" required>
                        </div>
                        <div class="input-box">
                            <span class="details"> No. Of rooms per floor</span>
                            <input type="number" placeholder="Enter no. rooms per floors" required>
                        </div>

                        <div class="input-box ">
                            <span class="details ">Address</span>
                            <textarea rows="3 " cols="35 " name="address ">
                                
                                </textarea>

                        </div>
                        <div class="input-box">
                            <span class="details">Add Room images</span>
                            <input type="file" id="files" name="files" multiple required>
                        </div>

                        <span class="">Rooms availabe: </span>

                        <input type="checkbox" id="ac" name="ac" value="ac">
                        <span class=""> AC rooms</span>
                        <input type="checkbox" id="cooler" name="cooler" value="cooler">
                        <span class="details"> COOLER/DUCT rooms</span>
                        <input type="checkbox" id="nonac" name="nonac" value="nonac">
                        <label for="vehicle3"> Non-AC rooms</label><br>
                    </div>

                    <br>
                    <input type="checkbox" name="gender" id="dot-1"> Terms & conditions*
                    <div class="button">
                    <a class="button" href="admin.php">UPLOAD</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </center>
    
    <script>
        
    </script>
</body>

</html>