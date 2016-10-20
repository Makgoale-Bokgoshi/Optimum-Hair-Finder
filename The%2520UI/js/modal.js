function showX(image,cap){
var modal = document.getElementById('myModal');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
    modal.style.display = "block";
    modalImg.src = image;
    captionText.innerHTML = cap;


var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    modal.style.display = "none";
}
}