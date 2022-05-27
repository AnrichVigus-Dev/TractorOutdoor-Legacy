<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Step 3 - Date Selection</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

</head>
<body>

<!-- Header Start -->

<nav class="nav" style="margin-top:-16px">
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
    <div class="progress-bar">Step 4</div>
    <div class="progress-bar">Step 5</div>
</div>    

<!-- Progress Bar - End -->


<section class="body-container">

<h1 style="text-align:center">Select the start and end date</h1>
<p style="text-align:center">Terms of this date selection should be here</p>

<!-- Date Select Container -->
<div class="date-select-container">
    <label for="from">From</label>
    <input type="text" id="from" name="from">
    <label for="to">to</label>
    <input type="text" id="to" name="to">
</div>
<!-- Date Select Container -->

<p style="text-align:center">Disclaimer that Tractor deserves the right to change flight dates, above pure indication.</p>

<div class="date-select-btn-container">
<button onclick="window.location.href='./register.php';">Confirm date</button>
</div>

</section>



<!-- Javascript link -->
<script src='./js/main.js'></script>

</body>
</html>