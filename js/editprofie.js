function chooseProPicDivShow(){
    document.getElementById("choose_pic_div").style.visibility = 'visible';
}
function chooseProPicDivHide(){
    document.getElementById("choose_pic_div").style.visibility = 'hidden';
}
function changeProfilePicture(id){
    var imagePath = document.getElementById(id).src;
    document.getElementById("avatar").src = imagePath;
    document.getElementById("avatar1").src = imagePath;
    document.getElementById("dp").value = imagePath;
    chooseProPicDivHide();
}