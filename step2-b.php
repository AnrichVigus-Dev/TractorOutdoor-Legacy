<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
    <title>Step 2</title>
</head>
<body>

    <h1>Collect Campaign Information</h1>



<h3>Select the region</h3>

<button id="btn-cpt">Cape Town</button>
<button id="btn-durban">Durban</button>
<button id="btn-jhb">Johannesburg</button>

<!-- CAPE TOWN -->
<section id="region-capetown">
<h3>Cape Town</h3>
<div class="region-selction-cont" style="display:flex; width:800px; gap:30px">
    <div class="region-selction-inner">
       
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Location 1</label><br>
    </div>
    <div class="region-selction-inner">
    
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Location 2</label><br>
    </div>
    <div class="region-selction-inner">

            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Location 3</label><br>
    </div>    
</div> 

</section>

<!-- DURBAN -->
<section id="region-durban" >
<h3>Durban</h3>
<div class="region-selction-cont" style="display:flex; width:800px; gap:30px">
    <div class="region-selction-inner">
 
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Location 1</label><br>
    </div>
    <div class="region-selction-inner">
  
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Location 2</label><br>
    </div>
    <div class="region-selction-inner">
   
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Location 3</label><br>
    </div>    
</div> 

</section>

<!-- JOHANNESBURG -->
<section id="region-johannesburg"  >
<h3>Johannesburg</h3>
<div class="region-selction-cont" style="display:flex; width:800px; gap:30px">
    <div class="region-selction-inner">
  
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Location 1</label><br>
    </div>
    <div class="region-selction-inner">
 
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Location 2</label><br>
    </div>
    <div class="region-selction-inner">
 
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Location 3</label><br>
    </div>    
</div> 

</section>



<!-- Javascript link -->
<script>
        // Cape Town
const targetCpt = document.getElementById("region-capetown");
const btn = document.getElementById("btn-cpt");
    btn.onclick = function () {
      if (targetCpt.style.display !== "none") {
        targetCpt.style.display = "none";
      } else {
        targetCpt.style.display = "block";
      }
    };


// Durban
const targetDurban = document.getElementById("region-durban");
const btn = document.getElementById("btn-durban");
    btn.onclick = function () {
      if (targetDurban.style.display !== "none") {
        targetDurban.style.display = "none";
      } else {
        targetDurban.style.display = "block";
      }
    };


// Johannesburg
const targetDiv = document.getElementById("region-johannesburg");
const btn = document.getElementById("btn-jhb");
    btn.onclick = function () {
      if (targetDiv.style.display !== "none") {
        targetDiv.style.display = "none";
      } else {
        targetDiv.style.display = "block";
      }
    };


</script>

</body>
</html>