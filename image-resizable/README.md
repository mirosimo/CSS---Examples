# Description
Example where image size is adjusted to the current size of outer div container - image flexibility. 

## index.php
```
<body>  
      <div class="img-wrapper">                    
          <img class="main-img" src="monkey.jpg" alt="Monkey image">          
      </div>          
</body>
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
