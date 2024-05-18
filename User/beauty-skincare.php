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




    <div class="col-md-12" style="height: 70px; background-color: rgb(230, 230, 230);">
    </br>
    <h5 style="margin-left: 10px;"><a href="homepage.php"  onMouseOver="this.style.color='#4169E1'" onMouseOut="this.style.color='#000000'"> 
        &nbsp;&nbsp;&nbsp;Home </a> >  &nbsp;&nbsp;&nbsp;
        Beauty > 
        <a href="beauty-skincare.php"onMouseOver="this.style.color='#4169E1'" onMouseOut="this.style.color='#000000'"> 
        &nbsp;&nbsp;&nbsp;Skincare</a></h5>
    </div>


    <div class="col-md-12" style="height: 50px; background-color: rgb(255, 255, 255);">
    <h4 style="margin-top: 20px;"><b><center>Skincare</center></b></h4>
    </div>



    <div class="container-fluid">

        <div class="col-md-12">

            <div class="col-md-3">
            </br>
                <a href ="b-s-p1.php"><img src="h-img/beauty1.jpg" class="img-responsive " ></a>
            </div>
        
            <div class="col-md-3">
            </br>
                <a href ="b-s-p2.php"><img src="h-img/beauty2.png" class="img-responsive " ></a>
            </div>
        
            <div class="col-md-3">
            </br>
                <a href =" "><img src="h-img/beauty3.jpeg" class="img-responsive " ></a>
            </div>
        
            <div class="col-md-3">
            </br>
                <a href =" "><img src="h-img/beauty9.jpg" class="img-responsive " ></a>
            </div>

            <div class="col-md-3">
            </br>
                <center><b> ORDINARY fluid</b> </center> </br>
                    <div class = "col-md-4"  >   ̶R̶s̶ ̶1̶0̶9̶9̶  </div> 
                    <div class = "col-md-4" style="color: red; ">  Rs 999    </div>
                    <div class = "col-md-4">   </div>
           
            </div> 

            <div class="col-md-3">
            </br>
                <center><b> ORDINARY healthcare</b> </center> </br>
                    <div class = "col-md-4"  >   ̶ ̶R̶s̶ ̶1̶2̶0̶0̶ </div> 
                    <div class = "col-md-4" style="color: red; ">  Rs 999    </div>
                    <div class = "col-md-4">   </div>
           
            </div> 
        
            <div class="col-md-3">
            </br>
                <center><b> ORDINARY primer</b> </center> </br>
                    <div class = "col-md-4"  > ̶R̶s̶ ̶1̶2̶4̶9̶  </div> 
                    <div class = "col-md-4" style="color: red; ">  Rs 999    </div>
                    <div class = "col-md-4">   </div>
           
            </div> 
        
            <div class="col-md-3">
            </br>
                <center><b> KARASTASE conditioner</b> </center> </br>
                    <div class = "col-md-4"  > ̶R̶s̶ ̶2̶1̶0̶9̶  </div> 
                    <div class = "col-md-4" style="color: red; ">  Rs 1999    </div>
                    <div class = "col-md-4">   </div>
           
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