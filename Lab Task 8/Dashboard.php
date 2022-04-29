<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> DASHBOARD </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #339966;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #53c68c;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body style="background-color:#dcfff9">

<div class="header">  
    <p><h1>
           <span style="color:white;"> GADGET MART </span>
           <span style="color:red"><sup>BD</sup></span>
           </h1>
        </p>
       <h3 align= "right">
        <span> Welcome </span>
           <span style="color:purple"> <?php echo $_SESSION["Name"]?> </span>
       <span><a style="color:purple;" href="Home page.php"> | Logout </a></span>
           </h3>
    <hr>  
  </div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <fieldset>
    <legend> <h2> <u> Account </u> </h2></legend><h1 align="center" ><h1/>
             <h2>
             <ul>
                <li> <a style ="color:white;" href="Dashboard.php">Dashboard </a></li> 
                <li> <a style ="color:white;" href= "My Profile.php">My Profile</a> </li>
                <li> <a style ="color:white;" href="Change Password.php">Change Password</a> </li> 
                <li> <a style ="color:white;" href="Inventory.php">Inventory</a> </li>
                <li> <a style ="color:white;" href="Report.php">Report</a> </li> 
                <li> <a style ="color:white;" href="Reviews.php">Reviews and Complaints</a> </li>
            </ul>  
            </h2>
  </fieldset>
  </div>

  <div class="col-6 col-s-9">
    <p><h1 align="center">
           <span style="color:green;"> GADGET MART </span>
           <span style="color:red"><sup>BD</sup></span>
           </h1>
        </p>
  </div>
</div>

  <?php
    include "Footer.php";
  ?>

</body>
</html>