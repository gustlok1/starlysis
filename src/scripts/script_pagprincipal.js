function sideBar(){
    document.querySelector('.menu--section').classList.toggle('active');
}
function toggleMenu(){
    document.querySelector('.header--div_login').classList.toggle('active');
}

console.log(document.getElementsByClassName("header--login").innerHTML);
if(document.getElementsByClassName("header--login").innerHTML != "Entrar"){
    links = document.querySelectorAll(".header--login");
    links[0].setAttribute('href','#');
    links[1].setAttribute('href','#');
}