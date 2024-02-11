# Description
Example where image size is adjusted to the size of outer div container . 

## index.php
```
<html lang="en">

<head>
  <meta charset="UTF-8">  
  <link rel="stylesheet" href="style.css?time=<?php echo time();?>">
  <title>Image Resizible</title>
</head>

<!-- Example where image size is adjusted to the size of outer div container -->

<body>  
      <div class="img-wrapper">                    
          <img class="main-img" src="monkey.jpg" alt="Monkey image">          
      </div>          
</body>

</html>
```
## style.css
```
.img-wrapper {
    max-width: 700px;
    border: 5px solid blue;
}

.img-wrapper img {
    display: block;
    object-fit: cover;
    width: 100%;
    max-width: 100%; 
}
```
