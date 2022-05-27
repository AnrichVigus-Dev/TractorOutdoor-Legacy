<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>SStep 4 - Registration</title>
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
    <div class="progress-bar progress-bar-active">Step 2</div>
    <div class="progress-bar progress-bar-active">Step 3</div>
    <div class="progress-bar progress-bar-active">Step 4</div>
    <div class="progress-bar">Step 5</div>
</div>    

<!-- Progress Bar - End -->


<section class="body-container">

    <h1 style="text-align:center">Complete Company Registration</h1>
    

    <!-- Place Holder form -->

    <form action="#">
  <div class="container">

    <p>Please fill in this form to create an account.</p>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

    


</section>




<div class="date-select-btn-container">
    <button onclick="window.location.href='./thankyou-page.php';">Register now</button>
</div>


    
</body>

</html>