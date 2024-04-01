// kreativne
const pop_up = document.querySelector(".pop-up-image");
document.querySelector(".close-pop-up").addEventListener("click", function(){
    pop_up.style.display = "none";
})
const images = document.getElementsByClassName("expanding-img");
for(let i = 0; i<images.length; i++){
    images[i].addEventListener("click", function(){
        show(this);
    })
}
function show(image){
    document.querySelector(".pop-up-image img").src = image.getAttribute("src");
    pop_up.style.display = "block";
}