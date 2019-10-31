console.log("hello ruther");
let navbar= document.getElementsByClassName("navbar");
let sticky=navbar.offsetTop;
console.log(sticky);
function checkposition(){
    if(window.pageYOffset >= sticky){
        navbar.classList.add("fix-my-nav")
    }else{

    }
}
window.onscroll=function(){
    checkposition()
}