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
        
        </div>
        <div class="col-md-4" >
            <a href="homepage.php"><h5  style= "margin-left: 250px; color: black; margin-top:20px;"><b>BACK TO SHOPPING</b></h5></a>
        </div>

        <div class="col-md-2" >
            <a href="#Model1" data-toggle="modal"><h5  style= " color: black; margin-top: 20px;"><b>LOG IN</b></h5></a>
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
                        <button type="button" onclick="myFunction()" onMouseOver="this.style.backgroundColor='#0063bf'" onMouseOut="this.style.backgroundColor='#0063bf'" class="btn btn-primary Submit" >Log in</button>
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



<div class="col-md-12" style="height: 100px; background-color: rgb(203, 50, 89);">
    <center><h1 style="margin-top: 30px; color: white;"><b>Hi, How can we help? </b> </h1></center>
</div>

<div class="col-md-12" style="height: 100px; background-color: rgb(233, 233, 233);">
</div>

<div class="col-md-12" style= "width: 1280px; height: 350px; background-color: rgb(233, 233, 233);">
    <div class="col-md-1" style="background-color: rgb(233, 233, 233);">
    
    </div>

    <div class="col-md-10" style="background-color: white; height: 330px;">
       <div class="col-md-12">
          <div class="col-md-4" >
          </br></br>
          <div class="col-md-12">
             <div class="col-md-4">
                 <a href=""><img src= "h-img/shipping.png" style="height: 80px; width: 80px; margin-bottom: 12px; " ></a>
             </div>
             <div class="col-md-8" style="margin-top: 18px; ">
                <a href="" onMouseOver="this.style.color='#4169E1'" onMouseOut="this.style.color='#000000'"><b style="font-size: 15px;">SHIPPING & DELIEVERY</b></a>
             </div>
             
          </div>
          </div>
          <div class="col-md-4" >
        </br></br>
        <div class="col-md-12">
           <div class="col-md-4">
               <a href=""><img src= "h-img/Return.png" style="height: 80px; width: 80px; margin-bottom: 12px;" ></a>
           </div>
           <div class="col-md-8" style="margin-top: 18px; ">
              <a href="" onMouseOver="this.style.color='#4169E1'" onMouseOut="this.style.color='#000000'"><b style="font-size: 15px;">RETURNS & REPLACEMENTS</b></a>
           </div>
           
        </div>
          </div>
          <div class="col-md-4" >
        </br></br>
        <div class="col-md-12">
           <div class="col-md-4">
               <a href=""><img src= "h-img/Cancellations.png" style="height: 80px; width: 80px; margin-bottom: 12px;" ></a>
           </div>
           <div class="col-md-8"  style="margin-top:22px;">
              <a href="" onMouseOver="this.style.color='#4169E1'" onMouseOut="this.style.color='#000000'"><b style="font-size: 15px;">CANCELLATIONS</b></a>
           </div>
           
        </div>
    </br>
          </div>
        </br>

        </div>
    </br>


        <div class="col-md-12"></br>
            <div class="col-md-4" >
            </br></br>
            <div class="col-md-12">
               <div class="col-md-4">
                   <a href=""><img src= "h-img/Payment.png" style="height: 80px; width: 80px; margin-bottom: 12px;" ></a>
               </div>
               <div class="col-md-8" style="margin-top: 18px; ">
                  <a href="" onMouseOver="this.style.color='#4169E1'" onMouseOut="this.style.color='#000000'"><b style="font-size: 15px;">PAYMENTS AND REFUNDS</b></a>
               </div>
               
            </div>
            </div>
            <div class="col-md-4" >
          </br></br>
          <div class="col-md-12">
             <div class="col-md-4">
                 <a href=""><img src= "h-img/Business.png" style="height: 80px; width: 80px; margin-bottom: 12px;" ></a>
             </div>
             <div class="col-md-8" style="margin-top: 18px; ">
                <a href="" onMouseOver="this.style.color='#4169E1'" onMouseOut="this.style.color='#000000'"><b style="font-size: 15px;">INQUIRIES & BULK ORDERS</b></a>
             </div>
             
          </div>
            </div>
            <div class="col-md-4" >
          </br></br>
          <div class="col-md-12">
             <div class="col-md-4">
                 <a href=""><img src= "h-img/Account.png" style="height: 80px; width: 80px; margin-bottom: 12px;" ></a>
             </div>
             <div class="col-md-8" style="margin-top: 22px; ">
                <a href="" onMouseOver="this.style.color='#4169E1'" onMouseOut="this.style.color='#000000'"><b style="font-size: 15px;">ACCOUNT SETTINGS</b></a>
             </div>
             
          </div>
            </div>
          </div>



    </div>
    
    <div class="col-md-1" style="background-color: rgb(233, 233, 233);">
      
    </div>
</br>

    
</div>


<div class="col-md-12" style="height: 60px; background-color: rgb(233, 233, 233);;">
   <center><h4><b>FREQUENTLY ASKED QUESTIONS</b></h4></center>
</div>




<div class="col-md-12" style= "width: 1280px; height: 500px; background-color: rgb(233, 233, 233);">
    <div class="col-md-1" style="background-color: rgb(233, 233, 233);">
    
    </div>

    <div class="col-md-10" style="background-color: white; height: 410px;">

        <div class="container"></br></br>
            <div class="panel-group" id="accordion">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">How can I keep track of the status of my orders?</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse ">
                
                  <div class="panel-body">The My Account section in your clicky App will help review the status of your orders, so that you can receive relevant information based on the respective Order Number.</div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Will I get a confirmation call from Clicky after placing order?</a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">No we dont call customers for order confirmation. All new customers are logged in to clicky app via OTP(one time password) so we take this as order confirmation and ship you the order right away.</div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">How can I cancel my order?</a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">In order to cancel your order, please login to clicky app in your my account section. Open the order you want to cancel and you will see an option to cancel the order. Your order can only be cancelled before it reaches the Dispatched status in your my account on Clicky app.</div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">What is the procedure for Returns or Exchange?</a>
                  </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                  <div class="panel-body">You can return your product easily through clicky app in few seconds.</div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">I wish to become a seller on Clicky</a>
                  </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">our team will reach you as soon as possible.</div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">I cant sign in to my account.</a>
                  </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                  <div class="panel-body">Go to Reset password page. Fill in your registered phone or email id and tap Rest Password. An otp will be sent to your medium either phone or email. Enter the otp and set a new password.</div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">What are the delivery charges?</a>
                  </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                  <div class="panel-body">Delivery charge is the fee that has to be paid for the on-time delivery of a purchased product. Our standard shipping charges are Rs 150</div>
                </div>
              </div>

            </div> 
          </div>

    </div>
    
    <div class="col-md-1" style="background-color: rgb(233, 233, 233);">
      
    </div>
</br>

    
</div>

</body>
<footer >
    <br/><br/>

        <div id="f1" class="col-md-3">
            <br/><br/>
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
            <br/><br/>
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
            <br/><br/>
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
        </br></br>
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