<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKETI MALL</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href=" https://cddnjs.cloudflare.com/ajax/libd/font-awesome/4.7.0/css/font-awesome.me.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    
</head>
<body>
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="./IMAGE/newlogo.jpg" >
            </div>
            <!-- <nav>
                <ul id="MenuItems">
                    <li><a href="final project.html" >HOME</a></li>
                    <li><a href="rooms.html">ROOMS</a></li>
                    <li><a href="foods.html"> FOODS</a></li>
                    <li><a href="login.php">ACCOUNT</a></li>
                    <li><a href="#about"> ABOUT</a></li>
                </ul>
            </nav> -->
            
            <img src="./IMAGE/menu.png" class="menu-icon" onclick="menutoggle()" >
        </div>
        <div class="row">
            
            <div class="col-2">
                <img src="./IMAGE/download (1).jpg" >
            </div>
            <div class="col-2">
                <h1>WELCOME  TO<br> 5-- STAR HOTEL </h1>
                <P>We serve to satisfaction </P>
                <a href="login.php" class="btn" style="background:blue ;"> Log In</a>
            </div>

        </div>

    </div>
</div>



   
    <!--Testimonial-->
    <div class="box">
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                            <i class="fa fa-quote-left"></i>
                        <p>Biketi mall company has been existing since 1990, with partnership with a young billionare called Dr. Elvis Wasswa</p>
    
                        <img src="./IMAGE/owner1.jpg">
                        <h3>Biketi Jacob </h3>
                        <h3></h3>
                    </div>
                    <div class="col-3">
                            <i class="fa fa-quote-left"></i>
                        <p>Biketi mall company has been existing since 1990, with partnership with a young billionare called Dr. Elvis Wasswa</p>
                     
                        <img src="./IMAGE/wasswa.jpeg">
                        <h3>Elvis Wasswa </h3>
                        <h3></h3>
                    </div>
                    <div class="col-3">
                            <i class="fa fa-quote-left"></i>
                        <p>Biketi mall company has been existing since 1990, with partnership with a young billionare called Dr. Elvis Wasswa</p>
                    
                        <img src="./IMAGE/owner3.png">
                        <h3>Julius Kiche</h3>
                        <h3></h3>
                       
                    </div>
                    
                </div>
<!-- footer-->
 <!-- footer-->
 <div class="footer" style="height:100% ;">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download app on Playstore</p>
                <div class="app-logo">
                    <img src="app-logo (2).png" >
                </div>
            </div>
            <div class="footer-col-2">
            <p>We Serve To Satisfaction</p>
                <img src="./IMAGE/newlogo.jpg" width="150px" height="100px">
            </div>
            <div class="footer-col-3">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <h6>Developed by: <br> <cite>Jacob</cite></h6>
    </div>
</div>
   

    

    
    <!-- js for toggle menu-->
    <script>
        var MenuItems=document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight=="0px")
            {
                MenuItems.style.maxHeight="200px"
            }
            else
            {
                MenuItems.style.maxHeight="0px"
            }
        }
    </script>
    <script src="script.js"></script>
    

</body>
</html>