$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
});

function open1() {
	if (document.getElementById("content").style.display == "none") {
		document.getElementById("content").style.display = "none";
		document.getElementById("navscreen").style.display = "none";
	} 
	else {
		document.getElementById("content").style.display = "none";
		document.getElementById("navscreen").style.display = "block";
	}
}

// snapscroll
$(function(){

	$("section").SnapScroll();
  
  });


// reload page on double click hamburger
var buttonClickCount = 0;

function handleClick() {
buttonClickCount++;

if (buttonClickCount === 2) {
	location.reload(); // Refresh the page
}
}