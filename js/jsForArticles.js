// amazon flipkart -- buying button flex and hide
function buyNowOverDivdisplay() {
    document.getElementById("buyNowOverDiv").style.display = "flex";
}
function buyNowOverDivHide() {
    document.getElementById("buyNowOverDiv").style.display = "none";
}



// showing sample-img in the sample box
function displayImg(e) {
    document.getElementsByClassName("samples-showBox")[0].style.backgroundImage="url(" + e.src + ")";
    document.getElementsByClassName("samples-showBox")[0].style.backgroundSize="100% 100%";
}

$(document).ready(function(){
    document.getElementsByClassName("samples-showBox")[0].style.backgroundImage="url(../req/1.jpg)";
    document.getElementsByClassName("samples-showBox")[0].style.backgroundSize="100% 100%";
});