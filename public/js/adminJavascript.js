$(document).ready(function(){
  $(".contains").hide();
  var contains = document.querySelector(".contains")
  $(".HEAD").click(function(){
    $(this).next().slideToggle(1000);
  });
})
