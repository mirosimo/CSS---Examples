<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Card Flip Effect</title>
        <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>" />            
    </head>
    <body>
        <div class="container"> 
            <div class="card-grid"> 
                <div class="card" onclick="changeFlipStatus(event)">
                    <div class="front">
                        FRONT
                    </div>    
                    
                    <div class="back">
                        BACK
                    </div>
                </div>
                
                <div class="card"  onclick="changeFlipStatus(event)">
                    <div class="front">
                        <img src="img/formule-front.jpg">
                    </div>    
                    
                    <div class="back">
                        <img src="img/formule-back.jpg">
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            function changeFlipStatus(event) {                                     
                // if classlist contains class flip remove flip
                // else add flip to classlist                
                if (event.target.classList.contains('front') || event.target.classList.contains('back')) {
                    event.target.parentElement.classList.toggle('flip');
                } 
                else if (event.target.tagName.toLowerCase() === 'img') {                    
                    event.target.parentElement.parentElement.classList.toggle('flip');
                }                
                else {
                    event.target.classList.toggle('flip');
                }
            }
        </script>
    </body>
</html>