<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Business information</title>
</head>


<body>

<!-- Header Start -->

<nav class="nav">
   <div class="logo-container"> 
      <div><p>Logo here</p></div>
   </div>   
</nav>   

<!-- Header End -->

<!-- Progress Bar - Start -->

<div class="progress-container">
    <div class="progress-bar progress-bar-active">Step 1</div>
    <div class="progress-bar">Step 2</div>
    <div class="progress-bar">Step 3</div>
    <div class="progress-bar">Step 4</div>
    <div class="progress-bar">Step 5</div>
</div>    

<!-- Progress Bar - End -->


<section class="body-container">

    <h1>Business information</h1>

    <form action="./select-location.php"  method="POST" class="business-info-container">
        <!-- Name -->
        <input type="text" id="name" name="fname" value="Name and surname" class="bus-info-field">
        <!-- Company name -->
        <input type="text" id="companyname" name="lname" value="Company name" class="bus-info-field">
        <!-- Designation -->
        <input type="text" id="designation" name="lname" value="Designation" class="bus-info-field">
        <!-- Email address -->
        <input type="text" id="email" name="lname" value="Email address" class="bus-info-field">
        <!-- Sector -->
        <input type="text" id="sector" name="lname" value="Sector" class="bus-info-field">
        <!-- Employees -->
        <input type="text" id="employees" name="lname" value="Employees" class="bus-info-field">
        <!-- BEE -->
        <input type="text" id="bee" name="lname" value="BEE" class="bus-info-field">
        <!-- Turnover -->
        <input type="text" id="turnover" name="lname" value="Turnover" class="bus-info-field">
        <!-- Submit -->
        <br>
        <input type="submit" value="Submit" id="button" class="business-info-submit">
    </form> 


</section>   
</body>

</html>