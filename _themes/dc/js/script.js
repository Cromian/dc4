$('#menu-icon').click(function() {
  $( "#menu-well" ).slideToggle();
});

var d = new Date();
var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
document.getElementById("foot-day").innerHTML = days[d.getDay()];
