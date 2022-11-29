$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.modal').modal();
    $('.carousel').carousel();
  });

$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
  });

setInterval(function(){
  $('.carousel.carousel-slider').carousel('next');
},6000);


$(".switch").on('mouseup',function() {
  console.log($("#theme").attr("href"));
  if($("#theme").attr("href")=="css/white.css"){
    $("#theme").attr("href", "css/dark.css")
    $(".dark-mode-icon").html("brightness_2")
  }else{
    $("#theme").attr("href", "css/white.css")
    $(".dark-mode-icon").html("wb_sunny")
  }
}); 
