let images_select = document.getElementById("images");
images_select.addEventListener("change", function(){
    change_image(this);
})
let image_input = document.getElementById('load_img');
image_input.addEventListener("change", function(){
    change_image_on_load(this);
})
function change_image(element) {
    let url = element.value;
    document.getElementById("prewiew-image").src = url;
}
function change_image_on_load(element){
    let fileName = document.getElementById("load_img").value;
    let extFile = fileName.split(".")[1];
    console.log(element);
    console.log(element.files[0]);
    if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
        let url = URL.createObjectURL(element.files[0]);
        document.getElementById("prewiew-image").src = url;
    }else{
        alert("Only jpg/jpeg and png files are allowed!");
    }
}   
