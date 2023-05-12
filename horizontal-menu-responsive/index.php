<!DOCTYPE html>
<html lang="en">
	<head>
            <meta charset="utf-8"> 
            <title>Horizontal Menu</title>
            <link rel="stylesheet" href="style.css?<?php echo time(); ?>" />            
            <link rel="stylesheet" href="style-mobile.css?<?php echo time(); ?>" />            
	</head>
	<body>
            <div class="application-container">
                <div class="app-header">
                    <!-- Close menu button - Visible just for screen width less than 700px -->
                    <div class="open-mobile-menu-btn-wrapper">
                        <div class="open-mobile-menu-btn">
                            <span></span>
                        </div>
                        <SPAN class="mobile-menu-btn-text">Menu</SPAN>
                    </div>
                    
                    <div class="menu-overlay"></div>
                    
                    <nav class="m-navbar">
                        <div class="close-mobile-menu-btn">
                            <img src="img/close.svg" alt="Close mobile menu">
                        </div>
                        <ul id="menu">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Computers</a>
                                <ul class="m-sub-menu">
                                    <li>
                                        <a href="#">Desktop</a>
                                        <ul class="m-sub-menu">
                                            <li><a href="#">Acer</a></li>
                                            <li><a href="#">IBM</a></li>
                                            <li><a href="#">Atari</a></li>
                                            <li><a href="#">DELL</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Laptop</a>
                                        <ul class="m-sub-menu">
                                            <li><a href="#">Acer</a></li>
                                            <li><a href="#">IBM</a></li>
                                            <li><a href="#">Atari</a></li>
                                            <li><a href="#">DELL</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mobile Phones</a>
                                <ul class="m-sub-menu">
                                    <li>
                                        <a href="#">Smart Phones</a>
                                        <ul class="m-sub-menu">
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Apple</a></li>
                                            <li><a href="#">Honor</a></li>
                                            <li><a href="#">Xiaomi</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Feature Phones</a>
                                        <ul class="m-sub-menu">
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Apple</a></li>
                                            <li><a href="#">Honor</a></li>
                                            <li><a href="#">Xiaomi</a></li>`
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Rugged Phones</a>
                                        <ul class="m-sub-menu">
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Apple</a></li>
                                            <li><a href="#">Honor</a></li>
                                            <li><a href="#">Xiaomi</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Audio</a></li>                    
                            <li><a href="#">Contact</a></li>
                        </ul>           
                    </nav>
                </div>  <!-- End application Header -->
                
                <div class="app-main-contant">
                    <h1>Application main content</h1>
                    <br/>
                    <img src="img/bart.jpg" alt="Bart Simpson" style="width: 400px; margin-left: auto; margin-right: auto;">
                </div>
                
            </div>    <!-- End application container -->
            <script src="js/mobile-menu.js"> </script>
	</body>
</html>