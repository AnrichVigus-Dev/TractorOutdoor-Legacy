<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8888/TractorLegacy/css/dashboard.css">
    <title>Dashboard</title>
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
    <div class="progress-bar progress-bar-active">Stage 1</div>
    <div class="progress-bar">Step 2</div>
    <div class="progress-bar">Step 3</div>
    <div class="progress-bar">Step 4</div>
    <div class="progress-bar">Step 5</div>
</div>  

<section class="body-container">

<h1 Style="text-align:center">Your billboards awaiting artwork:</h1>
<p Style="text-align:center">Please uplaod your creative by location below </p>
<p Style="text-align:center">Comments:<br> // We show ony the location the user selected on the "select-location.php" page //</p>

<!-- The users billboards they selected -->

<div class="billboards-selection-container">

    <div class="billboards-selection-inner">
        <h2 style="padding-top:40px">Cape Town Billboard(s)</h2>
        <!-- this will be added acroding to what the user selecte -->
        <p> Selected: Roadside + Forecourt</p>
        <!-- User Supply artwork here -->
        <button onclick="window.location.href='../upload-artwork/upload.php';">Supply Artwork</button>
        <p>Status: <span style="color:red">Outstanding</span> / <span style="color:green">Uploaded</span></p>
    </div> 

    <div class="billboards-selection-inner">
        <h2 style="padding-top:40px">Johannesburg Billboard(s)</h2>
        <!-- this will be added acroding to what the user selecte -->
        <p> Selected: Roadside + Forecourt</p>
        <!-- User Supply artwork here -->
        <button onclick="window.location.href='../upload-artwork/upload.php';">Supply Artwork</button>
        <p>Status: <span style="color:red">Outstanding</span> / <span style="color:green">Uploaded</span></p>
    </div> 

    <div class="billboards-selection-inner">
        <h2 style="padding-top:40px">Durban Billboard(s)</h2>
        <!-- this will be added acroding to what the user selecte -->
        <p> Selected: Roadside </p>
        <!-- User Supply artwork here -->
        <button onclick="window.location.href='../upload-artwork/upload.php';">Supply Artwork</button>
        <p>Status: <span style="color:red">Outstanding</span> / <span style="color:green">Uploaded</span></p>
    </div> 

</div>


<!-- Agree and submit -->

                <!-- This section can be grey out untill all artwork is supplied -->
                <div class="agree-submit-container">
                    <div class="agree-submit-container-inner">

                        <input id="checkbox" type="checkbox" />
                        <label for="checkbox">I agree with Tractor T&C’s and ready to submit my creatives for approval</label>
                        <br>
                        <!-- We need to add reCaptcha here -->
                        <br>
                        <img src="http://localhost:8888/TractorLegacy/img/recaptha-img.jpg" width="250">
                        <br>
                        <br>
                        <button onclick="window.location.href='../upload-artwork/upload-success.php';">Submit Artwork</button>
                        <p>If Artwork approved by vetting system</p>
                    </div>
                </div>

<!-- Agree and submit -->


</section>



</body>
</html>