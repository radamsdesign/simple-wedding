(function() {
	$(".column").on("click", function(e) {
		e.preventDefault();
		$(this).toggleClass("show");
	});

	$(document).ready(function() {
  function setHeight() {
  	navHeight = $("header#masthead").height();
    console.log(navHeight);
    windowHeight = $(window).innerHeight();
    console.log(windowHeight);
    $('section, .slider-img').css('min-height', windowHeight);
  };
  setHeight();
  
  $(window).resize(function() {
    setHeight();
  });
});

var waypoints = $('section.our-story').waypoint({
  handler: function(direction) {
    $("header#masthead").toggleClass("sticky");
  }
})

// var sticky = new Waypoint.Sticky({
//   element: $('header#masthead'),
//   wrapper: '<div class="sticky-wrapper waypoint" />'
// });



})();