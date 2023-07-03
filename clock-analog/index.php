<!DOCTYPE html>
<html>
    <head>
        <title>Analog clock example</title>
        <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>" />            
    </head>
    <body>
        <div class="clock">            
                <div class="hour" id="hour"></div>
                <div class="min" id="min"></div>
                <div class="sec" id="sec"></div>
        </div>
        <script type="text/javascript" src="js/clock.js?<?php echo time(); ?>"></script>
    </body>
</html>