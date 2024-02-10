<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">  
  <link rel="stylesheet" href="style.css?time=<?php echo time();?>">
  <title>Image - Resize - Enlarge</title>
</head>

<body>
  <div class="img-and-title-wrapper">
      <div class="img-wrapper">          
          <!-- Main image -->
          <img class="main-img" src="opice.jpg" alt="Monkey image">
          
          <!-- Enlarge icon -->
          <div class="enlarge-icon-wrapper">
            <img class="enlarge-icon" src="enlarge-icon2.png" alt="enlarge icon">
          </div>          
      </div>
      
      <!-- Image Description -->
      <div class="title-wrapper">
          <span>Ahoj, děláš něco ?</span>
      </div>

  </div>
    
  <!-- Modal window for enlarged image -->  
  <div class="modal-container">  
     
     <!-- Close icon -->
     <div class="close-icon-wrapper">
            <img class="close-icon" src="close-icon.png" alt="close icon">
     </div> 
      
     <!-- Container for enlarged image -->
     <div class="modal-inner-wrapper">        
        <div class="modal-img-wrapper">
            
        </div>
     </div>
  </div>
    
  <script src="image-enlarge.js?<?php echo time();?>"></script>
</body>

</html>