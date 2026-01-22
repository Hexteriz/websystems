document.addEventListener("DOMContentLoaded", function() {
    registerEventListeners();
});

function registerEventListeners() {
    const thumbnails = document.getElementsByClassName("img-thumbnail");
    
    for (let i = 0; i < thumbnails.length; i++) {
        thumbnails[i].addEventListener("click", showPopup);
    }
}

function showPopup(event) {
    removePopup();
    
    const popup = document.createElement("span");
    popup.setAttribute("class", "img-popup");
    const largeImage = event.target.src.replace("_small.jpg", "_large.jpg");
    popup.innerHTML = `<img src="${largeImage}">`;
    popup.addEventListener("click", removePopup);
    
    document.body.insertAdjacentElement("afterbegin", popup);
    event.preventDefault();
}

function removePopup() {
    const existing = document.querySelector(".img-popup");
    if (existing) {
        existing.remove();
    }
}
