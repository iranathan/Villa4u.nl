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