
<html>

<head>
<!-- jQuery should be top of other links -->
<!-- jQyery link -->
<!-- Bootstrap css link -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap js link -->
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="homepage.css">
<script>
    function myFunction()
    {
       var name = document.getElementById("name").value.trim();
       var nameText = document.getElementById("name-text");
       var password = document.getElementById("Password").value.trim();
       var passwordText = document.getElementById("password-text");
       
       var letters = /^[A-Za-z]+$/;
       var numbers = new RegExp("^[0-9]+$");
      
   if (name == "" ||  !name.match(letters)) {
    
    document.getElementById("name").className = "form";
    nameText.style.display = "block";
  } else {
    
    document.getElementById("name").className = "simple";
    nameText.style.display = "none";
  }
  
  if (password == "" || password.length<8) {
   
    document.getElementById("Password").className = "form";
    passwordText.style.display = "block";
  } else {
    
    document.getElementById("Password").className = "simple";
    passwordText.style.display = "none";
  }
    
  
  if (number == "" || !number.match(numbers)) {
    numberText.style.display = "block";
    document.getElementById("number").className = "form";
  } else {
    numberText.style.display = "none";
    document.getElementById("number").className = "simple";
  }
  
    }
  </script>

</head>

<header>
    <div class="col-md-12">
    <div class="navbar ">
        <div class=" col-md-2 container-fluid" >
        <div  class="navbar-header">
        
        <a href="homepage.php"><img src= "h-img/logo.png" class="image1"></a>
        
        </div>
        </div>
        <div class="col-md-4" > 
           <div class="col-md-12" style="margin-top: 18px;" >

              <div class="col-md-2" id="navmenu" >
                <!-- <a href="#"> <b> MEN </b> </a> -->
                <div class="dropdown" >
                    <a href=""> <b> MEN </b> </a>
                    <div class="dropdown-content">

                    <div class="col-md-12">
                    </br>
                    <h5 style="font-size: 15px; color: grey;"> <b>Clothing </b> </h5>
                    <a href="men-shirts.php" ><h6 style="margin-top: 20px;font-size: 15px;"> Shirts </h6></a>
                    <a href="men-shoes.php" > <h6 style="margin-top: 20px;font-size: 15px;">Shoes</h6></a>
                    </div>

                    </div>
                  </div>
              </div>
              <div class="col-md-2" >
                <!-- <a href="#"> <b> WOMEN </b> </a> -->
                <div class="dropdown">
                    <a href="#"> <b> WOMEN </b> </a>
                    <div class="dropdown-content">

                        <div class="col-md-12">
                        </br>
                        <h5 style="font-size: 15px; color: grey;"> <b>Clothing </b> </h5>
                        <a href="women-dress.php" ><h6 style="margin-top: 20px;font-size: 15px;"> Dress </h6></a>
                        <a href="women-accessories.php" > <h6 style="margin-top: 20px;font-size: 15px;"> Accessories</h6></a>
                        </div>

                    </div>
                  </div>
              </div>
              <div class="col-md-2" style=" margin-left: 9px;">
                <!-- <a href="#"> <b> KIDS </b> </a> -->
                <div class="dropdown">
                    <a href="#"> <b> KIDS </b> </a>
                    <div class="dropdown-content">

                        <div class="col-md-12">
                        </br>
                         <h5 style="font-size: 15px; color: grey;"> <b>Girls </b> </h5>
                        <a href="kids-girls.php" ><h6 style="margin-top: 20px;font-size: 15px;"> All </h6></a>
        
                    
                        <h5 style="font-size: 15px; color: grey;"> <b>Boys </b> </h5>
                        <a href="kids-boys.php" ><h6 style="margin-top: 20px;font-size: 15px;"> All </h6></a>
        
                        </div>

                    </div>
                  </div>
              </div>
              <div class="col-md-2" style=" padding-left: 1px;">
                <!-- <a href="#"> <b > HOME </b> </a> -->
                <div class="dropdown">
                    <a href="#"> <b > HOME </b> </a>
                    <div class="dropdown-content">

                        <div class="col-md-12">
                        </br>
                        <h5 style="font-size: 15px; color: grey;"> <b>No Products yet </b> </h5>
                        
                        </div>

                    </div>
                  </div>
              </div>
              <div class="col-md-2" style=" padding-left: 1px;">
                <!-- <a href="#"> <b> BEAUTY </b> </a> -->
                <div class="dropdown">
                    <a href="#"> <b> BEAUTY </b> </a>
                    <div class="dropdown-content">

                        <div class="col-md-12">
                        </br>
                         <h5 style="font-size: 15px; color: grey;"> <b>Makeup </b> </h5>
                        <a href="beauty-makeup.php" ><h6 style="margin-top: 20px;font-size: 15px;"> All </h6></a>
        
                    
                        <h5 style="font-size: 15px; color: grey;"> <b>Skincare </b> </h5>
                        <a href="beauty-skincare.php" ><h6 style="margin-top: 20px;font-size: 15px;"> All </h6></a>
        
                        </div>

                    </div>
                  </div>
              </div>
              <div class="col-md-2" >
                <a href="sale.php"  style="color:red"onMouseOut="this.style.color='red'" onMouseOver="this.style.color='black'" > <b> SALE </b> </a>
              </div>

           </div>
        </div>
        <div class="col-md-3" >
            <div class="search" style="margin-left: 5px;"> 
                <input type="text" class="search-input" placeholder="Search for items, brands and inspiration" style="font-size: 13px;"> 
                <a href="#" class="search-icon"> <i class="glyphicon glyphicon-search"></i> </a> 
                </div> 
        </div>

        <div class="col-md-3" >
            <div class="col-md-12" style="margin-top: 18px;">
                
                <div class="col-md-3"  >
                    <a href="help.php"  ><img src= "h-img/customer.png" class="image2" style="margin-left: 15px;" ></a>
                </div>
                <div class="col-md-2" style="background-color: white;" style="margin-left: 2px;">
                    <div class="dropdown">
                        <img src= "h-img/person.png" class="image2">
                        <div class="dropdown-content">

                        <div class="col-md-12">
                        </br>
                        <a href="#Model1" data-toggle="modal"><h5 style="font-size: 15px;"> <b>Log In </b> </h5></a>
                        <a href="#Model2" data-toggle="modal"><h5 style="margin-top: 20px;font-size: 15px;"> <b>Sign Up </b></h5></a>
                        <a href="wishlist.php" > <h5 style="margin-top: 20px;font-size: 15px;"> <b>My Wish List </b></h5></a>
                        </div>

                        </div>
                      </div>
                </div>
                <div class="col-md-2" >
                    <a href="wishlist.php"><img src= "h-img/favourites.png" class="image2" style="margin-left: 4px;" ></a>
                </div>
                <div class="col-md-5">
                    <a href="cart.php"><img src= "h-img/cart.png" class="image3 " style="margin-left: 10px;"></a> 
                </div>
               
            </div>
        </div>
 
        </div>
    </div>
</header>

<body>

    <div class="modal fade" id="Model1">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
            </div>

            <div class="modal-body">

              <h3 class="modal-title"> <b style="color: black;">LOG IN</b><button type="button" class="btn-close pull-right" data-dismiss="modal"
                    aria-label="Close" style="background-color: red; color: white;">&times;</button></h3>
              <form>
                <div class="form-group">
                    <label for="Name"><b>Name:</b></label><br>
                    <input type="text" id="name"  placeholder="Enter your name"  class="simple"/><br><br>
                    <span id="name-text" style="display: none; color: red;">Enter correct name</span>
                   
                    <label for="password"><b>Password:</b></label><br>
                    <input type="password" id="Password" placeholder="Enter password" /><br><br>
                    <span id="password-text" style="display: none; color: red;">Enter correct password</span>
                <div class="col-md-12">
                    </br></br>
                        <div class="col-md-6">
                        <button type="button" style="padding-left: 15px; background-color: red; color: white;" class="btn btn-secondary " data-dismiss="modal">Close</button> 
                        </div>
                        <div class="col-md-6">
                            <a href=""><button type="button" onclick="myFunction()" onMouseOver="this.style.backgroundColor='#0063bf'" onMouseOut="this.style.backgroundColor='#0063bf'" class="btn btn-primary Submit" >Log in</button></a>
                        </div>
                </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
            
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="Model2">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title"> <b style="color: black;">SIGN UP</b><button type="button" class="btn-close pull-right" data-dismiss="modal"
                  aria-label="Close" style="background-color: red; color: white;">&times;</button></h3>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">UserName</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter UserName">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      name="Password"
                      placeholder="Enter your Password"
                      required
                    />
                </div>
             
            </div>
            <div class="modal-footer">
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
              <button type="button" style="padding-left: 15px; background-color: red; color: white;" class="btn btn-secondary " data-dismiss="modal">Close</button> 
            </div>
            <div class="col-md-5">
              <button type="submit" onclick="myFunction()" class="btn btn-primary mt-3" onMouseOver="this.style.backgroundColor='#0063bf'" onMouseOut="this.style.backgroundColor='#0063bf'">Sign-Up</button>
            </div>
            <div class="col-md-1">
            </div>
            </div>
        </form>
          </div>
        </div>
      </div>


        
    <div class="row">
        <div class="container-fluid">
          <div class="col-md-12">
            <a href ="sale.php"><img src="h-img/Desktop_Ramadan.jpg" alt="placeholder 960" class="img-responsive "/></a>
          </div>
        </div>
      </div>


      <div class="container-fluid" style="font-family: Helvetica, Arial, sans-serif"></br>
        <center> <h3> <b> TOP CATEGORY </b> </h3> </center>
    </br></br>
        <div class="col-md-2">
            <a href ="women-dress.php"><img src="h-img/1.Tops.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
            <a href ="women-dress.php"><img src="h-img/2.Kurta.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
            <a href ="women-dress.php"><img src="h-img/3.Womens-T-Shirts.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
            <a href ="women-accessories.php"><img src="h-img/4.Handbags.gif" class="img-responsive " ></a>
        </div>

        <div class="col-md-2">
            <a href ="women-dress.php"><img src="h-img/5.Festive-Wear.gif" class="img-responsive " ></a>
        </div>

        <div class="col-md-2">
            <a href ="men-shirts.php"><img src="h-img/6.Mens-Casual-Shirts.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
        </br>
            <center><b>Tops</b> </center>
        </div>
    
        <div class="col-md-2">
        </br>
            <center><b>Kurta</b></center> 
        </div>

        <div class="col-md-2">
        </br>
            <center><b>Women's T-Shirts</b></center> 
        </div>
        
        <div class="col-md-2">
        </br>
            <center><b>Handbags</b></center> 
        </div>

        <div class="col-md-2">
        </br>
            <center><b>Festive Wear</b> </center>
        </div>
            
        <div class="col-md-2" >
        </br>
            <center><b>Men's Casual Shirts</b></center> 
        </div>

    </div>



    <div class="container-fluid" style="font-family: Helvetica, Arial, sans-serif" ></br>
        
    </br>
        <div class="col-md-2">
            <a href ="men-shirts.php"><img src="h-img/7.Mens-T-Shirts.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
            <a href ="kids-girls.php"><img src="h-img/8.Girls-Clothing.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
            <a href ="kids-boys.php"><img src="h-img/9.Boys-Clothing.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
            <a href ="women-dress.php"><img src="h-img/10.Lawn.gif" class="img-responsive " ></a>
        </div>

        <div class="col-md-2">
            <a href ="women-accessories.php"><img src="h-img/11.Womens-Sneakers.gif" class="img-responsive " ></a>
        </div>

        <div class="col-md-2">
            <a href ="men-shoes.php"><img src="h-img/12.Sports-Shoes.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
        </br>
            <center><b>Men's T-Shirts</b> </center>
        </div>
    
        <div class="col-md-2">
        </br>
            <center><b>Girls Clothing</b></center> 
        </div>

        <div class="col-md-2">
        </br>
            <center><b>Boys Clothing</b></center> 
        </div>
        
        <div class="col-md-2">
        </br>
            <center><b>Lawn</b></center> 
        </div>

        <div class="col-md-2">
        </br>
            <center><b>Women's Sneakers</b> </center>
        </div>
            
        <div class="col-md-2" >
        </br>
            <center><b>Sports Shoes</b></center> 
        </div>

    </div>



    <div class="container-fluid" style="font-family: Helvetica, Arial, sans-serif" ></br>
        
    </br>
        <div class="col-md-2">
            <a href ="women-accessories.php"><img src="h-img/13.Womens-Pumps.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
            <a href ="men-shoes.php"><img src="h-img/14.Casual-Shoes.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
            <a href ="women-accessories.php"><img src="h-img/15.Laptop-Bags.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
            <a href ="women-dress.php"><img src="h-img/16.Womens-Bottoms.gif" class="img-responsive " ></a>
        </div>

        <div class="col-md-2">
            <a href ="beauty-makeup.php"><img src="h-img/17.Makeup.gif" class="img-responsive " ></a>
        </div>

        <div class="col-md-2">
            <a href ="women-dress.php"><img src="h-img/18.Womens-Sleepwear.gif" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-2">
        </br>
            <center><b>Women's Pumps</b> </center>
        </div>
    
        <div class="col-md-2">
        </br>
            <center><b>Casual Shoes</b></center> 
        </div>

        <div class="col-md-2">
        </br>
            <center><b>Laptop Bags</b></center> 
        </div>
        
        <div class="col-md-2">
        </br>
            <center><b>Women's Bottoms</b></center> 
        </div>

        <div class="col-md-2">
        </br>
            <center><b>Makeup</b> </center>
        </div>
            
        <div class="col-md-2" >
        </br>
            <center><b>Women's Sleepwear</b></center> 
        </div>

    </div>
    


    <div class="container-fluid" style="font-family: Helvetica, Arial, sans-serif"></br></br>
        <center> <h3> <b> EXCLUSIVE FOR YOU </b> </h3> </center> </br></br>

        <div class="col-md-12" >
        <a href ="homepage.php"><img src="h-img/Fresh-Designs_Desktop.jpg" class="img-responsive " ></a>
        </div>
   
        <div class="col-md-12">
        </br>
            <a href="kids-boys.php"> <img src="h-img/Kids_Desktop.jpg" class="img-responsive "></a>
        </div>

    </br></br>

        <div class="col-md-6">
        </br>
            <a href="men-shirts.php"> <img src="h-img/Men_Desktop.jpg" class="img-responsive "></a>
        </div>

        <div class="col-md-6">
        </br>
            <a href="women-dress.php"> <img src="h-img/Women_Desktop.jpg" class="img-responsive "></a>
        </div>


    </div>



    <div class="container" style="font-family: Helvetica, Arial, sans-serif"></br>
        <center> <h3> <b> BEST SELLERS </b> </h3> </center>
    </br></br>

    <div class="col-md-12 text-center"></div>

<div class="carousel slide" id="myCarousel" interval: 6000>
  <div class="carousel-inner">
    <div class="item active">
      <div class="row">
      <div class="col-xs-3"><a href="k-b-p1.php"><img src="h-img/boys1.jpg" class="img-responsive"></a></div>
      <div class="col-xs-3"><a href="m-sho-p1.php"><img src="h-img/men1.jpg" class="img-responsive"></a></div>
      <div class="col-xs-3"><a href="w-a-p1.php"><img src="h-img/women1.jpg" class="img-responsive"></a></div>
      <div class="col-xs-3"><a href="k-g-p1.php"><img src="h-img/girls1.jpg" class="img-responsive"></a></div>
      </div>
    </div>
    <div class="item">
      <div class="row">
      <div class="col-xs-3"><a href="m-shr-p1.php"><img src="h-img/men8.jpg" class="img-responsive"></a></div>
      <div class="col-xs-3"><a href="w-d-p1.php"><img src="h-img/women5.jpg" class="img-responsive"></a></div>
      <div class="col-xs-3"><a href="b-m-p1.php"><img src="h-img/beauty4.jpg" class="img-responsive"></a></div>
      <div class="col-xs-3"><a href="b-s-p1.php"><img src="h-img/beauty1.jpg" class="img-responsive"></a></div>
      </div>
    </div>
      <div class="item ">
        <div class="row">
        <div class="col-xs-3"><a href="k-b-p2.php"><img src="h-img/boys2.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="m-sho-p2.php"><img src="h-img/men2.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="w-a-p2.php"><img src="h-img/women2.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="k-g-p2.php"><img src="h-img/girls2.jpg" class="img-responsive"></a></div>
        </div>
      </div>
      <div class="item ">
        <div class="row">
        <div class="col-xs-3"><a href="m-shr-p2.php"><img src="h-img/men9.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="w-d-p2.php"><img src="h-img/women7.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="b-m-p2.php"><img src="h-img/beauty7.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="b-s-p2.php"><img src="h-img/beauty2.png" class="img-responsive"></a></div>
        </div>
      </div>
      <div class="item ">
        <div class="row">
        <div class="col-xs-3"><a href="k-b-p1.php"><img src="h-img/boys1.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="m-sho-p1.php"><img src="h-img/men2.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="w-a-p1.php"><img src="h-img/women1.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="k-g-p1.php"><img src="h-img/girls1.jpg" class="img-responsive"></a></div>
        </div>
      </div>
      <div class="item ">
        <div class="row">
        <div class="col-xs-3"><a href="m-shr-p1.php"><img src="h-img/men8.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="w-d-p1.php"><img src="h-img/women5.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="b-m-p1.php"><img src="h-img/beauty4.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="b-s-p2.php"><img src="h-img/beauty2.png" class="img-responsive"></a></div>
        </div>
      </div>
      <div class="item ">
        <div class="row">
        <div class="col-xs-3"><a href="k-b-p2.php"><img src="h-img/boys2.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="m-sho-p2.php"><img src="h-img/men2.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="w-a-p2.php"><img src="h-img/women2.jpg" class="img-responsive"></a></div>
        <div class="col-xs-3"><a href="k-g-p2.php"><img src="h-img/girls2.jpg" class="img-responsive"></a></div>
        </div>
      </div>



  </div>
  <a class="left carousel-control"  href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left "></i></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right "></i></a>
</div>


</br></br>
    </div>



<div class="container-fluid" style="font-family: Helvetica, Arial, sans-serif"></br></br>
        <center> <h3> <b> DEAL ZONE </b> </h3> </center> </br>

        <div class="container-fluid" style="font-family: Helvetica, Arial, sans-serif" ></br>
        
        </br>
            <div class="col-md-3">
                <a href ="sale.php"><img src="h-img/YwpsIdZrFYgihBrTEkINF3Ty-766559638477.png" class="img-responsive " ></a>
            </div>
        
            <div class="col-md-3">
                <a href ="sale.php"><img src="h-img/2Fhyqfo62xPI8YfLluUpIqlZ-546194338574.png" class="img-responsive " ></a>
            </div>
        
            <div class="col-md-3">
                <a href ="sale.php"><img src="h-img/Ita1RSAyosD7h_HEkEnBUMG1-141602833264.png" class="img-responsive " ></a>
            </div>
        
            <div class="col-md-3">
                <a href ="sale.php"><img src="h-img/KK9kY7UmiMhaNxc6X1pMu3EZ-1202985966307.png" class="img-responsive " ></a>
            </div>

</div>
</div>



<div class="container-fluid" style="font-family: Helvetica, Arial, sans-serif"></br></br>
    <center> <h3> <b> TOP BRANDS </b> </h3> </center> </br>

    <div class="container-fluid" style="font-family: Helvetica, Arial, sans-serif" ></br>
    
        <div class="col-md-3">
            <a href ="men-shirts.php"><img src="h-img/1.Westline.jpg" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-3">
            <a href ="men-shoes.php"><img src="h-img/2.Core.jpg" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-3">
            <a href ="women-accessories.php"><img src="h-img/3.Tasche.jpg" class="img-responsive " ></a>
        </div>
    
        <div class="col-md-3">
            <a href ="women-accessories.php"><img src="h-img/4.Kelly.jpg" class="img-responsive " ></a>
        </br></br>
        </div>

 

    <div class="col-md-3">
        <a href ="women-dress.php"><img src="h-img/5.LuxuryLine.jpg" class="img-responsive " ></a>
    </div>

    <div class="col-md-3">
        <a href ="women-accessories.php"><img src="h-img/6.Move.jpg" class="img-responsive " ></a>
    </div>

    <div class="col-md-3">
        <a href ="men-shoes.php"><img src="h-img/7.OXY.jpg" class="img-responsive " ></a>
    </div>

    <div class="col-md-3">
        <a href ="women-dress.php"><img src="h-img/8.Eastline.jpg" class="img-responsive " ></a>
    </br></br>
    </div>


    <div class="col-md-3">
        <a href ="women-accessories.php"><img src="h-img/9.Bluepearl.jpg" class="img-responsive " ></a>
    </div>

    <div class="col-md-3">
        <a href ="kids-girls.php"><img src="h-img/10.YellowBee.jpg" class="img-responsive " ></a>
    </div>

    <div class="col-md-3">
        <a href ="women-accessories.php"><img src="h-img/11.Miles.jpg" class="img-responsive " ></a>
    </div>

    <div class="col-md-3">
        <a href ="women-accessories.php"><img src="h-img/12.Milli.jpg" class="img-responsive " ></a>
    </div>

</div>
</br></br>

</div>



<div class="row">
    <div class="container-fluid">
      <div class="col-md-12">
      </br>
        <a href =" "><img src="h-img/TopTrending.jpg" alt="placeholder 960" class="img-responsive"/></a>
      </div>
    </div>
  </div>

  <div class="col-md-12" >

    <div class="col-tab-content">

        <div class="tab-pane fade in active" >
        </br>

        <center><ul class="nav">
            <li class="active" id="unique-item1" ><a data-toggle="tab" class="tab active" href="#women">WOMEN</a></li>
            <li id="unique-item" ><a data-toggle="tab" class="tab" href="#men"> MEN </a></li>
            <li id="unique-item" ><a data-toggle="tab" class="tab" href="#girls"> GIRLS </a></li>
            <li id="unique-item" ><a data-toggle="tab" class="tab"href="#boys">BOYS</a></li>
            <li id="unique-item" ><a data-toggle="tab" class="tab"href="#beauty">BEAUTY</a></li>
            </ul></center>
            <ul> <hr> </ul>  
                
           
            <div class="tab-content">
                <div id="women" class="tab-pane fade in active">
                  
                    <div class="container" >
                    
                        <div class="col-md-3" id="div1">
                            <a href="w-a-p1.php"><img src="h-img/women1.jpg" class="img-responsive " ></a>
                        </div>

                        <div class="col-md-3">
                            <a href="w-a-p2.php"><img src="h-img/women2.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="women-accessories.php"><img src="h-img/women3.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="women-accessories.php"><img src="h-img/women4.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,395</b> </center>
                        </br></br>
                        </div> 

                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,249</b> </center>
                        </br></br>
                        </div> 
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,099</b> </center>
                        </br></br> 
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,019</b> </center>
                        </br></br>
                        </div>

                    </br></br>



                    <div class="col-md-3">
                        <a href="w-d-p1.php"><img src="h-img/women5.jpg" class="img-responsive " ></a>
                    </div>

                    <div class="col-md-3">
                        <a href="women-accessories.php"><img src="h-img/women6.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="w-d-p2.php"><img src="h-img/women7.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="women-dress.php"><img src="h-img/women8.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,324</b> </center>
                    </br></br>
                    </div> 

                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,310</b> </center>
                    </br></br>
                    </div> 
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,245</b> </center>
                    </br></br> 
                    </div>
                
                    <div class="col-md-3" >
                    </br>
                        <center><b>Rs 1,099</b> </center>
                    </br></br>
                    </div>




                    <div class="col-md-3">
                        <a href="women-accessories.php"><img src="h-img/women9.jpg" class="img-responsive " ></a>
                    </div>

                    <div class="col-md-3">
                        <a href="women-accessories.php"><img src="h-img/women10.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="women-accessories.php"><img src="h-img/women11.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="women-dress.php"><img src="h-img/women12.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,335</b> </center>
                    </br></br>
                    </div> 

                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,239</b> </center>
                    </br></br>
                    </div> 
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,000</b> </center>
                    </br></br> 
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,000</b> </center>
                    </br></br>
                    </div>


                    <div class="col-md-3">
                        <a href="women-dress.php"><img src="h-img/women13.jpg" class="img-responsive " ></a>
                    </div>

                    <div class="col-md-3">
                        <a href="women-dress.php"><img src="h-img/women14.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="women-dress.php"><img src="h-img/women15.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="women-dress.php"><img src="h-img/women16.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,200</b> </center>
                    </br></br>
                    </div> 

                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,280</b> </center>
                    </br></br>
                    </div> 
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,019</b> </center>
                    </br></br> 
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,630</b> </center>
                    </br></br>
                    </div>
                    </div>


                </div>






                <div id="men" class="tab-pane fade">
                  
                        <div class="container" >
                        
                            <div class="col-md-3" >
                                <a href="m-sho-p1.php"><img src="h-img/men1.jpg" class="img-responsive " ></a>
                            </div>
    
                            <div class="col-md-3">
                                <a href="m-sho-p2.php"><img src="h-img/men2.jpg" class="img-responsive " ></a>
                            </div>
                        
                            <div class="col-md-3">
                                <a href="men-shoes.php"><img src="h-img/men3.jpg" class="img-responsive " ></a>
                            </div>
                        
                            <div class="col-md-3">
                                <a href="men-shoes.php"><img src="h-img/men4.jpg" class="img-responsive " ></a>
                            </div>
                        
                            <div class="col-md-3">
                            </br>
                                <center><b>Rs 1,720</b> </center>
                            </br></br>
                            </div> 
    
                            <div class="col-md-3">
                            </br>
                                <center><b>Rs 1,250</b> </center>
                            </br></br>
                            </div> 
                        
                            <div class="col-md-3">
                            </br>
                                <center><b>Rs 2,520</b> </center>
                            </br></br> 
                            </div>
                        
                            <div class="col-md-3">
                            </br>
                                <center><b>Rs 1,019</b> </center>
                            </br></br>
                            </div>
    
                        </br></br>
    
    
    
                        <div class="col-md-3">
                            <a href="men-shoes.php"><img src="h-img/men5.jpg" class="img-responsive " ></a>
                        </div>
    
                        <div class="col-md-3">
                            <a href="men-shoes.php"><img src="h-img/men6.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="men-shoes.php"><img src="h-img/men7.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="m-shr-p1.php"><img src="h-img/men8.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,395</b> </center>
                        </br></br>
                        </div> 
    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,520</b> </center>
                        </br></br>
                        </div> 
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,090</b> </center>
                        </br></br> 
                        </div>
                    
                        <div class="col-md-3" >
                        </br>
                            <center><b>Rs 1,099</b> </center>
                        </br></br>
                        </div>
    
    
    
    
                        <div class="col-md-3">
                            <a href="m-shr-p2.php"><img src="h-img/men9.jpg" class="img-responsive " ></a>
                        </div>
    
                        <div class="col-md-3">
                            <a href="men-shirts.php"><img src="h-img/men10.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="men-shirts.php"><img src="h-img/men11.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="men-shirts.php"><img src="h-img/men12.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,200</b> </center>
                        </br></br>
                        </div> 
    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,149</b> </center>
                        </br></br>
                        </div> 
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 21,019</b> </center>
                        </br></br> 
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,030</b> </center>
                        </br></br>
                        </div>
    

                        <div class="col-md-3">
                            <a href="men-shirts.php"><img src="h-img/men13.jpg" class="img-responsive " ></a>
                        </div>
    
                        <div class="col-md-3">
                            <a href="men-shirts.php"><img src="h-img/men14.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="men-shirts.php"><img src="h-img/men15.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="men-shoes.php"><img src="h-img/men16.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,295</b> </center>
                        </br></br>
                        </div> 
    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,300</b> </center>
                        </br></br>
                        </div> 
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,400</b> </center>
                        </br></br> 
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,000</b> </center>
                        </br></br>
                        </div>
    


                        </div>
    


                </div>

                <div id="girls" class="tab-pane fade">


                    <div class="container" >
                        
                        <div class="col-md-3">
                            <a href="k-g-p1.php"><img src="h-img/girls1.jpg" class="img-responsive " ></a>
                        </div>

                        <div class="col-md-3">
                            <a href="k-g-p2.php"><img src="h-img/girls2.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="kids-girls.php"><img src="h-img/girls3.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="kids-girls.php"><img src="h-img/girls4.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,000</b> </center>
                        </br></br>
                        </div> 

                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,190</b> </center>
                        </br></br>
                        </div> 
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,200</b> </center>
                        </br></br> 
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,000</b> </center>
                        </br></br>
                        </div>

                    </br></br>



                    <div class="col-md-3">
                        <a href="kids-girls.php"><img src="h-img/girls5.jpg" class="img-responsive " ></a>
                    </div>

                    <div class="col-md-3">
                        <a href="kids-girls.php"><img src="h-img/girls6.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="kids-girls.php"><img src="h-img/girls7.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="kids-girls.php"><img src="h-img/girls8.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,000</b> </center>
                    </br></br>
                    </div> 

                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,330</b> </center>
                    </br></br>
                    </div> 
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,930</b> </center>
                    </br></br> 
                    </div>
                
                    <div class="col-md-3" >
                    </br>
                        <center><b>Rs 1,080</b> </center>
                    </br></br>
                    </div>




                    <div class="col-md-3">
                        <a href="kids-girls.php"><img src="h-img/girls9.jpg" class="img-responsive " ></a>
                    </div>

                    <div class="col-md-3">
                        <a href="kids-girls.php"><img src="h-img/girls10.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="kids-girls.php"><img src="h-img/girls11.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="kids-girls.php"><img src="h-img/girls12.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 3,305</b> </center>
                    </br></br>
                    </div> 

                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 4,239</b> </center>
                    </br></br>
                    </div> 
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,030</b> </center>
                    </br></br> 
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 4,090</b> </center>
                    </br></br>
                    </div>


                
                    </div>
    

                </div>
                <div id="boys" class="tab-pane fade">
                  

                    <div class="container" >
                        
                        <div class="col-md-3">
                            <a href="k-b-p1.php"><img src="h-img/boys1.jpg" class="img-responsive " ></a>
                        </div>

                        <div class="col-md-3">
                            <a href="k-b-p2.php"><img src="h-img/boys2.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="kids-boys.php"><img src="h-img/boys3.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="kids-boys.php"><img src="h-img/boys4.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,325</b> </center>
                        </br></br>
                        </div> 

                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 3,000</b> </center>
                        </br></br>
                        </div> 
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,590</b> </center>
                        </br></br> 
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 4,250</b> </center>
                        </br></br>
                        </div>

                    </br></br>



                    <div class="col-md-3">
                        <a href="kids-boys.php"><img src="h-img/boys5.jpg" class="img-responsive " ></a>
                    </div>

                    <div class="col-md-3">
                        <a href="kids-boys.php"><img src="h-img/boys6.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="kids-boys.php"><img src="h-img/boys7.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="kids-boys.php"><img src="h-img/boys8.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,625</b> </center>
                    </br></br>
                    </div> 

                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,270</b> </center>
                    </br></br>
                    </div> 
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 3,099</b> </center>
                    </br></br> 
                    </div>
                
                    <div class="col-md-3" >
                    </br>
                        <center><b>Rs 1,039</b> </center>
                    </br></br>
                    </div>




                    <div class="col-md-3">
                        <a href="kids-boys.php"><img src="h-img/boys9.jpg" class="img-responsive " ></a>
                    </div>

                    <div class="col-md-3">
                        <a href="kids-boys.php"><img src="h-img/boys10.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="kids-boys.php"><img src="h-img/boys11.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="kids-boys.php"><img src="h-img/boys12.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,000</b> </center>
                    </br></br>
                    </div> 

                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 3,500</b> </center>
                    </br></br>
                    </div> 
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 3,090</b> </center>
                    </br></br> 
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,400</b> </center>
                    </br></br>
                    </div>



                    </div>

                </div>

                <div id="beauty" class="tab-pane fade">
                  
                    
                    <div class="container" >
                        
                        <div class="col-md-3">
                            <a href="b-s-p1.php"><img src="h-img/beauty1.jpg" class="img-responsive " ></a>
                        </div>

                        <div class="col-md-3">
                            <a href="b-s-p2.php"><img src="h-img/beauty2.png" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="beauty-skincare.php"><img src="h-img/beauty3.jpeg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                            <a href="b-m-p1.php"><img src="h-img/beauty4.jpg" class="img-responsive " ></a>
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,000</b> </center>
                        </br></br>
                        </div> 

                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 1,500</b> </center>
                        </br></br>
                        </div> 
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 2,130</b> </center>
                        </br></br> 
                        </div>
                    
                        <div class="col-md-3">
                        </br>
                            <center><b>Rs 3,000</b> </center>
                        </br></br>
                        </div>

                    </br></br>



                    <div class="col-md-3">
                        <a href="beauty-makeup.php"><img src="h-img/beauty5.png" class="img-responsive " ></a>
                    </div>

                    <div class="col-md-3">
                        <a href="beauty-makeup.php"><img src="h-img/beauty6.png" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="b-m-p2.php"><img src="h-img/beauty7.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="beauty-makeup.php"><img src="h-img/beauty8.png" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,020</b> </center>
                    </br></br>
                    </div> 

                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,200</b> </center>
                    </br></br>
                    </div> 
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,100</b> </center>
                    </br></br> 
                    </div>
                
                    <div class="col-md-3" >
                    </br>
                        <center><b>Rs 3,010</b> </center>
                    </br></br>
                    </div>




                    <div class="col-md-3">
                        <a href="beauty-skincare.php"><img src="h-img/beauty9.jpg" class="img-responsive " ></a>
                    </div>

                    <div class="col-md-3">
                        <a href="beauty-skincare.php"><img src="h-img/beauty10.jpg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="beauty-skincare.php"><img src="h-img/beauty11.jpeg" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                        <a href="beauty-skincare.php"><img src="h-img/beauty12.png" class="img-responsive " ></a>
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 2,390</b> </center>
                    </br></br>
                    </div> 

                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 1,720</b> </center>
                    </br></br>
                    </div> 
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 4,010</b> </center>
                    </br></br> 
                    </div>
                
                    <div class="col-md-3">
                    </br>
                        <center><b>Rs 3,630</b> </center>
                    </br></br>
                    </div>



                    </div>



                </div>
              </div>

            </div>

        </div>

    </div> 


</div>
</body>

<footer >
</br>  <br/>
    <div class="col-md-12"><hr></hr></div>
        <br/>

            <div id="f1" class="col-md-3">
                
                <h5><b>HELP & INFORMATION</b></h5>
                <br/><br/>
                <a href="">Request a Call Back</a>
                <br/><br/>
                <a href="">Contact US</a>
                <br/><br/>
                <a href="">FAQ & Help Center</a>
                <br/><br/>
                <br/>
                
            </div>
            <div id="f2" class="col-md-2">  
                
                <h5><b>ABOUT CLICKY</b></h5>
                <br/><br/>
                <a href="">About US</a>
                <br/><br/>
                <a href="#">Privacy Statement</a>
                <br/><br/>
                <a href="#">Terms & Conditions</a>
                <br/><br/>
                <a href="#">Returns & Refunds</a>
                
        </br></br></br>
               
            </div>
            <div id="f2" class="col-md-4" style="margin-left: 30px;">
                
                <h5 style="margin-left: 50px;"><b>DOWNLOAD OUR APP</b></h5>
            </br>
                <div class="col-md-3">
                <a href="" ><img src="h-img/googleplay.png" style="width: 90px; height: 30px;  margin-left: 20px;"></a>
                </br>
                
                </div>
                <div class="col-md-3">
                <a href=""><img src="h-img/appstore.png" style="width: 90px; height: 30px; margin-right: 30px;margin-left: 20px;"></a>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </br></br></br>
            <h5 style="margin-left: 35px;"><b>KEEP IN TOUCH</b></h5>
        </br>
            <a href="https://www.facebook.com/" ><img src="h-img/facebook.png" width="20px" height="20px" style="margin-left: 35px;" ></a>
            
            <a href="https://www.instagram.com/" ><img src="h-img/twitter.png" width="20px" height="20px" style="margin-left: 20px;"></a>
           
            <a href="https://twitter.com/" ><img src="h-img/instagram.png" width="20px" height="20px" style="margin-left:20px;"></a>
            
            </div>
            
            <div  class="col-md-2">
            
                <h5><b>MORE FROM CLICKY</b></h5>
                <br/>
                <a href="">Sell On Clicky</a>
                <br/><br/>
                <h5><b>SHOPPING FROM</b></h5>
                <br/>
                You're in Pakistan

            </div> 


</footer>

</html>
