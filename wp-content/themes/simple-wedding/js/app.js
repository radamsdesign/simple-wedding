(function() {
	$(".column").on("click", function(e) {
		e.preventDefault();
		$(this).toggleClass("show");
	});

	$(document).ready(function() {
  function setHeight() {
  	navHeight = $("header#masthead").height();
    //console.log(navHeight);
    windowHeight = $(window).innerHeight();
    heroHeight = windowHeight - navHeight;
   // console.log(windowHeight);
    $('section, .slider-img').css('min-height', windowHeight);
    $('section.hero-image').css('min-height', heroHeight);
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

// jQuery ScrollTo 
$("ul#primary-menu li a").on("click", function(e) {
  e.preventDefault();
  target = this.hash;
  $.scrollTo(target, 1000, {offset:-75});
});


$("nav#site-navigation ul li a").on("click", function() {
  $("nav#site-navigation").removeClass("toggled");
});




})();