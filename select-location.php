<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Select location</title>
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
    <div class="progress-bar">Step 3</div>
    <div class="progress-bar">Step 4</div>
    <div class="progress-bar">Step 5</div>
</div>    

<!-- Progress Bar - End -->


<section class="body-container">




<div class="location-selctor-container">
  <h1>Select your location</h1>

  <!-- Select location - Cape Town -->

    <div class="cpt-location-selctor">
        <input type="checkbox" name="vehicle1" value="Bike" id="tickCapetown" onclick="selectCapetown()">
        <label for="myCheck">Cape Town</label>
    </div>  


    <div id="CapeTownBoards" style="display:none" class="cpt-location-selctor-expand">
    <p style="margin-top:-30px"><strong>Cape Town:</strong> Either select one or both</p>
        <div class="cpt-location-selctor-expand-inner">

               <!-- RoadSide - Cape Town -->
              <div class="roadside-box">
                <img src="img/billboard-img.jpg" style="padding:10px; width:300px">
                <br>
                <input type="checkbox" name="vehicle1" value="Bike">
                <label for="myCheck">Forecourt</label>
              </div>

              <!-- Forecourt - Cape Town -->
              <div class="forecourt-box">
                <img src="img/billboard-img.jpg" style="padding:10px; width:300px">
                <br>
                <input type="checkbox" name="vehicle1" value="Bike">
                <label for="myCheck">Roadside</label>
              </div>
              
        </div>
    </div>  

<br>

      <!-- Select location - Johannesburg -->
      <div class="cpt-location-selctor">
        <input type="checkbox" name="vehicle1" value="Bike" id="tickJohannesburg" onclick="selectJohannesburg()">
        <label for="myCheck">Johannesburg</label>
    </div>  

    <div id="JohannesburgBoards" style="display:none" class="cpt-location-selctor-expand">
    <p style="margin-top:-30px"><strong>Johannesburg:</strong> Either select one or both</p>
        <div class="cpt-location-selctor-expand-inner">
            <!-- RoadSide - Johannesburg -->
              <div class="roadside-box">
                <img src="img/billboard-img.jpg" style="padding:10px; width:300px">
                <br>
                <input type="checkbox" name="vehicle1" value="Bike">
                <label for="myCheck">Forecourt</label>
              </div>
              <!-- Forecourt - Johannesburg -->
              <div class="forecourt-box">
                <img src="img/billboard-img.jpg" style="padding:10px; width:300px">
                <br>
                <input type="checkbox" name="vehicle1" value="Bike">
                <label for="myCheck">Roadside</label>
              </div>
        </div>
    </div>  

    <br>

      <!-- Select location - Durban -->
      <div class="cpt-location-selctor">
        <input type="checkbox" name="vehicle1" value="Bike" id="tickDurban" onclick="selectDurban()">
        <label for="myCheck">Durban</label>
    </div>  

    <div id="DurbanBoards" style="display:none" class="cpt-location-selctor-expand">
    <p style="margin-top:-30px"><strong>Durban:</strong> Either select one or both</p>
        <div class="cpt-location-selctor-expand-inner">
          
              <div class="roadside-box">
                <img src="img/billboard-img.jpg" style="padding:10px; width:300px">
                <br>
                <input type="checkbox" name="vehicle1" value="Bike">
                <label for="myCheck">Forecourt</label>
              </div>

              <!-- <div class="forecourt-box">
                <img src="img/billboard-img.jpg" style="padding:10px; width:300px">
                <br>
                <input type="checkbox" name="vehicle1" value="Bike">
                <label for="myCheck">Roadside</label>
              </div> -->
        </div>
    </div>  




</div>
     

      </section>



<div class="date-select-btn-container">
    <button onclick="window.location.href='./select-date.php';">Select the start and end date</button>
</div>






<!-- Javascript link -->
<script src='./js/main.js'></script>

</body>
</html>