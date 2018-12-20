$(document).ready(function(){
   var nav = document.querySelector("nav");
   var a = document.querySelectorAll("nav a");
   var login = document.querySelectorAll("nav #login")[0];
   console.log(nav);
  $(window).on("scroll",function(){
    // console.log($(window).scrollTop()==0);
    if ($(window).scrollTop()){
      nav.classList.add('black');
      for(var i = 0; i<a.length; i++){
        a[i].style.color = "white";
      }
      login.style.background = "white";
      login.children[0].style.color = "black";
    }else{
      nav.classList.remove('black');
      for(var i = 0; i<a.length; i++){
        a[i].style.color = "black";
      }
      login.style.background = "black";
      login.children[0].style.color = "white";
    }
  })
})
