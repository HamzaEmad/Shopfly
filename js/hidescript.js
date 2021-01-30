$(".sign").click(function(){
  $(".sign-window").fadeIn() //chaining
    $(".close").click(function(){
      $('.sign-window').fadeOut()
})
});
$("#select-all").click(function(){
  $("[id^=cpu]").each(function() {
    $(this).fadeIn(500);
  })
  $("[id^=mb]").each(function() {
    $(this).fadeIn(500);
  })
  $("[id^=ram]").each(function() {
    $(this).fadeIn(500);
  })
  $("[id^=gpu]").each(function() {
    $(this).fadeIn(500);
  })
});
$("#select-cpu").click(function(){
  $("[id^=cpu]").each(function() {
    $(this).fadeIn(500);
  })
  $("[id^=mb]").each(function() {
    $(this).fadeOut(500);
  })
  $("[id^=ram]").each(function() {
    $(this).fadeOut(500);
  })
  $("[id^=gpu]").each(function() {
    $(this).fadeOut(500);
  })
});
$("#select-ram").click(function(){
  $("[id^=cpu]").each(function() {
    $(this).fadeOut(500);
  })
  $("[id^=mb]").each(function() {
    $(this).fadeOut(500);
  })
  $("[id^=ram]").each(function() {
    $(this).fadeIn(500);
  })
  $("[id^=gpu]").each(function() {
    $(this).fadeOut(500);
  })
});
$("#select-mb").click(function(){
  $("[id^=cpu]").each(function() {
    $(this).fadeOut(500);
  })
  $("[id^=mb]").each(function() {
    $(this).fadeIn(500);
  })
  $("[id^=ram]").each(function() {
    $(this).fadeOut(500);
  })
  $("[id^=gpu]").each(function() {
    $(this).fadeOut(500);
  })
});
$("#select-gpu").click(function(){
  $("[id^=cpu]").each(function() {
    $(this).fadeOut(500);
  })
  $("[id^=mb]").each(function() {
    $(this).fadeOut(500);
  })
  $("[id^=ram]").each(function() {
    $(this).fadeOut(500);
  })
  $("[id^=gpu]").each(function() {
    $(this).fadeIn(500);
  })
});
