<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifeline Robotics - For investors</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/core.js" defer></script>
</head>
<body>
    <header>

    <a href="#"><img src="src/img/logo.png" alt="Logo"></a>

    </header>  
<?php 
include 'conn.php';
?>
    <section id="fsection">
    <h1>For Investors</h1>

    <div class="fsection-grid-container">

    <div class="grid-box1">
        <video controls autoplay muted
        src="src/video/lifeline_animation.mp4" autoplay="true" type="video/mp4" 
        video>
    </div><!-- Video Box -->

    <div class="grid-box2">

        <div id="text-carousel">
            <div class="PSlides">
            <p>Nordic Startup Awards, finalists in the category "Best Newcomer"</p>
            <p>-2020</p>
            </div>

             <div class="PSlides" style="display: none">
            <p>Got shortlisted for a #danishdesignaward2021 in the category of "Visionary Concepts"</p>
            <p>-2021</p>
            </div>

             <div class="PSlides" style="display: none">
            <p>Got nominated for the #NordicStartupAwards in the categories of Best Newcomer and Startup of the Year</p>
            <p>-2021</p>
            </div>

        </div>
          <!-- Next/prev buttons -->
             <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
             <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="dot-container">
             <span class="dot" onclick="currentSlide(1)"></span>
             <span class="dot" onclick="currentSlide(2)"></span>
             <span class="dot" onclick="currentSlide(3)"></span>
        </div><!-- dots -->
    </div><!-- Text Carousel -->

    <div class="grid-box3">
        <h2>Quick Numbers</h2>
        <div>
           <h3>Since year</h3> 
           <h4 class="count" data-target="2020">0</h4>
           <p>Have we Exsisted!</p>
        </div>
        <div>
            <h3>Tested People</h3> 
            <h4 class="count" data-target="204">0</h4>
            <p>This many people have we tested!</p>
        </div>
        <div>
            <h3>Partners</h3> 
            <h4 class="count" data-target="8000">0</h4>
            <p>Text</p>
        </div>
    </div><!-- Numbers -->

    <div class="grid-box4">
        <h3>If you want to see more, then check out our Pitch Deck!</h3>
        <a href="src/pdf/pitch_deck.pdf"><button><img src="src/img/pdf.png" alt="PDF"></button></a>
    </div><!-- PDF -->

    </div><!-- First Section Grid -->
    
    </section>

    <footer>

    </footer>

</body>
</html>