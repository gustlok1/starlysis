function sideBar(){
    document.querySelector('.menu--section').classList.toggle('active');
}
function toggleMenu(){
    div = document.querySelector('.header--div_login');
    if(div.classList == "header--div_login active"){
        div.classList.toggle('active');
        setTimeout(()=>{div.style.display="none"},200);
    }
    else{
        div.style.display="block";
        setTimeout(()=>{div.classList.toggle('active')},200);
    }
}