const allEnlargeIcons = document.querySelectorAll(".enlarge-icon-wrapper");

allEnlargeIcons.forEach((enlargeIcon, index ) => {
    const appImgWrapper = [];
    const closeButton = [];
    const modalContainer = [];
    const modalImgWrapper = [];
    const img = [];
    
    appImgWrapper[index] = enlargeIcon.parentElement.parentElement.parentElement;            
    closeButton[index] = appImgWrapper[index].querySelector(".close-icon-wrapper");        
    modalContainer[index] = appImgWrapper[index].querySelector(".modal-container");    
    modalImgWrapper[index] = appImgWrapper[index].querySelector(".modal-img-wrapper");
        
    const toggleModal = (ind) => {            
        modalContainer[ind].classList.toggle("show-modal");                
    };
        
    closeButton[index].addEventListener("click", () => toggleModal(index));
    
    enlargeIcon.addEventListener("click", e => {         
        const tgt = e.target;
        if (tgt.matches("img.enlarge-icon")) {    
            modalImgWrapper[index].innerHTML = "";
            img[index] = new Image();
            img[index].src = tgt.parentElement.parentElement.getElementsByClassName("main-img")[0].src;            
            img[index].style.height = "auto";
            modalImgWrapper[index].append(img[index]);
            toggleModal(index);
        }
    });
});
        
        

