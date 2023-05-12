(() =>{
    //console.log("immediatly invoked function expression");
    const 
    // Button for open menu on mobile device (3 horizontal short lines)
    openNavMenu = document.querySelector(".open-mobile-menu-btn"),
    
    // Text newar to Button - when clicked - open menu on mobile device
    openNavMenuText = document.querySelector(".mobile-menu-btn-text"),
    
    // Close menu button
    closeNavMenu = document.querySelector(".close-mobile-menu-btn"),
    
    navMenu = document.querySelector(".m-navbar"),
    
    menuOverlay = document.querySelector(".menu-overlay"), 
    mediaSize = 780;
    
    /* When user clicks on open menu text or image than the mobile menu 
     * is pulling out - displayed.
     * - classes open, active are added.
     *   */
    openNavMenu.addEventListener("click", toggleNav);
    openNavMenuText.addEventListener("click", toggleNav);
    closeNavMenu.addEventListener("click", toggleNav);
    
    // close window when clicking outside the menu area
    menuOverlay.addEventListener("click", toggleNav);
    
    function toggleNav() {
        navMenu.classList.toggle("open");
        menuOverlay.classList.toggle("active");
        document.body.classList.toggle("hidden-scrolling");
    }

    
    navMenu.addEventListener("click", (event) => {        
       /* If is menu item (in div .m-navbar are all hrefs menu items) and 
        * menu item has children ( has sibling ul - is node item) - shouldn't react on 
        * clickin on its href. (Made by event.preventDefault();)
        * This node items should just Expand its children or collapse... 
        * That what if condition does
        * 
        * else
        * 
        * All othar items (leafs) - do nothing - is activated the href by clicking
        *   
        *   */ 
       if (event.target.tagName.toLowerCase() === 'a' &&               
           event.target.nextElementSibling.tagName.toLowerCase() === 'ul' &&
           window.innerWidth <= mediaSize) 
       {                      
             
             // Prevent default anchor click behavior
             event.preventDefault();
             
             const menuItemHasChildren = event.target.parentElement;
             console.log('menuItemHasChildren');
             console.log(menuItemHasChildren);
             
             
             // If menuItemHasChildren is already expanded, collapse
             if(menuItemHasChildren.classList.contains("active")) {                 
                 removeActive();
                 removeHeightStyle(menuItemHasChildren);
             }
             else {                
                removeActive();
                removeHeightStyle(menuItemHasChildren); 
                // Expand new itemHasChildren
                menuItemHasChildren.classList.add("active");
                console.log('menuItemHasChildren');
                console.log(menuItemHasChildren);
                const subMenu = menuItemHasChildren.querySelector(".m-sub-menu");
                //subMenu.parentElement.parentElement.closest('div');
                console.log('submenu');
                console.log(subMenu);
                console.log(subMenu.parentElement.parentElement.closest('ul'));
                                                
                maxH = subMenu.scrollHeight;
                console.log('Max height clicked UL:' + maxH);
                                 
                maxHparent = subMenu.parentElement.parentElement.closest('ul').scrollHeight;
                console.log('Max height parent UL:' + maxHparent);
                
                //subMenu.style.maxHeight = subMenu.scrollHeight + "px";  
                subMenu.style.maxHeight = maxHparent+maxH + "px";  
             }
             
             
       } else {
           //console.log("false");
       }
    });    
    
    function removeHeightStyle(liElement) {
        nestedElements = liElement.parentElement.getElementsByTagName("ul");
        console.log('Number children elements: '+ nestedElements.length);
        for (i = 0; i <= nestedElements.length - 1; i++) {
            //console.log('--STEP remove style - --');
           nestedElements[i].removeAttribute("style");
        }
    }
    
    function removeActive() {                
        //const allElements2 = navMenu.querySelectorAll(".item-has-children.active");                
        const allElements2 = navMenu.querySelectorAll(".active");                
        for (i = 0; i <= allElements2.length - 1; i++) {
            //console.log('--STEP remove active --');
           allElements2[i].classList.remove("active");
        }                
    }
    
    window.addEventListener("resize", function() {
       if(this.innerWidth > mediaSize) {
           resizeFix();
       }
    });
    
    function resizeFix() {
        // If navMenu is open, close it
        if (navMenu.classList.contains("open")) {
            toggleNav();
        }
        // If menuItemHasChildren is expanded, collapse it      
        if (navMenu.querySelector(".active")) {
            collapseSubMenu();
        }
    }
})();


