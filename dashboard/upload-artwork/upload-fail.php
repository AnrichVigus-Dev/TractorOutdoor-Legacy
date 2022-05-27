
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
    <div class="progress-bar progress-bar-active">Step 2</div>
    <div class="progress-bar">Step 3</div>
    <div class="progress-bar">Step 4</div>
    <div class="progress-bar">Step 5</div>
</div>  

<!-- Progress Bar - End -->



<section class="body-container">

<h1 Style="text-align:center">We found an something wrong with your creative<br> Please see the report below and try again</h1>

<br>
<br>

<!-- Report of creative will be here - Only the billboard creative with errors will display here -->

<div class="location-upload-container">

    <!-- Roadside Section -->
    <div class="location-roadside-section" style="margin:auto">
        <!-- location name will be dynamic -->
        <h3>Cape Town | Roadside </h3>
        <h3 Style="color:Red">Sorry we found something wrong with this billboard</h3>

                    <!-- billboard slider for Roadside -->

                    <div class="roadside-slider">
                        <!-- Dynamic buttons depends on amount of billboards selected -->
                        <br>
                        <  <button>1</button> <button>2</button>  >
                        <!-- Slide 1-->
                        <div class="roadside-slide-one">
                            <!-- Billboard image will display here --> 
                            <img src="http://localhost:8888/TractorLegacy/img/billboard-img.jpg" width="300px">
                            <!-- Billboard size will be here -->
                            <p>16:9</p>
                            <!-- upload artwork -->
                            <form action="" style="padding-bottom:30px">
                                <input type="file" id="myFile" name="filename">
                                <p>1MB File Limit</p>
                                <input type="submit">
                                <button>Ignore this ratio</button>
                            </form>
                        </div>    
                    </div>
        </div>


</div>


<div class="upload-fail-btn-container">
    <button  onclick="window.location.href='http://localhost:8888/TractorLegacy/dashboard/upload-artwork/upload.php';">Submit updated creative</button>
    <button  onclick="window.location.href='#designer-assist';">Need Designer Assist?</button>
</div>



</section>


<!------------- Designer assist section - Show when buttons is clicked -------------->

<section class="body-container" id="designer-assist" style="margin-top:100px; background-color:#f2f2f2">

        <h1 style="text-align:center">Unsure and need Assistance?</h1>
        <p style="text-align:center">This section will be hidden until the user click on the "Need Designer Assist" button</p>
        <br>
        <h4 style="text-align:center">Not understandig the creative requirements for your selection of Billboards above?<br>
        Let us know your concerns and we will get in contact with you ...<br>
        List some general creative questions below ie.</h4>

        <!-- Tickbox field - Prepopulated questions -->
    <div style="margin:auto; width:1000px">
        <form style="background-color:#d1d1d1; padding:30px">
            <!-- Question 1 -->
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">How will I be able to get my creative below 1MB?</label><br>
             <!-- Question 2 -->
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">What’s the best practice font size to use on digital billboards?</label><br>
             <!-- Question 3 -->
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Please explain Aspect ratio</label><br>
              <!-- Question 4 -->
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Why should my creative not be 300 dpi?</label><br>
            <p style="margin-top:40px">Type your own question here:</p>
            <textarea name="paragraph_text" cols="50" rows="10" style="width:90%"></textarea>
            <br>
            <br>
            <input type="submit" value="Submit your Question">
        </form>    

    </div>
</section>








</body>
</html>