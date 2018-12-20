// $(document).ready(function() {
//   var movementStrength = 20;
//   var height = movementStrength / $(window).height();
//   var width = movementStrength / $(window).width();
//   $(".masthead h1").mousemove(function(e) {
//     var pageX = e.pageX - ($(window).width() / 2);
//     var pageY = e.pageY - ($(window).height() / 2);
//     var newvalueX = width * pageX * -1 - 20;
//     var newvalueY = height * pageY * -1 - 45;
//     $('.masthead h1').css("background-position", newvalueX + "px     " + newvalueY + "px");
//   });
// });

$('.dropdown').on('show.bs.dropdown', function(e) {
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});


var colours = ["#6f4ea0", "#84b040", "#2186b8"],
  idx;

$(function() {
  var div = $('#arch');
  var chars = div.text().split('');
  div.html('');
  for (var i = 0; i < chars.length; i++) {
    idx = Math.floor(Math.random() * colours.length);
    var span = $('<span>' + chars[i] + '</span>').css("color", colours[idx]);
    div.append(span);
  }
});

AOS.init({
  duration: 1200,
})