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
<link rel="stylesheet" href="buynow.css">

</head>

<header>
<div class="col-md-12">
    <div class="navbar ">
        <div class="container-fluid">
        <div  class="col-md-4 navbar-header">
        
        <a href="homepage.php"><img src= "h-img/logo.png" class="image1"></a>
        
        </div>
        <div  class="col-md-4 navbar-header">
        
            <h4 style="margin-top: 20px;"><b>SHOPPING BAG</b></h4>
            
        </div>

        <div  class="col-md-4 navbar-header">
        
            <div class="col-md-2"><img src= "h-img/sprite-secure.png" class="image1" style="width: 30px; height: 30px; margin-left: 30px;"></div>
            <div class="col-md-5" style="margin-top: 15px; margin-left: 5px;">1 0 0 % SECURE</div>
            <div class="col-md-5" ></div>
        </div>

        </div>
    </div>
</div>
</header>

<body>
<div class="col-md-12" style= "width: 1280px; height: 20px; background-color: rgb(233, 233, 233);">
</div>


<div class="col-md-12" style= "width: 1280px; height: 1100px; background-color: rgb(233, 233, 233);">
<div class="col-md-1" style="background-color: rgb(233, 233, 233);">

</div>
<div class="col-md-5" style="background-color: white">
</br>
<h3 style="margin-left: 0px; margin-top: 20px;"><b>DELIEVERY ADDRESS</b></h3>
</br>
<h5 style="margin-left: 0px; margin-top: 20px; "><b>NEW ADDRESS</b></h5>
</br>
<form class="form-group">
    <label for="Name" style="color: grey;">FIRST NAME:</label><br>
    <input type="text" id="fname"    class="simple"/><br><br>
    <span id="name-text" style="display: none; color: red;">Enter correct name</span>

    <label for="Name" style="color: grey;">LAST NAME:</label><br>
    <input type="text" id="lname"    class="simple"/><br><br>
    <span id="name-text" style="display: none; color: red;">Enter correct name</span>

    <label for="Phone" style="color: grey;">MOBILE:</label><br>
    <input type="text" id="number" class="simple"/><br><br>
    <span id="name-text" style="display: none; color: red;">Enter correct name</span>

    <label for="text" style="color: grey;">COMPLETE ADDRESS ( H #, ST # & LANDMARK )</label><br>
    <input type="text" id="address"   class="simple"/><br><br>
    <span id="name-text" style="display: none; color: red;">Enter correct name</span>

    <label for="City" style="color: grey;"><b>City:</b></label><br>
    <select>
        <option></option>
        <option>Lahore</option>
        <option>Islamabad</option>
        <option>Karachi</option>
    </select><br><br>
    <span id="City-text" style="display: none; color: red;">Enter correct City</span>
</br>

<h5 style="margin-left: 15px; margin-top: 20px;"><b>PAYMENT METHOD</b></h5>
</br>

    <input type="radio" id="card" name="payment" ><lable for="Card" /><b> Credit/Debit Card</b></lable>
</br>
    <input type="radio" id="cash" name="payment"><lable for="Cash" /><b>Cash On Delivery</b></lable><br><br>
</br>
<button style="width: 400px; height: 40px; font-size: 15px;" class="buy-now">Place Order</button>
</br></br>
</form>

<div >

</div>

</div>

<div class="col-md-1" style="background-color: rgb(233, 233, 233);">

</div>


<div class="col-md-4" style="background-color: white">
    <h5 style="margin-left: 15px; margin-top: 20px;"><b>SUB TOTAL: </b></h5>
</br>
<h5 style="margin-left: 15px; margin-top: 20px;"><b>DELIEVERY CHARGES: </b></h5>
</br>
<h5 style="margin-left: 15px; margin-top: 20px;"><b>TOTAL: </b></h5>
</br>
</div>


<div class="col-md-1" style="background-color: rgb(233, 233, 233);">

</div>




</div>
</div>
</body>

</html>
