$('#menu-icon').click(function() {
  $( "#menu-well" ).slideToggle();
});

var d = new Date();
var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
document.getElementById("foot-day").innerHTML = days[d.getDay()];


function emailSignup() {
  $('#mc_embed_signup').fadeIn();
  $('#mc_embed_signup').css({display: 'grid'});
  $('html, body').css({
    overflow: 'hidden',
  });
}



$('#close-prompt').on( "click", function() {
  $('#mc_embed_signup').fadeOut();
  $('html').css({
    overflow: 'auto',
  });
});


$("form").submit(function() {
  $('#mc_embed_signup').fadeOut();
  $('html').css({
    overflow: 'auto',
  });
});
