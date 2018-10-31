<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Icon Infographic by John Robertson</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/app.css"/>
    <link rel="stylesheet" href="css/hover.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton%7cDidact+Gothic" rel="stylesheet">

  </head>
    <body class="animated fadeIn">
     <h1 class="hidden">Icon Infographic by John Robertson</h1>



     <div id="container">    
     <h2 class="hidden">Icon Set</h2>  

     <header>
        <div class="row fullWidth">

            <div class="medium-8 large-8 columns">
            <h2 class="bounce">Are You A Pessimist or An Optimist?</h2>
            <p>Answer these series of questions to find out!</p>
            </div>

            <div class="medium-4 large-4 columns">
                <object class=" masks hvr-grow-rotate" data="images/masks.png"></object>
            </div>

        </div>
     </header> 


       <div class="row  fullWidth">
        <h1 class="hidden"> First Row of Questions</h1>

        <article class="columns large-4 light">
            <h3 class="hidden">Sun</h3>
             <object id="icon_sun" class="icon" data="images/icon_sun.svg"></object><br>
             <p class="hvr-grow-rotate">Do you find the sensation of the sun on your skin enjoyable?
 </p>
        </article>

        <article class="columns large-4 dark">
                 <h3 class="hidden">Plane</h3>
              <object id="icon_plane" class="icon" data="images/icon_plane.svg"></object><br>
             <p class="hvr-grow-rotate">Do you often find yourself in a state of panic when riding planes?</p>
        </article>

        <article class="columns  large-4 light">
            <h3 class="hidden">Zoom</h3>
            <object id="icon_zoom" class="icon" data="images/icon_zoom.svg"></object><br>
             <p class="hvr-grow-rotate">Do you ever feel like you have to search for a reason to get out of bed?</p>
        </article>

       </div> 

         <div class="row   fullWidth">
         <h1 class="hidden"> Second Row of Questions</h1>

        <article class="columns large-4 dark">
            <h3 class="hidden">Drop</h3>
             <object id="icon_drop" class="icon" data="images/icon_drop.svg"></object><br>
             <p class="hvr-grow-rotate">Do you enjoy the occasional rainy day?</p>
        </article>

        <article class="columns  large-4 light">
            <h3 class="hidden">Phone</h3>
              <object id="icon_phone" class="icon" data="images/icon_phone.svg"></object><br>
             <p class="hvr-grow-rotate">Do you enjoy talking to loved ones over the phone?</p>
        </article>

        <article class="columns large-4 dark">
        <h3 class="hidden">Star</h3>
            <object id="icon_star" class="icon" data="images/icon_star.svg"></object><br>
             <p class="hvr-grow-rotate">Do you feel like you're the star of your own world?</p>
        </article>

       </div> 

        <div class="row articleRow fullWidth">
       <h1 class="hidden"> Third Row of Questions</h1>

        <article class="columns large-4 light">
            <h3 class="hidden">Go</h3>
             <object id="icon_go" class="icon" data="images/icon_go.svg"></object><br>
             <p class="hvr-grow-rotate">Do you feel like you know where you're headed in life?</p>
        </article>

        <article class="columns large-4 dark">
            <h3 class="hidden">Pointer</h3>
              <object id="icon_pointer" class="icon" data="images/icon_pointer.svg"></object><br>
             <p class="hvr-grow-rotate">Do you feel like you belong in your household?</p>
        </article>

        <article class="columns  large-4 light">
            <h3 class="hidden">Rewind</h3>
            <object id="icon_rewind" class="icon" data="images/icon_rewind.svg"></object><br>
             <p class="hvr-grow-rotate">Do you feel like your life is just a cycle leading nowhere?</p>
        </article>

       </div> 

<footer class="row fullWidth">

    <h1>Results</h1>

<div class="large-4 columns">
    <div class="results">
        <h2 class="hidden">Optimist Result</h2>
    <p>If you answered yes to 7 or more of these questions:</p>
    <div id="changeResultOptimist"><button type="button" onclick="loadOptimist()">View Result</button></div></div>
</div>


<div class="large-4 columns">
    <div class="results">
          <h2 class="hidden">Indifferent Result</h2>
    <p>If you answered yes to 4-6 questions:</p>
     <div id="changeResultInBetween"><button type="button" onclick="loadInBetweener()">View Result</button></div>
</div>
</div>

<div class="large-4  columns">
    <div class="results">
          <h2 class="hidden">Pessimist Result</h2>
    <p>If you answered yes to 3 or less of these questions:</p>
       <div id="changeResultPessimist"><button type="button" onclick="loadPessimist()">View Result</button></div>
</div>
</div>


</footer>

<div class="copyright">
    <p>Infographic & Webpage Created by John Robertson 2018</p>
</div>
            
  </div>  
    <script src="js/app.js"></script>                  
    <script src="js/foundation.min.js"></script>
    <?php include 'includes/script.html'; ?>    
    <script>
		$(document).foundation();
    </script>
  </body></html>
