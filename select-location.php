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
<button id="btn-drb">Durban</button>

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



<!-- CAPE TOWN -->
<section id="region-durban">
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
            <label for="vehicle1">Location 3</label><br>
    </div>    
</div> 

</section>

<br>
<br>
<br>

<button onclick="window.location.href='./select-date.php';">Select date</button>



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


// durban
const targetdrb = document.getElementById("region-durban");
const btn2 = document.getElementById("btn-drb");
    btn2.onclick = function () {
      if (targetdrb.style.display !== "none") {
        targetdrb.style.display = "none";
      } else {
        targetdrb.style.display = "block";
      }
    };

</script> 
</body>
</html>