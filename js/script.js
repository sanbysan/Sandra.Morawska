var main = function() {
	
	//Back to top
	
	var windowScrollHandler = function (){
		var offset = 200;
		var duration = 400;
		if ($(this).scrollTop() > offset) {
			$('#arrow-up > img').fadeIn(duration);
		} else {
			$('#arrow-up > img').fadeOut(duration);
			}
	}
	$(window).scroll(windowScrollHandler);
	
	/*$('#search').click(function(){
		$.get("http://localhost:8080/skrypt.php?id=1", function(response){
			console.log(response);
		})
	})*/
	
	$(".btn-about").click(function() {
		$('html, body').animate({
			scrollTop: $("#about").offset().top
		}, 1000);
	});
		
}
	
$(document).ready(main);