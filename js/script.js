//Movement Animation to happen
 card = document.querySelector(".card");
//Items
 title = document.querySelector(".title");
 product = document.querySelector(".product img");
 view = document.querySelector(".view");
 description = document.querySelector(".info h3 h2");

//Moving Animation Event
card.addEventListener("mousemove", (e) => {
  let xAxis = (window.innerWidth / 2 - e.pageX) / 75;
  let yAxis = (window.innerHeight / 2 - e.pageY) / 75;
  card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});
//Animate In
card.addEventListener("mouseenter", (e) => {
  card.style.transition = "none";
  //Popout
  title.style.transform = "translateZ(30px)";
  product.style.transform = "translateZ(30px) ";
  description.style.transform = "translateZ(100px)";
  view.style.transform = "translateZ(50px)";
});
//Animate Out
card.addEventListener("mouseleave", (e) => {
  card.style.transition = "all 0.5s ease";
  card.style.transform = `rotateY(0deg) rotateX(0deg)`;
  //Popback
  title.style.transform = "translateZ(0px)";
  product.style.transform = "translateZ(0px) rotateZ(0deg)";
  description.style.transform = "translateZ(0px)";
  view.style.transform = "translateZ(0px)";
});
//cards crousal script
$(".slider").owlCarousel({
  loop: true,
  autoplay: true,
  autoplayTimeout: 2000, //2000ms = 2s;
  autoplayHoverPause: true,
});
$(".sign").click(function(){
  $(".sign-window").fadeIn() //chaining
    $(".close").click(function(){
      $('.sign-window').fadeOut()
})
});
