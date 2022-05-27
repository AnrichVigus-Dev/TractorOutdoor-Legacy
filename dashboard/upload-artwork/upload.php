
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

        <h2 Style="text-align:center">
            Upload final creative(s) for your selected billboards
        </h2>
        <p Style="text-align:center">
            List specs & showcase of examples based on Network Selection’s “Display Ratio“ here.
        </p>

<!-- What location the user select on the upload-artwork/index.php page will display here -->

<div class="location-upload-container">



            <!-- Roadside Section -->
            <div class="location-roadside-section">
                <!-- location name will be dynamic -->
                <h3>Cape Town | Roadside </h3>

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


            <!-- Forecourt Section -->
            <div class="location-forecourt-section">
                <!-- location name will be dynamic -->
                <h3>Cape Town | Forecourt </h3>

                    <!-- billboard slider for Forecourt -->

                    <div class="forecourt-slider">
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


            </div>



            <!-- Designer assistance Button Section - Start -->
                <div class="designer-assist-container">
                    <div class="designer-assist-container-inner">
                        <h3>Unsure and need assistance?</h3> <button onclick="window.location.href='../upload-artwork/designer-assist.php';">Request Designer Assistance</button>
                    </div>
                </div>

                  

                <div style="margin:auto; width:100%; text-align:center; padding-top:40px">
                    <button onclick="window.location.href='#designer-assist';" class="btn">Submit Artwork</button>
                    <p>If Artwork not approved by the vetting system<br>Popup will happen thats says sorry something went wrong</p>
                </div>
            <!-- Designer assistance Button Section - End-->

</section>




<!------------- Designer assist section - Show when buttons is clicked -------------->

    <section class="body-container" id="designer-assist" style="margin-top:100px; background-color:#f2f2f2">

        <h1 style="text-align:center">Unsure and need Assistance?</h1>
        <p style="text-align:center">This section will be hidden until the user click on the "Need Designer Assist" button</p>
        <br>
        <h4 style="text-align:center">Not understandig the creative requirements for your selection of Billboards above?<br>
        Let us know your concerns and we will get in contact with you ...<br>
        List some general creative questions below ie.</h4>



        <!-- FAQ Section -->

        <button class="accordion">Question 1</button>
            <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        <button class="accordion">Question 2</button>
            <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        <button class="accordion">Question 3</button>
            <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        <button class="accordion">Question 4</button>
            <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Question 5</button>
            <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        <button class="accordion">Question 6</button>
            <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        <button class="accordion">Question 7</button>
            <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
        <button class="accordion">Still not sure? submit a question</button>
            <div>
                <textarea name="paragraph_text" cols="50" rows="10" style="width:90%"></textarea><br>
                <input type="submit" value="Submit your Question">
            </div>

        <!-- FAQ Section -->


            <!-- Ready to submit? button -->

            <div style="margin:auto; width:100%; text-align:center; padding-top:40px" >
                <button class="btn" onclick="window.location.href='#';">Want to upload now?</button>
                <p>If the user understand the specs they can upload now</p>
            </div>

            <!-- Ready to submit? button -->

    </section>










<script>
          // FAQ Section

          var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
</script>    

<!-- Javascript link -->
<script src='/js/main.js'></script>




</body>
</html>


