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
    <style>
        p{
            color:blue;
            font-size: 30px;
        }
    </style>
    
</head>
<body>
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <!-- <img src="./IMAGE/newlogo.jpg" > -->
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="final project.html" >HOME</a></li>
                    <li><a href="rooms.html">ROOMS</a></li>
                    <li><a href="foods.html"> FOODS</a></li>
                    <li><a href="login.php">ACCOUNT</a></li>
                    <li><a href="#about"> ABOUT</a></li>
                </ul>
            </nav>
            
            <img src="menu.jpeg" class="menu-icon" onclick="menutoggle()" >
        </div>
       <h1 style="color:red ;text-align:center;font-size:30px;">ADMIN DASHBOARD</h1>
      
        <div class="box">
            <div class="row">
                <div class="col-3" >
                <ul>
        <p style="color:blue;font-size:30px;">Message </p>
        <svg xmlns="http://www.w3.org/2000/svg"  width="60" height="60" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
  <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
</svg> <br>
        </ul>
    </div>
    <div class="col-3">
    <ul>
        <a href="bookings.php">  <p style="color:blue;font-size:30px;">Bookings</p> 
        <svg xmlns="http://www.w3.org/2000/svg"  style="color:black;" width="60" height="60" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg></a>
        </ul>
        
    </div>
    <div class="col-3">
    <ul>
        
        <ul>
        <a href="data.php"><p style="color:blue;font-size:30px;">Customers</p>
        <svg xmlns="http://www.w3.org/2000/svg" style="color:black;" width="60" height="60" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
  <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
  <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z"/>
</svg></a>


        </ul>
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