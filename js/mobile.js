$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
});

function open1() {
	if (document.getElementById("content").style.display == "none") {
		document.getElementById("content").style.display = "flex";
		document.getElementById("navscreen").style.display = "none";
	} 
	else {
		document.getElementById("content").style.display = "none";
		document.getElementById("navscreen").style.display = "block";
	}
}

// slideshow
var slideIndex = 0;
    var slides = document.getElementsByClassName('slideshow-image');

    function showSlides() {
      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }

      slideIndex++;

      if (slideIndex > slides.length) {
        slideIndex = 1;
      }

      slides[slideIndex - 1].style.display = 'block';
      setTimeout(showSlides, 2000); // Change slide every 2 seconds
    }

    showSlides();