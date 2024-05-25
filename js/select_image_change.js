let x = document.getElementById("images");
x.addEventListener("change", function(){
    change_image(this);
})
function change_image(element) {
    let url = element.value;
    document.getElementById("prewiew-image").src = url;
}
