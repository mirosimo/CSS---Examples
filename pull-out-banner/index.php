<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pull out banner example</title>
        <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>" />            
    </head>
    <body>
        
<div id="main-dsc">           
        <div class="pull-out-container">
                <!-- Left area - Desktop version, Bottom area - Mobile version-->
                <div class="banner-wrapper">
                    <div class="banner">
                        <h2>Ahoj, usměj se</h2>                 
                        <div>
                            <img src="img/smile-transparent.png" alt="Just Smile">
                        </div>
                    </div>
                </div>    
                
                <!-- Center Area Desktop version, Top area - Mobile version-->
                <div class="main-content">                 
                    <img src="img/simps-bald-dad.jpg" alt="Some image">
                </div>
                
                <!-- Right area - Desktop version, NONE - Mobile version 
                     Helping div - just for cenetering reasons for desktop version
                        -->
                <div class="right-side">
                </div>                
        </div>
</div>
    </body>
</html>