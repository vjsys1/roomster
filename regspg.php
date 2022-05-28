
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="VIEWPORT" content="width=device-width , intial scale=1.0">
    <title> Registration</title>

     <link rel="stylesheet" href="formss.css">
    <link rel="stylesheet" href="formv.css">

<style>
#preloder{
    background: black url("images/BackIllinformedAsianelephant-size_restricted.gif") no-repeat center center;
    background-size: 520px;
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 100;
}
iframe{
    display: none;
}
</style>


 
 
</head>
<div id="preloder">

 </div>

<body>


    <center>
        <br>

        <div class="container">
            <br>
            <div class="title">Registration</div>
            <div class="content">
                <form action="del2.php" method="post" enctype='multipart/form-data'>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" placeholder="Enter your name" name="name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Father Name </span>
                            <input type="text" placeholder="Enter your Father Name" name="fname" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" name="pno" placeholder="Enter your number" required>
                        </div>
                        <div class="input-box">
                            <span class="details"> Father Phone Number</span>
                            <input type="text" name="fpno" placeholder="Enter your  Father number" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">AGE</span>
                            <input type="text" name="age" placeholder="Enter your age" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Gender</span>
                            <input type="text" name="gender" placeholder="Enter your age" required>
                        </div>
                         <div class="input-box">
                            <span class="details">Owner id </span>
                            <input type="text" name="ownerid" placeholder="Enter owner id" required>
                        </div>
                        <div class="input-box ">
                            <span class="details ">Address</span>
                            <textarea  name="address"rows="3 " cols="55 ">
                            
                             </textarea>

                        </div>
                    </div>
                    <div class="drop">
                        <p>Choose your Profession:</p>

                        <select name="prof">
                        <option value="Student">Student</option>
                        <option value="Govt. emp">Govt. emp </option>
                        <option value="Private sec."> Private sector </option>
                        <option value="unemployed">Un-employed</option>

                        </select>


                    </div>
 <p>Upload your Govt. document</p>

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput">
                        </div>


                    </div>
                    <br>
                    <label class="">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark">Terms & conditions* </span>
                      </label>

                    <div class="button">
                        <input type="submit" value="Register" name="submit">
                    </div>

                </form>
            </div>
        </div>



    </center>
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
</body>

</html>