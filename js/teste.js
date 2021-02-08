var btn = document.getElementById("btn_teste");

// btn.addEventListener("click", function(){
//     var conteiner = document.getElementById("dados");
//     var conteiner_login = document.getElementById("login");

//     if(conteiner.style.display === "none"){
//         conteiner.style.display = "block";
//         conteiner.style.transition = "2s"
//         conteiner_login.style.border ="solid 1px";
//         conteiner_login.style.borderBottom ="none";
//         conteiner_login.style.borderRight ="none", conteiner_login.style.borderTop ="none";
//     }else{
//         conteiner.style.display = "none";
//     }
// });

btn.addEventListener("click", function(){
    var conteiner = document.getElementById("dados1");
    conteiner.classList.toggle("dados");
})
